<!DOCTYPE html>

<!--

(c) 2015 by Fredi Bach

This is my dream season based on the collected data:

42-43: 	Bir 		(India)			2 weeks
44-47: 	Quixada 	(Brasil)		4 weeks
48-49:	De Aar		(South Africa)	2 weeks
50-52: 	Cornago 	(Australia)		3 weeks
1-4: 	Kerio View 	(Kenia)			4 weeks
5-8: 	Mt. Borah 	(Australia)		4 weeks
9-11: 	Bassano 	(Italy)			3 weeks
12:		Fiesch		(Switzerland)	1 week
13: 	Fanas 		(Switzerland)	1 week
14: 	Mornera 	(Switzerland)	1 week
15-17: 	Bir 		(India)			3 weeks
18-19: 	Fanas 		(Switzerland)	2 weeks
20-23:	Fiesch		(Switzerland)	3 weeks
24-25: 	Sorica 		(Slovenia)		2 weeks
26-27: 	Fiesch 		(Switzerland)	3 weeks
28-30: 	Piedrahita 	(Spain)			3 weeks
31-32: 	Fiesch 		(Switzerland)	2 weeks
33-34: 	Speikboden 	(Italy)			2 weeks
35-36: 	Stol 		(Slovenia)		2 weeks
37-40: 	Serrone 	(Italy)			4 weeks

I'm sure I could fly 100 100ks with this schedule, 
but I would need at least three gliders ... 
and be sponsored by Voltaren. ;-)

-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=560">
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
			
			.week .meta.meta200ks {
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
			
			.week .country .takeoffs a.info {
				background: rgba(110,79,51,0.8);
				padding-left: 5px;
				padding-right: 5px;
				text-decoration: none;
				font-size: 10px;
				line-height: 100%;
				border-radius: 5px;
				margin-right: 3px;
				vertical-align: 10%;
				font-weight: bold;
			}
			
			.week .country .takeoffs a.info:hover {
				background: rgba(0,0,0,1.0);
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

$jsondata = array();

$jsondata[] = json_decode(file_get_contents('data/100kflights-2016.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2015.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2014.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2013.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2012.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2011.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2010.json'));
$jsondata[] = json_decode(file_get_contents('data/100kflights-2009.json'));

$data = new stdClass;

foreach($jsondata as $jd){
	foreach($jd as $week => $countries){
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
}

foreach($data as $week => $countries){
	foreach($countries as $country => $meta){
		$data->{$week}->{$country}->cnt = count($data->{$week}->{$country}->flights);
	}
}


echo '<div class="container">';
echo '<div class="monthselect"><select><option value="" selected>Full year</option><option value="Jan">January</option><option value="Feb">February</option><option value="Mar">March</option><option value="Apr">April</option><option value="May">May</option><option value="Jun">June</option><option value="Jul">July</option><option value="Aug">August</option><option value="Sep">September</option><option value="Oct">October</option><option value="Nov">November</option><option value="Dec">Dezember</option></select></div>';
echo '<img class="logo" src="xc-weeks-logo-4.svg" alt="XC Weeks" title="XC Weeks"><h1>The very best weeks to fly 100k with a paraglider?</h1>';
echo '<p>Ever wondered where to go if you want to fly as many 100k\'s in a year as possible? XC Weeks can help you. It shows you where and in which week you\'ll be able to fly 100km based on the top 25\'000 100km flights of the top ranked pilots in that category.</p>';
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
		'riederalp',
		'Quixada',
		'Pena Negra',
		'Piedrahita',
		'Tolmin Kobala',
		'Conargo North',
		'Manilla',
		'greenacres',
		'DeAar',
		'Pampoenfonte...',
		'Roldanillo A...',
		'Barrington\'s...',
		'Barrington t...',
		'quixada',
		'quixada sant...',
		'Quixadá Sant...',
		'DeAar (ZA)',
		'Mt. Borah N',
		'Qixada',
		'Quxada',
		'Morada Nova ...',
		'Mourada Nouva',
		'Mt Borah',
		'col rodella',
		'Kobariski Stol',
		'St. André [...',
		'walts point',
		'Walt\'s Point...',
		'Walt\'s',
		'Fiesch [Heim...',
		'erzincan',
		'Birstonas',
		'Speikboden 2',
		'Speikboden 1',
		'Fiesch heimatt',
		'Fiesch [Galv...',
		'Fiescheralp',
		'piedrahita ',
		'Emberger Alm 1',
		'Birštonas',
		'Rampa Queralt',
		'Fourneuby ',
		'Shumen II',
		'balea n',
		'Balea Lac',
		'Balea N',
		'Jupiter, Utah',
		'speikboden',
		'Antholz 1',
		'Fiesch Heimat',
		'Fiesch Galvera',
		'Niesen - S',
		'defreggen',
		'Kobarid Stoll',
		'Sorica Lajnar',
		'sorica',
		'Michalkow',
		'Cottbus-Nord',
		'Cottbus - Nord',
		'BALDY, ID',
		'Bald mtn sun...',
		'bald mtn sun...',
		'la Breya',
		'Emberger Alm 2',
		'Hohe Wand - Ost',
		'všechov',
		'Všechov - S...',
		'King Mtn Idaho',
		'King Mountai...',
		'SantaRita do...',
		'Kocs Csörl�...',
		'Kalocsa - S',
		'Roldanillo ',
		'sfanta ana',
		'grente',
		'cesaro',
		'Bassano [Pan...',
		'Malý Pěč�...',
		'Emberger Alm 3',
		'balea lac',
		'castelo de vide',
		'corvatch',
		'Flims Casson...',
		'Mount 7',
		'Mt 7 golden',
		'Mt 7',
		'Mt 7 (Golden)',
		'Mt.7 Golden',
		'Mt.7',
		'MT7',
		'Mt. 7',
		'Mt.7-Golden, BC',
		'MT 7',
		'Mt7 Golden',
		'Mount Seven ...',
		'Mt-7 (Golden)',
		'Mount 7 ',
		'Mt. 7 Lookout',
		'Golden',
		'Willi XC Loo...',
		'Mount Seven ',
		'Mount Sevenn',
		'golden',
		'Goldenn',
		'Lookout',
		'Golden ',
		'teton village',
		'Teton villiage',
		'jaragua',
		'Jaragua',
		'Jaraguá Goi...',
		'0',
		'Cerna Hora',
		'Osser - Ostrý',
		'Kruševo E',
		'El Salto ',
		'la Braya',
		'Mackenzie Upper',
		'Upper McKenzie',
		'Upper Macken...',
		'Upper MacKen...',
		'Mt. Seven',
		'Mt Seven',
		'Peña Monta�...',
		'vale de amor...',
		'Vale Amoreira',
		'balea',
		'jupiter',
		'PORXOS',
		'KOnchinka',
		'riederalp (CH)',
		'cavallaria f...',
		'cavallaria',
		'Poggio bustone',
		'Speikboden 3',
		'Gaisberg NO',
		'osterfelder',
		'osterfelder ',
		'Hochrieß',
		'JARACUA',
		'Galibier',
		'Kozakov',
		'Kalocsa - N',
		'Larouco ',
		'Larouco,PT',
		'ROKH',
		'rokh',
		'pebble creek...',
		'Porxos Xc',
		'Porxos xc',
		'Balea N.',
		'Deglėnai',
		'Milk Hill Wh...',
		'la salle ',
		'Linhares da ...',
		'Linhares 1',
		'Olesnica',
		'Mackenzie Lower',
		'Mackenzie',
		'Lower Macken...',
		'Mckenzie',
		'Mt7',
		'Niesen - SW',
		'Fiesch Älpli',
		'Breya',
		'Hinterrugg W',
		'Bischling Ost',
		'Bischling We...',
		'Hebbronville...',
		'Hebronville,...',
		'Hebronnville...',
		'Osterfelder ',
		'Mt Mackenzie...',
		'Lower Mackenzie',
		'Lower MacKenzie',
		'Koclířov -...',
		'PLAN DE LA B...',
		'Jupiter Peak',
		'Narlı, Kahr...',
		'Belltall,ES',
		'rokh NW',
		'Upper MacKenzie',
		'Mt 7 Golden BC',
		'McKenzie ',
		'Montanchez E',
		'Schöckl SO',
		'Wildkogel 1',
		'Feuerkogel N',
		'mein Bischling',
		'antholz',
		'wank',
		'Borsk E',
		' Balea N',
		'Balea E',
		'Nara 2000',
		'moosalp',
		'Kössen 2',
		'Seegrube SW',
		'Col Rodella ...',
		'COL DE L ARP...',
		'fort du truc',
		'oleśnica',
		'Rrokh E',
		'McKenzie - CA',
		'Balea Nord',
		'Bassano tappeti',
		'Saint Hilaire 1',
		'Mackenzie ',
		'McKenzie upper',
		'sunny peak',
		'Feuerkogel N',
		'Emberger',
		'emberger alm',
		'Bassano - Ta...',
		'Bassano casette',
		'Cottbus Nord',
		'serpaton',
		'les richards',
		'Rokh 3angle',
		'sf. ana',
		'Sf Ana',
		'sfânta ana',
		'King mountain',
		'Alliance S/W',
		'Alliance E-W',
		'Alliance E-W...',
		'Galahad E-W',
		'Galahad Tow ...',
		'Galahad EW t...',
		'Gallihad Tow',
		'Galahad tow ...',
		'rampa queralt',
		'Rokh SE',
		'gornergrat',
		'Panarotta - ...',
		'Emberger alm',
		'Gresse-en-ve...',
		'les Richards',
		'Lower MacKen...',
		'McKenzie Lau...',
		'McKenzie low...',
		'Rosslyn W-E',
		'Rosalind E W',
		'cornizzolo',
		'Disentis Lai...',
		'sta maria in...',
		'jeufosse',
		'Houeville',
		'RAMPA QUERALT',
		'Fanas Eggli 2',
		'emberger',
		'Embergeralm',
		'meruz',
		'Méru',
		'Méruz',
		'Zlatník jih',
		'sf ana ',
		'sfanta ana ',
		'Sfanta Ana',
		'agostadero ',
		'Ruederalp',
		'Antholz 2',
		'Bassano Tappeti',
		'loser',
		'LOSER',
		'St Hilaire',
		'Meru',
		'meruz',
		'Les richards',
		'luedingen',
		'rampa Querelt',
		'rampa Queralt',
		'Všechov (CZ)',
		'skrzetla',
		'Emberger Alm...',
		'Elmberger Alm',
		'gefrorene wand',
		'Saint Hilaire 2',
		'St Marcel',
		'meruz ',
		'Queralt ',
		'POLSKA NOWA ...',
		'Braunwald Kiosk',
		'laveno',
		'Turnthaler',
		'Thurtaler',
		'figuerasa',
		'Gemona Garzette',
		'montgellafrey ',
		'garzette gemona',
		'garzette',
		'san giacomo',
		'roldanillo. ...',
		'Mt Borah Nor...',
		'Nyaru ',
		'South Kerio ...',
		'takeoff sud',
		'greeenacres ...',
		'Nyeru Kenya',
		'Hay (north)',
		'Agua Panilla',
		'rift Valley',
		'Kerio view',
		'Borah W',
		'De aar',
		'kerio View',
		'Manilla Mt B...',
		'borah',
		'Mt Borah (Ma...',
		'Mystic, Bright',
		'Mt Borah Man...',
		'Manilla, Aus...',
		'Manilla SE',
		'Mt Borah, Ma...',
		'Garzette Gemona',
		'Billing',
		'Bir',
		'Fiesch Kühb...',
		'Marlens Col ...',
		'billing',
		'Prasher Lake',
		'jot pass',
		'EGED',
		'EGED /HU/',
		'Mein Bischling',
		'MT Borah',
		'iguala',
		'RIEDERALP',
		'Thurnthaler',
		'Turntaler',
		'WILDKOGEL',
		'billing bir',
		'Vsechov',
		'Kobala (SI)',
		'FANAS',
		'Fanas ',
		'FIESCH HEIM',
		'Klosters Got...',
		'gotschna',
		'obere wengi',
		'Schuls',
		'Fiesch (CH)',
		'helm',
		'gemona',
		'S.Giacomo(Fr)',
		'Bassano Camp...',
		'monte nudo',
		'M. Nudo',
		'm.nudo',
		'feltre',
		'Schmitten',
		'thurntaler',
		'Turnthaler, AT',
		'Sillian Thur...',
		'Greifenburg 12',
		'Greifenburg ...',
		'Emberg alm',
		'Iguala (MX)',
		'Birstonas',
		'Manilla (AU)',
		'DOLADA',
		'rubbio',
		'Decollo Rubbio',
		'SCHMITTEN..',
		'Emberger Alm,',
		'Mornera (Mon...',
		'stelzerberg',
		'Ladir',
		'Fanas Eggli ...',
		'OBERE WENGI',
		'obere Wengi',
		'Gummen - Eng...',
		'Eggli',
		'Eggli (CH)',
		'GANA',
		'fiescheralp',
		'gummen (brienz)',
		'W-STEIN',
		'hafelekar',
		'SEEGRUBE',
		'stoderzinken',
		'M.Nudo Laveno',
		'quaggione',
		'hausstein',
		'bisanne',
		'Bissane',
		'meruz ',
		'STOL (SLO)',
		'Kocs',
		'krvavec',
		'bir billing',
		'Mszana 2',
		'SIRIA',
		'Bentelo Plus 4',
		'fanas eggli',
		'Emmberger Alm',
		'Embergeralmiece',
		'Embergerarme...',
		'Gaißberg',
		'Budam Virgen',
		'gastein',
		'Gaisberg SW',
		'juffing',
		'Malga Grente',
		'Oberauer',
		'Oberauersbrunst',
		'vértesszölős',
		'Vértesszölös',
		'Fistengrat',
		'cuarnan gemona',
		'monte nudo l...',
		'wildkogel',
		'cuarnan',
		'm.cuarnan',
		'schöckl SO',
		'Birstonas',
		'Ladir (CH)',
		'Wirzweli Gummen',
		'Brunni Dümp...',
		'Stelser Berg',
		'stelser berg',
		'rideralp',
		'BIBERG',
		'Emberg',
		'Schöckl N',
		'meruz ',
		'Meruz ',
		'Velký Lopen...',
		'nyikom',
		'valkininkai',
		'Fanas eggli',
		'Falzes',
		'falzen',
		'falzes',
		'Platten Pfalzen',
		'gsies',
		'Gsies',
		'Weissenstei',
		'gummenalp',
		'kalocsa',
		'Vetriolo Ter...',
		'panarotta',
		'Monte Panarotta',
		'Seegrube!',
		'ogassa',
		'king mtn idaho',
		'king mountain',
		'Plus 4 - Ben...',
		'mäggisseren',
		'novegno',
		'emberg alm',
		'NIESEN',
		'gummen',
		'Feuerkogel N',
		'aptenau',
		'Trattberg Ab...',
		'Trattberg/ A...',
		'trattberg',
		'Tbtenau Trat...',
		'Trattberg (AT)',
		'Qurnan Gemon...',
		'Gemona Quarnan',
		'hochfelln',
		'HOCHFELLN',
		'Panenský T�...',
		'montgirot',
		'King Mtn. Idaho',
		'Marbachegg T...',
		'niesen',
		'praticino',
		'piedrahita',
		'Cottbus_Nord',
		'Plus4 - Bentelo',
		'Feuerkogel N',
		'Kleines Matt...',
		'les Rchards',
		'denizli',
		'Panukkale',
		'weissenstein',
		'Moosalp,CH',
		'kobala',
		'Soriza',
		'Sorica, Sori...',
		'GEMONA',
		'Eged_track_p...',
		'Toldijk XC M...',
		'Horna Suca',
		'súča',
		'horna suča',
		'Jaragua - BR',
		'castelo',
		'cottbus',
		'karadag',
		'mut',
		'Kavoliai II',
		'Heimatt',
		'Heimat',
		'HEIMATT',
		'Weissenstein...',
		'kapall',
		'pena negra',
		'Pena negra',
		'Peña Negra ...',
		'Piedrahita P...',
		'Pena Negra S...',
		'kocs',
		'balea N',
		'Balea sud',
		'Jaragua-GO',
		'ouro preto d...',
		'Livigno - Ca...',
		'peñanegra',
		'Piedrahita (ES)',
		'Peñanegra',
		'Piedrahitab',
		'Chelan',
		'Eger-Eged',
		'horna suca',
		'Súča',
		'inovec',
		'Jaragua - Go',
		'Jaragua - GO',
		'poggio bustone',
		'CORNIZZOLO',
		'Speickboden',
		'prada del mo...',
		'quarnan gemona',
		'Feuerkogel S',
		'Pena',
		'Jaraguá - GO',
		'Pine Mtn',
		'PineMtn',
		'Queral',
		'penya montan...',
		'Rampa de Que...',
		'Mt. 7 Golden',
		'Moosalp aka ...',
		'fiesch heimat',
		'SORICA',
		'csobanc',
		'leonpolis',
		'Peña Monta...',
		'FIESCH',
		'Flims Cassons',
		'Cassonsgrat',
		'Fiesch - Kü...',
		'fiesch heimatt',
		'Kueboden',
		'Ayas, Ankara',
		'fiesch Heimat',
		'Kuhboden',
		'monte Grappa',
		'Cima Grappa ...',
		'cima grappa',
		'Mt.Grappa',
		'Speikboden, ...',
		'Spikeboudn',
		'Nove Sady',
		'schmitten',
		'Defreggen',
		'Teton Villag...',
		'Balea Lacut ...',
		'Kühboden',
		'Fiescheralp,...',
		'Fiesch, Chü...',
		'Slovenia Kobala',
		'golm',
		'Deffregen',
		'Hearne, TX',
		'Hearne, TX USA',
		'hearne, TX USA',
		'Jupiter Peak...',
		'Skinny Ridge...',
		'gardane rokh',
		'Sfanta Ana',
		'speickboden',
		'Fiesch, Heimat',
		'Fiescheralp ...',
		'FIESCH SM1',
		'Fiesch, Küe...',
		'Fiesch garvela',
		'Fiesch Kühe...',
		'Seegrube (AT)',
		'Defreggen',
		'kobata',
		'Bald Mountain',
		'Bald Mountai...',
		'Mount Baldy,...',
		'Bald mtn. Su...',
		'Michalków',
		'Bisanne (Sig...',
		'speikpoden',
		'davos',
		'birstonas',
		'Birstonas',
		'Ottawa, KS',
		'Bald, Sun Va...',
		'sopot (BG)',
		'Mirandela W',
		'corvatsch',
		'Piz Corvatsch',
		'bald mtn. Su...',
		'Balea S',
		'Walts Point',
		'Bir-Billing',
		'Quixada Rampa',
		'Mt Bakewell',
		'Bakewell',
		'Barr South',
		'Quixada Sant...',
		'De Aar ',
		'de aar',
		'Serra Talhad...',
		'Serra Telhada',
		'Serra Telhad...',
		'de Aar',
		'De Aar - Vos...',
		'DeAar - Vosburg',
		'Branvlei',
		'Priska',
		'Riacho das A...',
		'Booligal, NSW',
		'mirador de l...',
		'mirador',
		'Greenacres West',
		'Barrington No.3',
		'South Barrin...',
		'Araripina Ai...',
		'Roldanillo Pico',
		'Ivanhoe Airs...',
		'Kakamas Airf...',
		'porterville',
		'kerio view h...'
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
		'Gemona',
		'Gemona',
		'Gemona',
		'Bassano',
		'Dubbo',
		'Gemona',
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
		'Riederalp',
		'Quixadá',
		'Peña Negra',
		'Peña Negra',
		'Kobala',
		'Conargo',
		'Mt. Borah',
		'Greenacres',
		'De Aar',
		'Pampoenfontein',
		'Roldanillo',
		'Barrington',
		'Barrington',
		'Quixadá',
		'Quixadá',
		'Quixadá',
		'De Aar',
		'Mt. Borah',
		'Quixadá',
		'Quixadá',
		'Morada Nova',
		'Morada Nova',
		'Mt. Borah',
		'Col Rodella',
		'Stol',
		'St. André',
		'Walt\'s Point',
		'Walt\'s Point',
		'Walt\'s Point',
		'Fiesch',
		'Erzincan',
		'Birštonas',
		'Speikboden',
		'Speikboden',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Peña Negra',
		'Emberger Alm',
		'Birstonas',
		'Queralt',
		'Fourneuby',
		'Shumen',
		'Balea',
		'Balea',
		'Balea',
		'Jupiter',
		'Speikboden',
		'Antholz',
		'Fiesch',
		'Fiesch',
		'Niesen',
		'Defreggen',
		'Stol',
		'Sorica',
		'Sorica',
		'Michalków',
		'Cottbus',
		'Cottbus',
		'Mt. Baldy',
		'Mt. Baldy',
		'Mt. Baldy',
		'La Breya',
		'Emberger Alm',
		'Hohe Wand',
		'Všechov',
		'Všechov',
		'King Mountain',
		'King Mountain',
		'Santa Rita d...',
		'Kocs Csörl...',
		'Kalocsa',
		'Roldanillo',
		'Sfanta Ana',
		'Grente',
		'Cesarò',
		'Bassano',
		'Malý Pěč...',
		'Emberger Alm',
		'Balea',
		'Castelo de V...',
		'Piz Corvatsch',
		'Cassons',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Mount Seven',
		'Teton Village',
		'Teton Village',
		'Jaraguá',
		'Jaraguá',
		'Jaraguá',
		'Jaraguá',
		'Černá Hora',
		'Osser',
		'Kruševo',
		'El Salto',
		'La Breya',
		'McKenzie',
		'McKenzie',
		'McKenzie',
		'McKenzie',
		'Mount Seven',
		'Mount Seven',
		'Peña Monta...',
		'Vale de Amor...',
		'Vale de Amor...',
		'Balea',
		'Jupiter',
		'Porxos',
		'Konchinka',
		'Riederalp',
		'Cavallaria',
		'Cavallaria',
		'Poggio Bustone',
		'Speikboden',
		'Gaisberg',
		'Osterfelder',
		'Osterfelder',
		'Hochries',
		'Jaraguá',
		'Col du Galibier',
		'Kozákov',
		'Kalocsa',
		'Larouco',
		'Larouco',
		'Rokh',
		'Rokh',
		'Pebble Creek...',
		'Porxos',
		'Porxos',
		'Balea',
		'Deglenai',
		'Milk Hill',
		'La Salle',
		'Linhares',
		'Linhares',
		'Oleśnica',
		'McKenzie',
		'McKenzie',
		'McKenzie',
		'McKenzie',
		'Mount Seven',
		'Niesen',
		'Fiesch',
		'La Breya',
		'Hinterrugg',
		'Bischling',
		'Bischling',
		'Hebbronville',
		'Hebbronville',
		'Hebbronville',
		'Osterfelder',
		'McKenzie',
		'McKenzie',
		'McKenzie',
		'Koclířov',
		'Plan de la B...',
		'Jupiter',
		'Narli',
		'Belltall',
		'Rokh',
		'McKenzie',
		'Mount Seven',
		'McKenzie',
		'Montanchez',
		'Schöckl',
		'Wildkogel',
		'Feuerkogel N',
		'Bischling',
		'Antholz',
		'Wank',
		'Borsk',
		'Balea',
		'Balea',
		'Nara',
		'Moosalp',
		'Kössen',
		'Seegrube',
		'Col Rodella',
		'Col de l\'Arp...',
		'Fort du Truc',
		'Oleśnica',
		'Rokh',
		'McKenzie',
		'Balea',
		'Bassano',
		'Saint Hilaire',
		'McKenzie',
		'McKenzie',
		'Sun Peak',
		'Feuerkogel',
		'Emberger Alm',
		'Emberger Alm',
		'Bassano',
		'Bassano',
		'Cottbus',
		'Serpaton',
		'Les Richards',
		'Rokh',
		'Sf. Ana',
		'Sf. Ana',
		'Sf. Ana',
		'King Mountain',
		'Alliance',
		'Alliance',
		'Alliance',
		'Galahad',
		'Galahad',
		'Galahad',
		'Galahad',
		'Galahad',
		'Queralt',
		'Rokh',
		'Gornergrat',
		'Panarotta',
		'Emberger Alm',
		'Gresse en Ve...',
		'Les Richards',
		'McKenzie',
		'McKenzie',
		'McKenzie',
		'Rosalind',
		'Rosalind',
		'Cornizzolo',
		'Lai Alf',
		'Sta Maria in...',
		'Jeufosse',
		'Houéville',
		'Queralt',
		'Fanas',
		'Emberger Alm',
		'Emberger Alm',
		'Meruz',
		'Meruz',
		'Meruz',
		'Zlatník',
		'Sf. Ana',
		'Sf. Ana',
		'Sf. Ana',
		'agostadero',
		'Riederalp',
		'Antholz',
		'Bassano',
		'Loser',
		'Loser',
		'Saint Hilaire',
		'Meruz',
		'Meruz',
		'Les Richards',
		'Lüdingen',
		'Queralt',
		'Queralt',
		'Všechov',
		'Skrzętla',
		'Emberger Alm',
		'Emberger Alm',
		'Gefrorene Wand',
		'Saint Hilaire',
		'Saint-Marcel',
		'Meruz',
		'Queralt',
		'Polska Nowa ...',
		'Braunwald',
		'Laveno',
		'Thurntaler',
		'Thurntaler',
		'Figuerassa',
		'Gemona',
		'montgellafrey',
		'Gemona',
		'Gemona',
		'San Giacomo',
		'Roldanillo',
		'Mt. Borah',
		'Nyaru',
		'Kerio View',
		'Kerio View',
		'Greenacres',
		'Nyaru',
		'Hay',
		'Agua Panela',
		'Kerio View',
		'Kerio View',
		'Mt. Borah',
		'De Aar',
		'Kerio View',
		'Mt. Borah',
		'Mt. Borah',
		'Mt. Borah',
		'Mystic',
		'Mt. Borah',
		'Mt. Borah',
		'Mt. Borah',
		'Mt. Borah',
		'Gemona',
		'Bir Billing',
		'Bir Billing',
		'Fiesch',
		'Marlens',
		'Bir Billing',
		'prashar lake',
		'Jot Pass',
		'Eged',
		'Eged',
		'Bischling',
		'Mt. Borah',
		'Iguala',
		'Riederalp',
		'Thurntaler',
		'Thurntaler',
		'Wildkogel',
		'Bir Billing',
		'Všechov',
		'Kobala',
		'Fanas',
		'Fanas',
		'Fiesch',
		'Gotschna',
		'Gotschna',
		'Obere Wengi',
		'Scuol',
		'Fiesch',
		'Helm',
		'Gemona',
		'San Giacomo',
		'Bassano',
		'Laveno',
		'Laveno',
		'Laveno',
		'Feltre',
		'Schmittenhöhe',
		'Thurntaler',
		'Thurntaler',
		'Thurntaler',
		'Greifenburg',
		'Greifenburg',
		'Emberger Alm',
		'Iguala',
		'Birštonas',
		'Mt. Borah',
		'Monte Dolada',
		'Rubbio',
		'Rubbio',
		'Schmittenhöhe',
		'Emberger Alm',
		'Mornera',
		'Stelserberg',
		'Ladir',
		'Fanas',
		'Obere Wengi',
		'Obere Wengi',
		'Gummen',
		'Fanas',
		'Fanas',
		'Gana',
		'Fiesch',
		'Gummen',
		'Weissenstein',
		'Hafelekar',
		'Seegrube',
		'Stoderzinken',
		'Laveno',
		'Quaggione',
		'Hausstein',
		'Bisanne',
		'Bisanne',
		'Meruz',
		'Stol',
		'Kocs Csörl...',
		'Krvavec',
		'Bir Billing',
		'Mszana',
		'Siria',
		'Bentelo',
		'Fanas',
		'Emberger Alm',
		'Emberger Alm',
		'Emberger Alm',
		'Gaisberg',
		'Virgen Budam',
		'Gastein',
		'Gaisberg',
		'Jufing',
		'Grente',
		'Oberauer Brunst',
		'Oberauer Brunst',
		'Vértesszőlős',
		'Vértesszőlős',
		'Fisetengrat',
		'Gemona',
		'Laveno',
		'Wildkogel',
		'Cuarnan',
		'Cuarnan',
		'Schöckl',
		'Birštonas',
		'Ladir',
		'Gummen',
		'Brunni',
		'Stelserberg',
		'Stelserberg',
		'Riederalp',
		'Biberg',
		'Emberger Alm',
		'Schöckl',
		'Meruz',
		'Velky Lopenik',
		'Nyikom',
		'Valkininkai',
		'Fanas',
		'Pfalzen',
		'Pfalzen',
		'Pfalzen',
		'Pfalzen',
		'Uwaldalm Gsies',
		'Uwaldalm Gsies',
		'Weissenstein',
		'Gummen',
		'Kalocsa',
		'Vetriolo Terme',
		'Panarotta',
		'Panarotta',
		'Seegrube',
		'Ogassa',
		'King Mountain',
		'King Mountain',
		'Bentelo',
		'Mäggisseren',
		'Novegno',
		'Emberger Alm',
		'Niesen',
		'Gummen',
		'Feuerkogel',
		'Aptenau',
		'Trattberg',
		'Trattberg',
		'Trattberg',
		'Trattberg',
		'Trattberg',
		'Trattberg',
		'Gemona',
		'Gemona',
		'Hochfelln',
		'Hochfelln',
		'Panenský T...',
		'Montgirot',
		'King Mountain',
		'Marbachegg',
		'Niesen',
		'Praticino',
		'Peña Negra',
		'Cottbus',
		'Bentelo',
		'Feuerkogel',
		'Klein Matter...',
		'Les Richards',
		'Denizli',
		'Pamukkale',
		'Weissenstein',
		'Moosalp',
		'Kobala',
		'Sorica',
		'Sorica',
		'Gemona',
		'Eged',
		'Toldijk',
		'Horná Súča',
		'Horná Súča',
		'Horná Súča',
		'Jaraguá',
		'Castelo De Vide',
		'Cottbus',
		'Karadag',
		'Mut',
		'Kavoliai',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Weissenstein',
		'Kapall',
		'Peña Negra',
		'Peña Negra',
		'Peña Negra',
		'Peña Negra',
		'Peña Negra',
		'Kocs Csörl...',
		'Balea',
		'Balea',
		'Jaraguá',
		'Ouro Preto D...',
		'Livigno',
		'Peña Negra',
		'Peña Negra',
		'Peña Negra',
		'Peña Negra',
		'Chelan Butte',
		'Eged',
		'Horná Súča',
		'Horná Súča',
		'Inovec',
		'Jaraguá',
		'Jaraguá',
		'Poggio Bustone',
		'Cornizzolo',
		'Speikboden',
		'Prada',
		'Gemona',
		'Feuerkogel',
		'Peña Negra',
		'Jaraguá',
		'Pine Mt',
		'Pine Mt',
		'Queralt',
		'Peña Negra',
		'Queralt',
		'Mount Seven',
		'Moosalp',
		'Fiesch',
		'Sorica',
		'Csobánc',
		'Leonpolis',
		'Peña Negra',
		'Fiesch',
		'Cassons',
		'Cassons',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Ayaş',
		'Fiesch',
		'Fiesch',
		'Bassano',
		'Bassano',
		'Bassano',
		'Bassano',
		'Speikboden',
		'Speikboden',
		'Nové Sady',
		'Schmittenhö...',
		'Defereggen',
		'Teton Village',
		'Balea',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Kobala',
		'Golm',
		'Defereggen',
		'Hearne',
		'Hearne',
		'Hearne',
		'Jupiter',
		'Skinny Ridge',
		'Rokh',
		'Sf. Ana',
		'Speikboden',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Fiesch',
		'Seegrube',
		'Defereggen',
		'Kobala',
		'Mt. Baldy',
		'Mt. Baldy',
		'Mt. Baldy',
		'Mt. Baldy',
		'Michałków',
		'Bisanne',
		'Speikboden',
		'Davos',
		'Birštonas',
		'Birštonas',
		'Ottawa',
		'Mt. Baldy',
		'Sopot',
		'Mirandela',
		'Corvatsch',
		'Corvatsch',
		'Mt. Baldy',
		'Balea',
		'Walt\'s Point',
		'Bir Billing',
		'Quixadá',
		'Mt. Bakewell',
		'Mt. Bakewell',
		'Barrington',
		'Quixadá',
		'De Aar',
		'De Aar',
		'Serra Talhada',
		'Serra Talhada',
		'Serra Talhada',
		'De Aar',
		'De Aar',
		'De Aar',
		'Brandvlei',
		'Prieska',
		'Riacho des A...',
		'Booligal',
		'Mirador De L...',
		'Mirador De L...',
		'Greenacres',
		'Barrington',
		'Barrington',
		'Araripina',
		'Roldanillo',
		'Ivanhoe',
		'Kakamas',
		'Porterville',
		'Kerio View'
	);
	foreach($from as $k => $v){
		if ($name == $v && isset($to[$k])){
			return $to[$k];
		}
	}
	return $name;
}

// Check 15 and further!!!!

$takeoffinfos = array(
	array(
		'takeoff' => 'Peña Negra',
		'name' => 'Fly Piedrahita',
		'weeks' => array(23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39),
		'url' => 'http://www.flypiedrahita.com/'
	),
	array(
		'takeoff' => 'Quixadá',
		'name' => 'Fly with Andy',
		'weeks' => array(44,45,46),
		'url' => 'http://flywithandy.com/'
	),
	array(
		'takeoff' => 'Mt. Borah',
		'name' => 'Fly Manilla',
		'weeks' => array(6),
		'url' => 'http://flymanilla.com/'
	),
	array(
		'takeoff' => 'Bir Billing',
		'name' => 'Parakros',
		'weeks' => array(40,41,42,43,44,45,46,47,48),
		'url' => 'http://parakros.com/'
	),
	array(
		'takeoff' => 'Sarangkot',
		'name' => 'Parakros',
		'weeks' => array(7,8,9,10),
		'url' => 'http://parakros.com/'
	),
	array(
		'takeoff' => 'Ager',
		'name' => 'XTC Paragliding',
		'weeks' => array(37,38),
		'url' => 'http://xtc-paragliding.com/'
	),
	array(
		'takeoff' => 'Gemona',
		'name' => 'XTC Paragliding',
		'weeks' => array(16,17,18,19,20,21,22,40),
		'url' => 'http://xtc-paragliding.com/'
	),
	array(
		'takeoff' => 'Kobala',
		'name' => 'Nicole Fedele',
		'weeks' => array(28,29,30,31,32,33),
		'url' => 'http://www.nicole-fedele.com/'
	),
	array(
		'takeoff' => 'Meduno',
		'name' => 'Nicole Fedele',
		'weeks' => array(28,29,30,31,32,33),
		'url' => 'http://www.nicole-fedele.com/'
	),
	array(
		'country' => 'PT',
		'name' => 'Paraglide Portugal',
		'weeks' => array(30,31,32,33,34,35,36,37,38,39,40),
		'url' => 'http://www.paraglideportugal.com/'
	),
	array(
		'takeoff' => 'Bassano',
		'name' => 'Austrian Arena',
		'weeks' => array(10,11,12,13,14,15,16,17,18),
		'url' => 'http://www.austrianarena.com/'
	),
	array(
		'country' => 'IN',
		'name' => 'Debu Choudhury',
		'weeks' => array(14,15,16,17,18,19,41,42,43,44,45),
		'url' => 'https://www.facebook.com/SkyDebu?pnref=story'
	),
	array(
		'takeoff' => 'Quixadá',
		'name' => 'ThermikZone',
		'weeks' => array(42,43,44),
		'url' => 'http://www.termikzone.com/work/500km-xc-challenge/'
	),
	array(
		'takeoff' => 'Tacima',
		'name' => 'ThermikZone',
		'weeks' => array(41,42),
		'url' => 'http://www.termikzone.com/work/tacima-brazil/'
	),
	array(
		'takeoff' => 'Quixadá',
		'name' => 'ThermikZone',
		'weeks' => array(43,44,45,46,47,48),
		'url' => 'http://www.termikzone.com/work/quixada-brazil/'
	),
	array(
		'takeoff' => 'Jaraguá',
		'name' => 'ThermikZone',
		'weeks' => array(32),
		'url' => 'http://www.termikzone.com/work/expedicao-xc-cerrado-jaragua-goias/'
	),
	array(
		'takeoff' => 'Ager',
		'name' => 'Fly with Xirli',
		'weeks' => array(32,33,34,35,36,37,38,39,40),
		'url' => 'http://www.flywithxirli.com/'
	),
	array(
		'takeoff' => 'Sopot',
		'name' => 'Rose Valley Lodge',
		'weeks' => array(14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40),
		'url' => 'http://www.rosevalleylodge.net/'
	),
	array(
		'takeoff' => 'Dobrostan',
		'name' => 'Rose Valley Lodge',
		'weeks' => array(14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40),
		'url' => 'http://www.rosevalleylodge.net/'
	)
);

$countryweeks = array();
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
		
		$score = round(count($dates) / 49 * 100);
		
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
		
		if (!isset($countryweeks[$country])){
			$countryweeks[$country] = array();
			for ($i=1;$i<=52;$i++){
				if ($week == $i){
					$countryweeks[$country][$i] = array('cnt' => $meta->cnt, 'score' => $score, 'max' => $max);
				} else {
					$countryweeks[$country][$i] = array('cnt' => 0, 'score' => 0, 'max' => 0);
				}
			}
		} else {
			$countryweeks[$country][$week] = array('cnt' => $meta->cnt, 'score' => $score, 'max' => $max);
		}
		
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
			$weeks[$week]['countries'][$country]['takeoffs'][] = array('name' => ucfirst($takeoff), 'flights' => $cnt, 'lat' => $takeoffpos[$takeoff]['lat'], 'lng' => $takeoffpos[$takeoff]['lng']);
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
	
	echo '<div class="heatmap" id="hm'.$k.'" data-max="'.$week['heatmapmax'].'" data-coords=\''.json_encode($week['heatmapcoords']).'\'></div>';
	
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
			foreach($takeoffinfos as $info){
				if ( ( (isset($info['takeoff']) && $info['takeoff'] == $takeoff['name']) || (isset($info['country']) && $info['country'] == $k2) ) && in_array($k, $info['weeks']) ){
					echo '<a class="info" href="'.$info['url'].'" target="_blank" title="'.$info['name'].'">i</a>';
				}
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
	$fourthbiggest = array();
	foreach($week['countries'] as $k2 => $country){
		foreach($country['takeoffs'] as $k3 => $takeoff){
			if ( (abs($biggest['lat']-$takeoff['lat']) > 30 || abs($biggest['lng']-$takeoff['lng']) > 30) && (abs($secondbiggest['lat']-$takeoff['lat']) > 30 || abs($secondbiggest['lng']-$takeoff['lng']) > 30) && (abs($thirdbiggest['lat']-$takeoff['lat']) > 30 || abs($thirdbiggest['lng']-$takeoff['lng']) > 30) && $biggest['name'] != $takeoff['name'] && $secondbiggest['name'] != $takeoff['name'] && $thirdbiggest['name'] != $takeoff['name']){
				if (empty($fourthbiggest) || $fourthbiggest['flights'] < $takeoff['flights']){
					$fourthbiggest = $takeoff;
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
	if (!empty($fourthbiggest)){
		echo '<div class="fourthbiggest" data-cnt="'.$fourthbiggest['flights'].'" data-lat="'.$fourthbiggest['lat'].'" data-lng="'.$fourthbiggest['lng'].'" data-name="'.$fourthbiggest['name'].'"></div>';
	}
	echo '</div>';
	
	echo '</div>';
}
echo '</div>';

echo '<div class="countryweeks">';
foreach($countryweeks as $country => $weeks){
	echo '<div class="country_'.$country.'" data-weeks=\''.json_encode($weeks).'\'></div>';
}
echo '</div>';

?>
	
	<div class="container footer">
	<p>(c) 2015 by <a href="http://fredibach.ch/" target="blank">Fredi Bach</a> - Data collected from <a href="http://xcontest.org/" target="blank">XContest</a></p>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.inview.min.js"></script>
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
				$('.month_'+month).find('.heatmap').each(function(){
					initMap($(this));
				});
			} else {
				$('.week').show();
			}
		});
		
		var loaded = {};
		
		var initMap = function($el){
			
			var id = $el.attr('id');
			
			if (typeof loaded[id] == 'undefined' && $el.is(":visible")){
				console.log('init id', id);
				loaded[id] = true;
				
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
		        var map = new google.maps.Map($el[0], myOptions);
		        
		        var datastr = $el.attr('data-coords');
		        var coords = $.parseJSON(datastr);
		        
		        var data = {
					'max': Number($el.attr('data-max')),
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
		        
		        try {
		        	heatmap.setData(data);
			    } catch(err) {};
			    
		        var $biggest = $el.parent().find('.biggest');
		        var markerpos = new google.maps.LatLng(Number($biggest.attr('data-lng')), Number($biggest.attr('data-lat')));
		        
		        var marker = new RichMarker({
					position: markerpos,
					map: map,
					flat: true,
					draggable: false,
					anchor: RichMarkerPosition.TOP_LEFT,
					content: '<div class="marker"><div class="text">'+$biggest.attr('data-name')+'</div></div>'
				});
				
				var $secondbiggest = $el.parent().find('.secondbiggest');
				if ($secondbiggest.length > 0 && (Number($biggest.attr('data-cnt')) / Number($secondbiggest.attr('data-cnt')) < 4 || $secondbiggest.attr('data-cnt') >= 9)){
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
				
				var $thirdbiggest = $el.parent().find('.thirdbiggest');
				if ($thirdbiggest.length > 0 && (Number($biggest.attr('data-cnt')) / Number($thirdbiggest.attr('data-cnt')) < 6 || $thirdbiggest.attr('data-cnt') >= 9)){
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
				
				var $fourthbiggest = $el.parent().find('.fourthbiggest');
				if ($fourthbiggest.length > 0 && (Number($biggest.attr('data-cnt')) / Number($fourthbiggest.attr('data-cnt')) < 8 || $fourthbiggest.attr('data-cnt') >= 9)){
					var markerpos4 = new google.maps.LatLng(Number($fourthbiggest.attr('data-lng')), Number($fourthbiggest.attr('data-lat')));
			        
			        var marker2 = new RichMarker({
						position: markerpos4,
						map: map,
						flat: true,
						draggable: false,
						anchor: RichMarkerPosition.TOP_LEFT,
						content: '<div class="marker"><div class="text">'+$fourthbiggest.attr('data-name')+'</div></div>'
					});
				}
				
			}
		}
		
		$('.heatmap').bind( 'inview', function(event, isInView, visiblePartX, visiblePartY){
			
			initMap($(this));
			
		});
		
	</script>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-68457619-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
	
	</body>
</html>	