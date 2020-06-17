<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>XC Weeks - The best weeks to fly 100k with a paraglider!</title>
        <style>
        	
        	body, html {
	        	margin: 0px;
	        	padding: 0px;
        	}
        	
        	body {
	        	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	        	font-size: 14px;
        	}
        	
        	img.logo {
	        	height: 88px;
	        	width: 88px;
	        	float: left;
	        	margin-right: 40px;
	        	margin-left: 35px;
	        	margin-top: 10px;
	        	margin-bottom: 10px;
	        	opacity: 0.7;
        	}
        	
        	p {
	        	max-width: 900px;
	        	margin-top: 0px;
	        	margin-bottom: 8px;
        	}
        	
        	a {
	        	color: #fff;
        	}
        	
        	a:hover {
	        	text-decoration: none;
        	}
        	
        	.highlighted {
	        	color: #fff;
        	}
        	
        	.container {
	        	margin: 40px;
	        	margin-top: 20px;
	        	margin-bottom: 10px;
	        	position: relative;
        	}
        	.footer {
	        	float: right;
        	}
        	
        	.monthselect {
	        	position: absolute;
	        	right: 0px;
	        	top: 0px;
        	}
        	
        	h1 {
        		margin-top: 0px;
        		margin-bottom: 12px;
	        	font-size: 24px;
	        	font-family: 'Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif; 
        	}
        	
        	.weeks {
	        	overflow: hidden;
        	}
			
			.week {
				display: block;
				width: 474px;
				height: 418px;
				float: left;
				margin: 40px;
				margin-top: 20px;
				margin-right: 20px;
				padding: 4px;
				overflow: hidden;
				background: #fff;
				background: rgba(255,255,255,0.5);
				border-radius: 3px;
				-webkit-box-shadow: 0px 0px 20px 3px rgba(0,0,0,0.3);
				-moz-box-shadow: 0px 0px 20px 3px rgba(0,0,0,0.3);
				box-shadow: 0px 0px 20px 3px rgba(0,0,0,0.3);
			}
			
			.week .header {
				color: #000;
				padding-bottom: 4px;
				position: relative;
			}
			
			.week .header .rating {
				position: absolute;
				top: 0px;
				right: 0px;	
			}
			
			.week .header .rating span {
				color: rgba(0,0,0,0.1);
			}
			
			.week .header .rating span.active {
				color: rgba(0,0,0,1);
			}
			
			.week .header .title {
				font-weight: 18px;
				font-weight: bold;
			}
			
			.week .header .weekrange {
				margin-left: 20px;
				font-size: 12px;
			}
			
			.countries {
				height: 150px;
				overflow: auto;
			}
			
			.week .country {
				padding: 4px;
				margin-bottom: 2px;
				margin-left: 2px;
				margin-right: 2px;
				position: relative;
			}
			
			.week .action {
				position: absolute;
				right: 7px;
				top: 7px;
				background: #333;
				color: #fff;
				border-radius: 2px;
				font-size: 10px;
				padding: 1px;
				padding-left: 4px;
				padding-right: 4px;
				padding-bottom: 2px;
				cursor: pointer;
				cursor: hand;
				-moz-user-select: -moz-none;
			    -khtml-user-select: none;
			    -webkit-user-select: none;
			    -o-user-select: none;
			    user-select: none;
			}
			
			.week .action:hover {
				background: #000;
			}
			
			.countryinfos {
				background: rgba(0,0,0,0.05);
				border-radius: 3px;
				padding: 2px;
			}
			
			.week .country .title {
				width: 55px;
				display: inline-block;
			}
			
			.week .meta {
				font-size: 11px;
				margin-left: 15px;
				color: #666;
				width: 55px;
				display: inline-block;
			}
			
			.week .meta.meta100ks {
				width: 70px;
			}
			
			.week .meta.metascore {
				width: 40px;
			}
			
			.week .meta i {
				font-size: 14px;
				color: #145a9b;
				font-weight: bold;
				font-style: normal;
			}
			
			.week .country .takeoffs {
				margin-top: 4px;
				padding-top: 4px;
				line-height: 160%;
				display: none;
			}
			
			.week .country .takeoffs .takeoff {
				display: inline-block;
				cursor: pointer;
				cursor: hand;
				-moz-user-select: -moz-none;
			    -khtml-user-select: none;
			    -webkit-user-select: none;
			    -o-user-select: none;
			    user-select: none;
			}
			
			.week .country .takeoffs .takeoff:hover {
				text-decoration: underline;
			}
			
			.week .country .takeoffs .flights {
				color: #B72106;
				margin-left: 4px;
				margin-right: 10px;
			}
			
        	.heatmap {
        		width: 472px;
        		height: 235px;
        		border: 1px #fff solid;
        		border-radius: 4px;
        		margin-bottom: 6px;
        		-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
				-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
				box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        	}
        	
        	body > canvas {
	        	position: fixed;
	        	top: 0px;
	        	bottom: 0px;
	        	z-index: -1;
        	}
        	
        	.marker {
        		color: #6e4f33;
	        	border-left: 1px rgba(110,79,51,0.8) dotted;
	        	border-bottom: 1px rgba(110,79,51,0.8) dotted;
	        	padding-left: 8px;
	        	padding-bottom: 0px;
	        	padding-top: 6px;
	        	border-bottom-left-radius: 6px;
	        	margin-left: -1px;
	        	margin-top: -1px;
	        	font-size: 10px;
	        }
	        .marker .text {
	        	-moz-text-shadow: 0 0 2px #fff;
				-webkit-text-shadow: 0 0 2px #fff;
				text-shadow: 0px 0px 2px #fff;
        	}
        	
        </style>
        
        <link href="http://xcweeks.com/favicon.ico" rel="icon" type="image/x-icon" />
		
    </head>
	<body>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data1 = json_decode(file_get_contents('data/100kflights-2015.json'));
$data2 = json_decode(file_get_contents('data/100kflights-2014.json'));
$data3 = json_decode(file_get_contents('data/100kflights-2013.json'));
$data4 = json_decode(file_get_contents('data/100kflights-2010-2012.json'));

$data = new stdClass;

foreach($data1 as $week => $countries){
	if (!isset($data->{$week})) $data->{$week} = new stdClass;
	foreach($countries as $country => $meta){
		if (!isset($data->{$week}->{$country})){
			$data->{$week}->{$country} = new stdClass;
			$data->{$week}->{$country}->cnt = 0;
			$data->{$week}->{$country}->flights = array();
		}
		$data->{$week}->{$country}->flights = array_merge($data->{$week}->{$country}->flights, $meta->flights);
	}
}

foreach($data2 as $week => $countries){
	if (!isset($data->{$week})) $data->{$week} = new stdClass;
	foreach($countries as $country => $meta){
		if (!isset($data->{$week}->{$country})){
			$data->{$week}->{$country} = new stdClass;
			$data->{$week}->{$country}->cnt = 0;
			$data->{$week}->{$country}->flights = array();
		}
		$data->{$week}->{$country}->flights = array_merge($data->{$week}->{$country}->flights, $meta->flights);
	}
}

foreach($data3 as $week => $countries){
	if (!isset($data->{$week})) $data->{$week} = new stdClass;
	foreach($countries as $country => $meta){
		if (!isset($data->{$week}->{$country})){
			$data->{$week}->{$country} = new stdClass;
			$data->{$week}->{$country}->cnt = 0;
			$data->{$week}->{$country}->flights = array();
		}
		$data->{$week}->{$country}->flights = array_merge($data->{$week}->{$country}->flights, $meta->flights);
	}
}

foreach($data4 as $week => $countries){
	if (!isset($data->{$week})) $data->{$week} = new stdClass;
	foreach($countries as $country => $meta){
		if (!isset($data->{$week}->{$country})){
			$data->{$week}->{$country} = new stdClass;
			$data->{$week}->{$country}->cnt = 0;
			$data->{$week}->{$country}->flights = array();
		}
		$data->{$week}->{$country}->flights = array_merge($data->{$week}->{$country}->flights, $meta->flights);
	}
}

foreach($data as $week => $countries){
	foreach($countries as $country => $meta){
		$data->{$week}->{$country}->cnt = count($data->{$week}->{$country}->flights);
	}
}


echo '<div class="container">';
echo '<div class="monthselect"><select><option value="" selected>Full year</option><option value="Jan">January</option><option value="Feb">February</option><option value="Mar">March</option><option value="Apr">April</option><option value="May">May</option><option value="Jun">June</option><option value="Jul">July</option><option value="Aug">August</option><option value="Sep">September</option><option value="Oct">October</option><option value="Nov">November</option><option value="Dez">Dezember</option></select></div>';
echo '<img class="logo" src="xc-weeks-logo-3.svg" alt="XC Weeks" title="XC Weeks"><h1>The very best weeks to fly 100k with a paraglider?</h1>';
echo '<p>Ever wondered where to go if you want to fly as many 100k\'s in a year as possible? XC Weeks can help you. It shows you where and in which week you\'ll be able to fly 100km based on the top 15\'000 100km flights of the top ranked pilots in that category.</p>';
echo '<p><span class="highlighted">But take care, some of those places have really strong conditions in those weeks!</span></p>';
echo '</div>';


function getStartAndEndDate($week, $year){

    $time = strtotime("1 January $year", time());
    $day = date('w', $time);
    $time += ((7*$week)+1-$day)*24*3600;
    $return[0] = date('F j.', $time);
    $time += 6*24*3600;
    $return[1] = date('F j. Y', $time);
    
    return $return;
    
}

function getStartMonth($week, $year){

    $time = strtotime("1 January $year", time());
    $day = date('w', $time);
    $time += ((7*$week)+1-$day)*24*3600;
    return date('M', $time);
    
}

function getEndMonth($week, $year){

    $time = strtotime("1 January $year", time());
    $day = date('w', $time);
    $time += ((7*$week)+1-$day)*24*3600;
    $time += 6*24*3600;
    return date('M', $time);
    
}

function fixTakeoff($name){
	$from = array(
		'Roldanillo [...',
		'Roldanillo pico',
		'borah N',
		'Kerio View H...',
		'Kerio View S...',
		'kerio view',
		'Mt Borah South',
		'Kerio View Sud',
		'kerio',
		'Kerio Süd',
		'Mt. Borah W',
		'zrezane Kerio View',
		'South Kerio',
		'roldanillo',
		'greenacres ...',
		'Greenacres west',
		'Mt. Borah E',
		'Mt. Borah Nor...',
		'Picco, Rolda...',
		'Mt. Bora',
		'Mt. Borah (AU)',
		'mt borah',
		'Mt. Borah S',
		'Roldanillo. ...',
		'El Penon',
		'Mt. Borahh',
		'MT. Borah',
		'Mt. Borah NE',
		'Stella alpina',
		'Bassano [da ...',
		'serrone',
		'garzetta',
		'garzetta gemona',
		'Gemona',
		'bassano',
		'dubbo',
		'Gemona Garzetta Garzette',
		'Serrone 1',
		'Bassano [Ant...',
		'Bassano [Cas...',
		'Barrington Tow',
		'Barrington 3...',
		'Dubbo north',
		'Fanas Eggli',
		'Fiesch Heimatt',
		'Landeck 1',
		'Fiesch [Heimat]',
		'Wildkogel 2',
		'Serrone (IT)',
		'marlens',
		'Bassano - ta...',
		'BASSANO',
		'fanas',
		'Fanas 2',
		'fiesch',
		'riederalp'
	);
	$to = array(
		'Roldanillo',
		'Roldanillo',
		'Mt. Borah',
		'Kerio View',
		'Kerio View',
		'Kerio View',
		'Mt. Borah',
		'Kerio View',
		'Kerio View',
		'Kerio View',
		'Mt. Borah',
		'Kerio View',
		'Kerio View',
		'Roldanillo',
		'Greenacres',
		'Greenacres',
		'Mt. Borah',
		'Mt. Borah',
		'Roldanillo Pico',
		'Mt. Borah',
		'Mt. Borah',
		'Mt. Borah',
		'Mt. Borah',
		'Roldanillo',
		'El Peñon',
		'Mt. Borah',
		'Mt. Borah',
		'Mt. Borah',
		'Stella Alpina',
		'Bassano',
		'Serrone',
		'Gemona Garzetta',
		'Gemona Garzetta',
		'Gemona Garzetta',
		'Bassano',
		'Dubbo',
		'Gemona Garzetta',
		'Serrone',
		'Bassano',
		'Bassano',
		'Barrington',
		'Barrington',
		'Dubbo',
		'Fanas',
		'Fiesch',
		'Landeck',
		'Fiesch',
		'Wildkogel',
		'Serrone',
		'Marlens',
		'Bassano',
		'Bassano',
		'Fanas',
		'Fanas',
		'Fiesch',
		'Riederalp'
	);
	return str_replace($from, $to, $name);
}


$weeks = array();

function cntsort($item1,$item2){
    if ($item1['100ks'] == $item2['100ks']) return 0;
    return ($item1['100ks'] < $item2['100ks']) ? 1 : -1;
}

foreach($data as $week => $countries){
	
	$first_value = reset($countries);
	$first_key = key($countries);
	
	$locations = array();
	
	foreach($countries as $country => $meta){
	
		$dates = array();
		$max = 0;
		$twos = 0;
		
		foreach($meta->flights as $flight){
			if ($flight->distance >= 200) $twos++;
			if ($flight->points > $max) $max = $flight->points;
			$dates[$flight->date] = true;
		}
		
		$score = round(count($dates) / 35 * 100);
		
		if (!isset($weeks[$week])){
			$weeks[$week] = array(
				'month' => $countries->{$first_key}->flights[0]->month,
				'100ks' => 0,
				'countries' => array()
			);
		}
		
		$weeks[$week]['100ks'] = $weeks[$week]['100ks'] + $meta->cnt;
		
		$weeks[$week]['countries'][$country] = array(
			'100ks' => $meta->cnt,
			'200ks' => $twos,
			'score' => $score,
			'max' => $max,
			'takeoffs' => array()
		);
		
		uasort($weeks[$week]['countries'], 'cntsort');
		
		$takeoffs = array();
		$takeoffpos = array();
		foreach($meta->flights as $flight){
			$lockey = round($flight->lng,1).','.round($flight->lat,1);
			if (isset($locations[$lockey])){
				$locations[$lockey]['count']++;
			} else {
				$locations[$lockey] = array(
					'lat' => round($flight->lng,1),
					'lng' => round($flight->lat,1),
					'count' => 1
				);
			}
			if (!isset($takeoffs[fixTakeoff($flight->takeoff)])){
				$takeoffs[fixTakeoff($flight->takeoff)] = 1;
				$takeoffpos[fixTakeoff($flight->takeoff)] = array('lat' => $flight->lat, 'lng' => $flight->lng);
			} else {
				$takeoffs[fixTakeoff($flight->takeoff)]++;
			}
		}
		arsort($takeoffs);
		
		foreach($takeoffs as $takeoff => $cnt){
			$weeks[$week]['countries'][$country]['takeoffs'][] = array('name' => $takeoff, 'flights' => $cnt, 'lat' => $takeoffpos[$takeoff]['lat'], 'lng' => $takeoffpos[$takeoff]['lng']);
		}
		
	}
	
	$coords = array();
	$max = 0;
	foreach($locations as $loc){
		if ($loc['count'] > $max) $max = $loc['count'];
		$coords[] = $loc;
	}
	
	$weeks[$week]['heatmapcoords'] = $coords;
	$weeks[$week]['heatmapmax'] = $max;

}

echo '<div class="weeks">';
foreach($weeks as $k => $week){

	$year = (int)date("Y");
	if ((int)date('W') > $k){
		$weekrange = getStartAndEndDate(((int)$k)-1, $year+1);
		$startmonth = getStartMonth(((int)$k)-1, $year+1);
		$endmonth = getEndMonth(((int)$k)-1, $year+1);
	} else {
		$weekrange = getStartAndEndDate(((int)$k)-1, $year);
		$startmonth = getStartMonth(((int)$k)-1, $year);
		$endmonth = getEndMonth(((int)$k)-1, $year);
	}

	echo '<div class="week week_'.$k.' month_'.$startmonth.' month_'.$endmonth.'">';
	
	echo '<div class="header">';
	
	echo '<div class="rating">';
	if ($week['100ks'] > 30){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 75){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 150){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 300){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 600){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	echo '</div>';
	
	echo '<span class="title">Week '.$k.'</span>';
	
	echo '<span class="weekrange">'.$weekrange[0].' to '.$weekrange[1].'</span>';
	
	echo '</div>';
	
	echo '<div class="heatmap" data-max="'.$week['heatmapmax'].'" data-coords=\''.json_encode($week['heatmapcoords']).'\'></div>';
	
	echo '<div class="countries">';
	$biggest = array();
	foreach($week['countries'] as $k2 => $country){
		echo '<div class="country country_'.$k2.'">';
		echo '<div class="action">show takeoffs</div>';
		echo '<div class="countryinfos">';
		echo '<span class="title"><img src="countries/'.strtolower($k2).'.png"> '.$k2.'</span>';
		echo '<span class="meta meta100ks"><i>'.$country['100ks'].'</i> 100ks</span>';
		echo '<span class="meta meta200ks"><i>'.$country['200ks'].'</i> 200ks</span>';
		echo '<span class="meta metascore"><i>'.$country['score'].'</i> %</span>';
		echo '<span class="meta metamax"><i>'.round($country['max']).'</i> p</span>';
		echo '</div>';
		echo '<div class="takeoffs">';
		foreach($country['takeoffs'] as $k3 => $takeoff){
			if (empty($biggest) || $biggest['flights'] < $takeoff['flights']){
				$biggest = $takeoff;
			}
			echo '<div class="takeoff takeoff_'.$k3.'" data-lat="'.$takeoff['lat'].'" data-lng="'.$takeoff['lng'].'">';
			echo '<span class="name">'.$takeoff['name'].'</span>';
			echo '<span class="flights">'.$takeoff['flights'].'</span>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
	}
	$secondbiggest = array();
	foreach($week['countries'] as $k2 => $country){
		foreach($country['takeoffs'] as $k3 => $takeoff){
			if ( (abs($biggest['lat']-$takeoff['lat']) > 30 || abs($biggest['lng']-$takeoff['lng']) > 30) && $biggest['name'] != $takeoff['name']){
				if (empty($secondbiggest) || $secondbiggest['flights'] < $takeoff['flights']){
					$secondbiggest = $takeoff;
				}
			}
		}
	}
	$thirdbiggest = array();
	foreach($week['countries'] as $k2 => $country){
		foreach($country['takeoffs'] as $k3 => $takeoff){
			if ( (abs($biggest['lat']-$takeoff['lat']) > 30 || abs($biggest['lng']-$takeoff['lng']) > 30) && (abs($secondbiggest['lat']-$takeoff['lat']) > 30 || abs($secondbiggest['lng']-$takeoff['lng']) > 30) && $biggest['name'] != $takeoff['name'] && $secondbiggest['name'] != $takeoff['name']){
				if (empty($thirdbiggest) || $thirdbiggest['flights'] < $takeoff['flights']){
					$thirdbiggest = $takeoff;
				}
			}
		}
	}
	echo '<div class="biggest" data-cnt="'.$biggest['flights'].'" data-lat="'.$biggest['lat'].'" data-lng="'.$biggest['lng'].'" data-name="'.$biggest['name'].'"></div>';
	if (!empty($secondbiggest)){
		echo '<div class="secondbiggest" data-cnt="'.$secondbiggest['flights'].'" data-lat="'.$secondbiggest['lat'].'" data-lng="'.$secondbiggest['lng'].'" data-name="'.$secondbiggest['name'].'"></div>';
	}
	if (!empty($thirdbiggest)){
		echo '<div class="thirdbiggest" data-cnt="'.$thirdbiggest['flights'].'" data-lat="'.$thirdbiggest['lat'].'" data-lng="'.$thirdbiggest['lng'].'" data-name="'.$thirdbiggest['name'].'"></div>';
	}
	echo '</div>';
	
	echo '</div>';
}
echo '</div>';

?>
	
	<div class="container footer">
	<p>(c) 2015 by <a href="http://fredibach.ch/" target="blank">Fredi Bach</a> - Data collected from <a href="http://xcontest.org/" target="blank">XContest</a></p>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/trianglify/0.3.1/trianglify.min.js"></script>
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/richmarker.min.js"></script>
	<script type="text/javascript" src="js/heatmap.js"></script>
	<script type="text/javascript" src="js/gmaps-heatmap.js"></script>
	
	<script>
	
		var pattern = Trianglify({ x_colors: "RdBu", variance: "0.66", width: window.innerWidth, height: window.innerHeight, cell_size: 60 });
		document.body.appendChild(pattern.canvas());
	
		$('.action').on('click', function(){
			$(this).parent().find('.takeoffs').slideToggle('fast');
		});
		
		$('.takeoff').on('click', function(){
			window.open('http://www.xcontest.org/2015/world/en/flights-search/?filter%5Bpoint%5D='+$(this).attr('data-lat')+'+'+$(this).attr('data-lng')+'&filter%5Bradius%5D=5000&filter%5Bmode%5D=START&filter%5Bdate_mode%5D=dmy&filter%5Bdate%5D=&filter%5Bvalue_mode%5D=dst&filter%5Bmin_value_dst%5D=&filter%5Bcatg%5D=FAI3&filter%5Broute_types%5D=&filter%5Bavg%5D=&filter%5Bpilot%5D=&list%5Bsort%5D=pts&list%5Bdir%5D=down');
		});
		
		$('.monthselect select').on('change', function(){
			var month = $(this).val();
			if (month !== ''){
				$('.week').hide();
				$('.month_'+month).show();
			} else {
				$('.week').show();
			}
		});
		
		var cnt = 0;
		
		$('.heatmap').each( function(){
			
			cnt++;
			
			// map center
	        var myLatlng = new google.maps.LatLng(8, 28);
	        
	        // map options,
	        var myOptions = {
	          zoom: 1,
	          minZoom: 1,
	          maxZoom: 1,
	          center: myLatlng,
	          disableDefaultUI: true
	        };
	        
	        // standard map
	        var map = new google.maps.Map($(this)[0], myOptions);
	        
	        var datastr = $(this).attr('data-coords');
	        var coords = $.parseJSON(datastr);
	        
	        var data = {
				'max': Number($(this).attr('data-max')),
				'data': coords  
	        };
	        
	        // heatmap layer
	        var heatmap = new HeatmapOverlay(map, 
	          {
	            // radius should be small ONLY if scaleRadius is true (or small radius is intended)
	            "radius": 6,
	            "maxOpacity": 1, 
	            "blur": 0.95,
	            "backgroundColor": "rgba(218,200,155,0.4)",
	            // scales the radius based on map zoom
	            "scaleRadius": true, 
	            // if set to false the heatmap uses the global maximum for colorization
	            // if activated: uses the data maximum within the current map boundaries 
	            //   (there will always be a red spot with useLocalExtremas true)
	            "useLocalExtrema": true,
	            // which field name in your data represents the latitude - default "lat"
	            latField: 'lat',
	            // which field name in your data represents the longitude - default "lng"
	            lngField: 'lng',
	            // which field name in your data represents the data value - default "value"
	            valueField: 'count'
	          }
	        );
	        
	        heatmap.setData(data);
		        
	        var $biggest = $(this).parent().find('.biggest');
	        var markerpos = new google.maps.LatLng(Number($biggest.attr('data-lng')), Number($biggest.attr('data-lat')));
	        
	        var marker = new RichMarker({
				position: markerpos,
				map: map,
				flat: true,
				draggable: false,
				anchor: RichMarkerPosition.TOP_LEFT,
				content: '<div class="marker"><div class="text">'+$biggest.attr('data-name')+'</div></div>'
			});
			
			var $secondbiggest = $(this).parent().find('.secondbiggest');
			if ($secondbiggest.length > 0 && Number($biggest.attr('data-cnt')) / Number($secondbiggest.attr('data-cnt')) < 4){
				var markerpos2 = new google.maps.LatLng(Number($secondbiggest.attr('data-lng')), Number($secondbiggest.attr('data-lat')));
		        
		        var marker2 = new RichMarker({
					position: markerpos2,
					map: map,
					flat: true,
					draggable: false,
					anchor: RichMarkerPosition.TOP_LEFT,
					content: '<div class="marker"><div class="text">'+$secondbiggest.attr('data-name')+'</div></div>'
				});
			}
			
			var $thirdbiggest = $(this).parent().find('.thirdbiggest');
			if ($thirdbiggest.length > 0 && Number($biggest.attr('data-cnt')) / Number($thirdbiggest.attr('data-cnt')) < 5){
				var markerpos3 = new google.maps.LatLng(Number($thirdbiggest.attr('data-lng')), Number($thirdbiggest.attr('data-lat')));
		        
		        var marker2 = new RichMarker({
					position: markerpos3,
					map: map,
					flat: true,
					draggable: false,
					anchor: RichMarkerPosition.TOP_LEFT,
					content: '<div class="marker"><div class="text">'+$thirdbiggest.attr('data-name')+'</div></div>'
				});
			}
			
		});
		
	</script>
	
	</body>
</html>	