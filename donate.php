<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>LIVE UNITED United Way of Greater Knoxville</title>
	<meta name="description" content="United Way of Greater Knoxville, Live United Campaign">
	<meta name="keywords" content="United Way, giving, Knoxville, live united">

	<meta http-equiv="cleartype" content="on">
	
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/styles.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="/favicon.ico">

</head>

<body class="donate">
<?php include_once("analyticstracking.php") ?>
		<div class="section group">
				</div>
<div class="bg1">

				<div class="section group">
					<div class="col span_1_of_2">
					</div>
					<div class="col span_1_of_2">
					</div>
				</div>
			
				
				<div class="section group">
					<div class="col span_1_of_5">
					</div>
					<div class="col span_3_of_5 ">
					<img src="imgs/sl3/sl3_02.png" alt="sl3_02" width="606" height="320" />
					</div>
					<div class="col span_1_of_5">
					</div>
				</div>

<?php

if(isset($_GET['a'])){
$a=(int)($_GET['a']);
}
if(isset($_GET['b'])){
$b=(int)($_GET['b']);
}
if(isset($_GET['c'])){
$c=(int)($_GET['c']);
}
if(isset($_GET['d'])){
$d=(int)($_GET['d']);
}
if(isset($_GET['e'])){
$e=(int)($_GET['e']);
}
if(isset($_GET['f'])){
$f=(int)($_GET['f']);
}
if(isset($_GET['g'])){
$g=(int)($_GET['g']);
}
if(isset($_GET['A'])){
$A=(int)($_GET['A']);
}
if(isset($_GET['B'])){
$B=(int)($_GET['B']);
}
if(isset($_GET['C'])){
$C=(int)($_GET['C']);
}
if(isset($_GET['D'])){
$D=(int)($_GET['D']);
}
				
				echo'<div class="section group">';
					echo'<div class="col span_1_of_6"><!-- 1 of 6 --></div>';
					echo'<div class="col span_4_of_6 bullet">';
						echo'<a href="answer.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&g='.$g.'&A='.($A+1).'&B='.$B.'&C='.$C.'&D='.$D.'"><img src="imgs/sl3/sl3_04.png" alt="$1" width="280" height="258" /></a>';
						echo'<a href="answer.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&g='.$g.'&A='.$A.'&B='.($B+1).'&C='.$C.'&D='.$D.'"><img src="imgs/sl3/sl3_05.png" alt="$5" width="280" height="258" /></a>';
						echo'<a href="answer.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&g='.$g.'&A='.$A.'&B='.$B.'&C='.($C+1).'&D='.$D.'"><img src="imgs/sl3/sl3_06.png" alt="$10" width="280" height="258" /></a>';
						echo'<a href="answer.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.$d.'&e='.$e.'&f='.$f.'&g='.$g.'&A='.$A.'&B='.$B.'&C='.$C.'&D='.($D+1).'"><img src="imgs/sl3/sl3_07.png" alt="$20" width="280" height="258" /></a>';
					echo'</div>';
					echo'<div class="col span_1_of_6"><!-- 1 of 6 --></div>';
				echo'</div>';
	?>						
										
				<div class="section group">
					<div class="col span_1_of_2">
					</div>
					<div class="col span_1_of_2">
					</div>
				</div>

	
		</div>  <!-- bg1 -->
	
	
	
		<div class="footer">

		</div>


	
</body>
</html>