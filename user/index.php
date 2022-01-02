<?php
require 'd.php';
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
	
	
	
?>


<?php
if(isset($_GET['g'])) {
?>
<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<script>
	function GoTo() {
		if (document.getElementById('t').value=="9419") {
			window.location = "http://192.168.100.1/main/user/r1/index.php?t=<?php echo $_GET['g']; ?>";
		}
		if (document.getElementById('t').value=="8803") {
			window.location = "http://192.168.100.1/main/user/r4/index.php?g=<?php echo $_GET['g']; ?>";
		}
		
	}
	</script>
		<title>Hello <?php echo $_GET['g']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="http://192.168.100.1/main/user/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="#">Hello <?php echo $s; ?></a></h1>
					<p></p>
					<ul class="actions">
						<li><a href="#one" class="button icon fa-chevron-down scrolly">  Scores</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="http://192.168.100.1/main/<?php echo $_GET['g'];?>.jpg" /></div></div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="position:static; left:1000px;">
		<header class="major">
					<h2>
                        <font color="red">Enter Pin :</font><br></h2>
			<font color="red">	<input	type="text" placeholder="Enter Password" id="t"></font> <br>
                        <button onclick="GoTo()">Let's Play </button>
				</header>	
                        </div>
        </header>
        
		<!-- One -->
		
			<section id="one" class="wrapper style2 special">
			
				 <font size="40px"><center> Score</center></font><br>
						<iframe height="600" width="1300px" src="http://192.168.100.1/main/server/score.php?l=8"></iframe>
			
			</section>
		

		

		<!-- Scripts -->
			<script src="http://192.168.100.1/main/user/assets/js/jquery.min.js"></script>
			<script src="http://192.168.100.1/main/user/assets/js/jquery.scrolly.min.js"></script>
			<script src="http://192.168.100.1/main/user/assets/js/skel.min.js"></script>
			<script src="http://192.168.100.1/main/user/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="http://192.168.100.1/main/user/assets/js/main.js"></script>

	</body>
</html>
<?php } else { echo "error"; } ?>