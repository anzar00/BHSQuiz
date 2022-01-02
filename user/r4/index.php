<?php

$g=$_GET['g'];
require 'd.php';
if(isset($_GET['g'])) {
	if($_GET['g']=='g1') {
		$s=$s1;
	}
	
	if($_GET['g']=='g2') {
		$s=$s2;
	}
	
	if($_GET['g']=='g3') {
		$s=$s3;
	}
	
	if($_GET['g']=='g4') {
		$s=$s4;
	}
	
	if($_GET['g']=='g5') {
		$s=$s5;
	}
	
	if($_GET['g']=='g6') {
		$s=$s6;
	}
	}
	
	
?>



<html>
	<head>
		<title>Rapid Fire Round</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		  <link href='http://192.168.100.1/quiz/timer/css/radialtimer.css' rel='stylesheet'>
    <script src='http://192.168.100.1/quiz/timer/js/jquery-2.0.3.min.js' type='text/javascript'></script>
	<link href='http://192.168.100.1/quiz/timer/css/main.css' rel='stylesheet'>
	
	</head>
	<body style="background-color: black;">
        

        
	
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
							<h1> Welcome to the rapid fire round</h1><br><br>
							As soon as you click the play button the round will start and you will have 3 mins to answer the questions. <br><br><br>
							<a href="index1.php?g=<?php echo $_GET['g']; ?>"><button> Play !</button></a>
							<br><br><br><br><br><br><br>
							</div>
						</div>
						
					</header>

				<!-- Main -->
					

			
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
