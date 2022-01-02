<?php
require 'd.php';
$servername = "localhost";
$username = "root";
$password1 = "";

$conn = new mysqli($servername, $username,$password1,'quiz');


$sql1="SELECT * FROM scores WHERE g='g1'";
$q1 = mysqli_query($conn,$sql1);
	
$row1 = mysqli_fetch_assoc($q1);
$score1=$row1['r1']+$row1['r2']+$row1['r3']+$row1['r4']+$row1['r5']+$row1['r6'];



$sql2="SELECT * FROM scores WHERE g='g2'";
$q2 = mysqli_query($conn,$sql2);
	
$row2 = mysqli_fetch_assoc($q2);
$score2=$row2['r1']+$row2['r2']+$row2['r3']+$row2['r4']+$row2['r5']+$row2['r6'];




$sql3="SELECT * FROM scores WHERE g='g3'";
$q3 = mysqli_query($conn,$sql3);
	
$row3 = mysqli_fetch_assoc($q3);
$score3=$row3['r1']+$row3['r2']+$row3['r3']+$row3['r4']+$row3['r5']+$row3['r6'];



$sql4="SELECT * FROM scores WHERE g='g4'";
$q4 = mysqli_query($conn,$sql4);
	
$row4 = mysqli_fetch_assoc($q4);
$score4=$row4['r1']+$row4['r2']+$row4['r3']+$row4['r4']+$row4['r5']+$row4['r6'];




$sql5="SELECT * FROM scores WHERE g='g5'";
$q5 = mysqli_query($conn,$sql5);
	
$row5 = mysqli_fetch_assoc($q5);
$score5=$row5['r1']+$row5['r2']+$row5['r3']+$row5['r4']+$row5['r5']+$row5['r6'];


$sql6="SELECT * FROM scores WHERE g='g6'";
$q6 = mysqli_query($conn,$sql6);
	
$row6 = mysqli_fetch_assoc($q6);
$score6=$row6['r1']+$row6['r2']+$row6['r3']+$row6['r4']+$row6['r5']+$row6['r6'];
?>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								
						
								<p>All the rounds have been played and its time to show the scores !</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Scores</a>
							</footer>
						</div>

					<!-- Nav -->
						

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<p><font size="50px">Final Team Scores </font>   </p>

						
					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">

						

						<article style="width: 200px;">

							<a href="#" class="image featured"><img src="http://localhost/main/g1.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><?php echo $s1; ?> : <strong><?php echo $score1; ?></strong></a></h3>
							</header>
							</article>

						<article style="width: 200px;">
							<a href="#" class="image featured"><img src="http://localhost/main/g2.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><?php echo $s2; ?> : <strong><?php echo $score2; ?></strong></a></h3>
							</header>
							</article>

						<article style="width: 200px;">
							<a href="#" class="image featured"><img src="http://localhost/main/g3.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><?php echo $s3; ?> : <strong><?php echo $score3; ?></strong></a></h3>
							</header>
						</article>
							
						<article style="width: 200px;">
							<a href="#" class="image featured"><img src="http://localhost/main/g4.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><?php echo $s4; ?> : <strong><?php echo $score4; ?></strong></a></h3>
							</header>
							</article>

						<article style="width: 200px;">
							<a href="#" class="image featured"><img src="http://localhost/main/g5.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><?php echo $s5; ?> : <strong><?php echo $score5; ?></strong></a></h3>
							</header>
</article>

						<article style="width: 200px;">
							<a href="#" class="image featured"><img src="http://localhost/main/g6.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><?php echo $s6; ?> : <strong><?php echo $score6; ?></strong></a></h3>
							</header>
							</article>

						

					</div>
				</section>

						</div>
						<hr />
						
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>