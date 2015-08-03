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
$a = ( isset( $_GET['a'] ) )? (int)( $_GET['a'] ) : 0 ;
$b = ( isset( $_GET['b'] ) )? (int)( $_GET['b'] ) : 0 ;
$c = ( isset( $_GET['c'] ) )? (int)( $_GET['c'] ) : 0 ;
$d = ( isset( $_GET['d'] ) )? (int)( $_GET['d'] ) : 0 ;
$e = ( isset( $_GET['e'] ) )? (int)( $_GET['e'] ) : 0 ;
$f = ( isset( $_GET['f'] ) )? (int)( $_GET['f'] ) : 0 ;
$g = ( isset( $_GET['g'] ) )? (int)( $_GET['g'] ) : 0 ;
$A = ( isset( $_GET['A'] ) )? (int)( $_GET['A'] ) : 0 ;
$B = ( isset( $_GET['B'] ) )? (int)( $_GET['B'] ) : 0 ;
$C = ( isset( $_GET['C'] ) )? (int)( $_GET['C'] ) : 0 ;
$D = ( isset( $_GET['D'] ) )? (int)( $_GET['D'] ) : 0 ;

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