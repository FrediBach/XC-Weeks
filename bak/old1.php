<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <style>
        	body {
	        	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	        	font-size: 14px;
        	}
        	h1 {
	        	font-size: 18px;
        	}
        	table {
	        	width: 100%;
        	}
        	tr {
	        	background: #f8f8f8;
	        	margin-top: 4px;
        	}
        	th {
	        	padding: 4px;
	        	background: #333;
	        	color: #fff;
	        	text-align: left;
        	}
        	td {
	        	vertical-align: top;
	        	padding: 2px;
	        	padding-top: 4px;
	        	padding-left: 4px;
	        	padding-bottom: 0px;
        	}
        	td span {
	        	background: #E0DACD;
	        	border-radius: 3px;
	        	padding: 2px;
	        	padding-left: 5px;
	        	display: inline-block;
	        	margin-right: 8px;
	        	margin-bottom: 4px;
        	}
        	td span i {
        		background: #fff;
	        	border-radius: 6px;
	        	padding: 2px;
	        	padding-left: 5px;
	        	padding-right: 5px;
	        	padding-bottom: 0px;
	        	margin: 1px;
	        	font-style: normal;
	        	font-size: 12px;
	        	line-height: 50%;
        	}
        	tr.spacer td {
        		height: 1px;
        		max-height: 1px;
	        	background: #bbb;
	        	padding: 0px;
	        	margin: 0px;
	        	overflow: hidden;
        	}
        </style>
    </head>
	<body>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = json_decode(file_get_contents('100kflights.json'));

echo '<h1>Best 100k destinations for each week in a year</h1>';
echo '<p>Ever wondered where to go if you want to fly as many 100k\'s in a year as possible? This list can help you. It shows where and in which week you\'ll be able to fly 100km based on the top 5800 100km flights of the top ranked pilots in that category. But take care, some of those places have really strong conditions in those weeks! ;-)</p>';

echo '<table><thead><tr><th>Week</th><th>Month</th><th>Country</th><th>Flights</th><th>Takeoffs</th></tr></thead><tbody>';

foreach($data as $week => $countries){
	$first_value = reset($countries);
	$first_key = key($countries);
	$c1 = 0;
	echo '<tr class="spacer"><td colspan="5"></td></tr>';
	foreach($countries as $country => $meta){
		if ($meta->cnt > 2){
			$c1++;
			if ($c1 == 1){
				echo '<tr><td>'.$week.'</td><td>'.$countries->{$first_key}->flights[0]->month.'</td>';
			} else {
				echo '<tr><td>&nbsp;</td><td>&nbsp;</td>';
			}
			echo '<td><img src="countries/'.strtolower($country).'.png"> '.$country.'</td><td>'.$meta->cnt.'</td><td>';
			$takeoffs = array();
			foreach($meta->flights as $flight){
				if (!isset($takeoffs[$flight->takeoff])){
					$takeoffs[$flight->takeoff] = 1;
				} else {
					$takeoffs[$flight->takeoff]++;
				}
			}
			arsort($takeoffs);
			foreach($takeoffs as $takeoff => $cnt){
				echo '<span>'.$takeoff.' <i>'.$cnt.'</i></span>';
			}
			echo '</td></tr>';
		}
	}
}

echo '</tbody></table>';

?>

	<p>(c) 2015 by Fredi Bach - Data collected from XContest</p>

	</body>
</html>	