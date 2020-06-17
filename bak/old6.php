<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <title>XComp - 100k weeks</title>
        <style>
        	
        	body, html {
	        	margin: 0px;
	        	padding: 0px;
        	}
        	
        	body {
	        	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	        	font-size: 14px;
        	}
        	
        	.container {
	        	margin: 40px;
	        	margin-bottom: 10px;
	        	position: relative;
        	}
        	
        	.monthselect {
	        	position: absolute;
	        	right: 0px;
	        	top: 0px;
        	}
        	
        	h1 {
        		margin-top: 0px;
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
        	
        </style>
		
    </head>
	<body>
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = json_decode(file_get_contents('100kflights.json'));

echo '<div class="container">';
echo '<div class="monthselect"><select><option value="" selected>Full year</option><option value="Jan">January</option><option value="Feb">February</option><option value="Mar">March</option><option value="Apr">April</option><option value="May">May</option><option value="Jun">June</option><option value="Jul">July</option><option value="Aug">August</option><option value="Sep">September</option><option value="Oct">October</option><option value="Nov">November</option><option value="Dez">Dezember</option></select></div>';
echo '<h1>Best 100k destinations for each week in a year</h1>';
echo '<p>Ever wondered where to go if you want to fly as many 100k\'s in a year as possible? This list can help you. It shows where and in which week you\'ll be able to fly 100km based on the top 5800 100km flights of the top ranked pilots in that category. But take care, some of those places have really strong conditions in those weeks! ;-)</p>';
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


$weeks = array();


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
			if (!isset($takeoffs[$flight->takeoff])){
				$takeoffs[$flight->takeoff] = 1;
				$takeoffpos[$flight->takeoff] = array('lat' => $flight->lat, 'lng' => $flight->lng);
			} else {
				$takeoffs[$flight->takeoff]++;
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
	if ($week['100ks'] > 10){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 25){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 50){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 100){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	if ($week['100ks'] > 200){ echo '<span class="active">☆</span>'; } else { echo '<span>☆</span>'; }
	echo '</div>';
	
	echo '<span class="title">Week '.$k.'</span>';
	
	echo '<span class="weekrange">'.$weekrange[0].' to '.$weekrange[1].'</span>';
	
	echo '</div>';
	
	echo '<div class="heatmap" data-max="'.$week['heatmapmax'].'" data-coords=\''.json_encode($week['heatmapcoords']).'\'></div>';
	
	echo '<div class="countries">';
	foreach($week['countries'] as $k2 => $country){
		echo '<div class="country country_'.$k2.'">';
		echo '<div class="action">show takeoffs</div>';
		echo '<div class="countryinfos">';
		echo '<span class="title"><img src="countries/'.strtolower($k2).'.png"> '.$k2.'</span>';
		echo '<span class="meta meta100ks"><i>'.$country['100ks'].'</i> 100ks</span>';
		echo '<span class="meta meta200ks"><i>'.$country['200ks'].'</i> 200ks</span>';
		echo '<span class="meta metascore"><i>'.$country['score'].'</i> %</span>';
		echo '<span class="meta metamax"><i>'.$country['max'].'</i> p</span>';
		echo '</div>';
		echo '<div class="takeoffs">';
		foreach($country['takeoffs'] as $k3 => $takeoff){
			echo '<div class="takeoff takeoff_'.$k3.'" data-lat="'.$takeoff['lat'].'" data-lng="'.$takeoff['lng'].'">';
			echo '<span class="name">'.$takeoff['name'].'</span>';
			echo '<span class="flights">'.$takeoff['flights'].'</span>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
	}
	echo '</div>';
	
	echo '</div>';
}
echo '</div>';

?>
	
	<div class="container">
	<p>(c) 2015 by Fredi Bach - Data collected from XContest</p>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/trianglify/0.3.1/trianglify.min.js"></script>
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false"></script>
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
			
			if (cnt <= 3 || 1 == 1){
				
				// map center
		        var myLatlng = new google.maps.LatLng(12, 22);
		        
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
		            "radius": 8,
		            "maxOpacity": 1, 
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
		        
		    }
			
		});
		
	</script>
	
	</body>
</html>	