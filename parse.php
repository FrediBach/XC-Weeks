<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
<?php

die();


error_reporting(E_ALL);
ini_set('display_errors', 1);


$data = file_get_contents('100kflights-2016.html');

$doc = new DOMDocument();
$doc->loadHTML('<?xml encoding="UTF-8">' . $data);

/*
foreach ($doc->childNodes as $item){
	foreach ($item->childNodes as $item1){
		foreach ($item1->childNodes as $item2){
			foreach ($item2->childNodes as $item3){
				echo '.';
				foreach ($item3->childNodes as $item4){
					echo '-';
					foreach ($item4->childNodes as $item5){
						echo '!';
					}
				}
			}
		}
	}
}
*/

$flights = array();

foreach ($doc->getElementsByTagName('tr') as $tr) { 
	//echo $tr->nodeValue . '<br />';
	
	$row = array();
	$nodes = array();
	
	foreach ($tr->getElementsByTagName('td') as $td) { 
		$row[] = $td->nodeValue;
		$nodes[] = $td;
	}
	
	$link = '';
	foreach($nodes[2]->getElementsByTagName('a') as $link) { 
		$link = $link->getAttribute('href');
	}
	$split = explode('=', $link);
	$link = $split[1];
	$split = explode('&', $link);
	$link = $split[0];
	$split = explode(' ', $link);
	$lat = $split[0];
	$lng = $split[1];
	
	$datestr = substr($row[1], 0, 8);
	$date = new DateTime('20'.substr($datestr,6,2).'-'.substr($datestr,3,2).'-'.substr($datestr,0,2));
	$week = (int)$date->format("W");
	$month = $date->format("M");

	preg_match("/\/([a-z]+):([a-z]+)\//", $link, $matches);
	
	$pilot = '';
	if (isset($matches[2])) {
		$pilot = $matches[2];
	}
	
	$data = array(
		'date' => $datestr,
		'week' => $week,
		'month' => $month,
		'country' => substr($row[2], 0, 2),
		'takeoff' => substr($row[2], 2),
		'distance' => (float)substr($row[4], 0, -3),
		'points' => (float)substr($row[5], 0, -2),
		'speed' => (float)$row[6],
		'cert' => substr($row[7], 0, 1),
		'lat' => (float)$lat,
		'lng' => (float)$lng,
		'pilot' => $pilot
	);
	
	$flights[] = $data;
	
	//echo $data['date'].' - '.$data['week'].' - '.$data['month'].' - '.$data['country'].' - '.$data['takeoff'].' - '.$data['distance'].' - '.$data['points'].' - '.$data['speed'].' - '.$data['cert'].' - '.$data['lat'].' - '.$data['lng'].'<br />';
	
}

echo count($flights);

$weeks = array();

foreach($flights as $flight){
	if (!isset($weeks[$flight['week']])){
		$weeks[$flight['week']] = array();
	}
	if (!isset($weeks[$flight['week']][$flight['country']])){
		$weeks[$flight['week']][$flight['country']] = array('flights' => array(), 'cnt' => 0);
	}
	$weeks[$flight['week']][$flight['country']]['flights'][] = $flight;
	$weeks[$flight['week']][$flight['country']]['cnt']++;
}

ksort($weeks);

function cntsort($item1,$item2)
{
    if ($item1['cnt'] == $item2['cnt']) return 0;
    return ($item1['cnt'] < $item2['cnt']) ? 1 : -1;
}

foreach($weeks as $k => $v){
	uasort($weeks[$k], 'cntsort');
}

file_put_contents('100kflights-2016.json', json_encode($weeks));

echo '!';
