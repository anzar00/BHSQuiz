<?php
require 'd.php';
if(isset($_GET['t'])) {
	if($_GET['t']=='g1') {
		$s=$s1;
	}
	
	if($_GET['t']=='g2') {
		$s=$s2;
	}
	
	if($_GET['t']=='g3') {
		$s=$s3;
	}
	
	if($_GET['t']=='g4') {
		$s=$s4;
	}
	
	if($_GET['t']=='g5') {
		$s=$s5;
	}
	
	if($_GET['t']=='g6') {
		$s=$s6;
	}
	}
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



<!DOCTYPE HTML>





<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title></title>
		
  
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
		
		  <link href='http://192.168.100.1/main/timer/css/radialtimer.css' rel='stylesheet'>
    <script src='http://192.168.100.1/main/timer/js/jquery-2.0.3.min.js' type='text/javascript'></script>
	<link href='http://192.168.100.1/main/timer/css/main.css' rel='stylesheet'>
		<script>
		var team="<?php echo $_GET['g']; ?>";
		var SCORE=0;
		function GoSub() {

			var urll="helpers/r.php?g=<?php echo $_GET['g']; ?>";
				window.location.href = urll;
			
			
}



	
var c=0;
	function radialTimer() {
	var self = this;

	this.seconds = 0;
	this.count = 0;
	this.degrees = 0;
	this.interval = null;
	this.timerHTML = "<div class='n'></div><div class='slice'><div class='q'></div><div class='pie r'></div><div class='pie l'></div></div>";
	this.timerContainer = null;
	this.number = null;
	this.slice = null;
	this.pie = null;
	this.pieRight = null;
	this.pieLeft = null;
	this.quarter = null;

	this.init = function(e, s) {
		self.timerContainer = $("#" + e);
		self.timerContainer.html(self.timerHTML);
		
		self.number = self.timerContainer.find(".n");
		self.slice = self.timerContainer.find(".slice");
		self.pie = self.timerContainer.find(".pie");
		self.pieRight = self.timerContainer.find(".pie.r");
		self.pieLeft = self.timerContainer.find(".pie.l");
		self.quarter = self.timerContainer.find(".q");

		// start timer
		self.start(s);
	}

	this.start = function(s) {
		self.seconds = s;
		self.interval = window.setInterval(function () {
			self.number.html(self.seconds - self.count);
			self.count++;
			
			c++;
			if(c==300) {
				GoSub();
			}
			
			
			
			if (self.count > (self.seconds - 1)) clearInterval(self.interval);

			self.degrees = self.degrees + (360 / self.seconds);
			if (self.count >= (self.seconds / 2)) {
				self.slice.addClass("nc");
				if (!self.slice.hasClass("mth")) self.pieRight.css({"transform":"rotate(180deg)"});
				self.pieLeft.css({"transform":"rotate(" + self.degrees + "deg)"});
				self.slice.addClass("mth");
				if (self.count >= (self.seconds * 0.75))  self.quarter.remove();
			} else {
				
				self.pie.css({"transform":"rotate(" + self.degrees + "deg)"});
			}
		}, 1000);
	}
}

var Timer;

$(document).ready(function() {
	Timer = new radialTimer();
	Timer.init("timer", '300');
	
});







		function n1(a) {
			if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); } 
document.getElementById("n1").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
		function n2(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n2").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n3(a) {
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n3").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n4(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n4").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n5(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n5").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n6(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }
document.getElementById("n6").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n7(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n7").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n8(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n8").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
			
		function n9(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n9").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
	
		
			
		function n10(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n10").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n11(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n11").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n12(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n12").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n13(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n13").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n14(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n14").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n15(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n15").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n16(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n16").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n17(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n17").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n18(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n18").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n19(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n19").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n20(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n20").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n21(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n21").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n22(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n22").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n23(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n23").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n24(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n24").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n25(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n25").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n26(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n26").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n27(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n27").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n28(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n28").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n29(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n29").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n30(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n30").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
			

function getCorrect() {
   $.ajax({
      url:'a.php?a=yess&g='+team,
      complete: function (response) {
          $('#output').html(response.responseText);
      },
      error: function () {
          $('#output').html('Bummer: there was an error!');
      }
  });
  return false;
}

</script>
		
		
		
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	
	
	
	
	
	
	
	
	</head>
	<body>
	
	<audio src="http://192.168.100.1/main/files/correct.wav" id="correct"></audio>
<audio src="http://192.168.100.1/main/files/wrong.wav" id="wrong"></audio>
	
		<!-- Sidebar -->
			<section id="sidebar">
	

				<div class="inner">
					<nav><?php if(isset($_GET['g'])) { ?>
							 <div style='left: 50%; top: 20%;' class='radialtimer' id='timer'></div><br><br><br>
							<?php } ?>	<ul>

						<font size="5px">	<li><a class="scrolly active active-locked" href="#intro">Subject Round</a></li></font>

							<?php if(isset($_GET['g'])) { ?><li><button onclick="GoSub()">Submit</button>
                            <?php } ?>
						</ul>
							<ul class="menu">
							</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			


<?php

if(isset($_GET['g'])) {


}
else {

?><div id="wrapper">
				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Hello <?php echo $s; ?></h1>
                            
    <div style= "position: fixed; right:50px; bottom: 400; top:30px;"><img src="http://192.168.100.1/main/<?php echo $_GET['t'];?>.jpg" style=" height: 225px; width: 225px; border-radius: 50%"></div>
							<p>  <br>
							You will be asked 30 multiple choice questions in this round.<br>
							For a correct response, you get 4 points while you get 0 for an incorrect response. </p>
							<p>
							The timer will start as soon as you click the 'Play' button <br>
							Click the 'Submit' button only when you have attempted all the questions</p>
                            
							<ul class="actions">Enter Pin: <br><br>
							<input type="text" id='t'><br>
								<li><button onclick="if (document.getElementById('t').value=='8795') { window.location = 'index.php?g=<?php echo $_GET['t']; ?>'; }" class="button scrolly">Play..</button></li>
						</ul>
						</div>
					</section>
							</div>
<?php
}
if (isset($_GET['g'])) { 
?>
								
								
								
								
								<div id="wrapper">
							

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
						
							<div class="content">
								<div class="inner">
									<h2>Hello <?php echo $s; ?></h2>
								
								

									
									
									
									<p><h3>Lets start the first round. Keep an eye on the timer.<br>
									Hurry up !! Scroll down for more questions.</h3></p>
							
								</div>
							</div>
						</section>
						
						
						
						<section >
							<div class="content">
								<div class="inner" id="n1">
									<h2>Q1</h2>
									<p>A body of mass 5 kg is thrown vertically up with the kinetic energy of 490 J. The height at which the Kinetic energy of the body becomes half of the original value is (acceleration due to gravity =9.8ms<sup>-2</sup>).</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">5m</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">2.5m</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">10m</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">12.5m</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
													
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>The displacement-time graph of two moving particles make angles of 30 degree and 45 degree with the X-axis. The ratio of their velocities is:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">√3:2</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">1:1</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">1:2</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">1: √3</button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>A body is projected with a speed µ m/s at angle β with the horizontal. The Kinetic energy at the highest point is ¾ th of the initial kinetic energy. The value of β is:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">30 degree</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">45 degree</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">60 degree</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">120 degree</button></li>
										
									</ul>
								</div>
							</div>
						</section>
				
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>A wire of length L carrying current IA is bent into a circle. The magnitude of the magnetic moment is:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">LI<sup>2</sup>/2π</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">LI<sup>2</sup>/4π</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">L<sup>2</sup>I/2π</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">L<sup>2</sup>I/4π</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
													
						<section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q5</h2>
									<p>A proton and an electron both moving with the same velocity v enter into a region of magnetic field directed perpendicular to the velocity of the particles. They will now move in circular orbits such that;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">Their time periods will be same</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">The time period for proton will be higher.</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">The time period for electron will be higher</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">Their orbital radii will be same</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                        <section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q6</h2>
									<p>The unit of physical quantity obtained by the line integral of electric field is:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">NC<sup>-1</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">Vm<sup>-1</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">JC<sup>-1</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">C<sup>2</sup>N<sup>-1</sup>m<sup>-2</sup></button></li>
										
									</ul>
								</div>
							</div> 
                        </section>


						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>Reaction between silver nitrate and sodium chloride goes to completion because</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">The reaction is instantaneous</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">Silver nitrate is insoluble in water</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">Silver chloride is sparingly soluble in water</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">Solubility of silver nitrate increases with sodium chloride</button></li>
										
									</ul>
								</div>
							</div>
						</section>	
								
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p>Identify the correct statements for the behavior of ethane-1, 2-diamine as a ligand. </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">It is a neutral ligand</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">It is a didentate ligand</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">It is a chelating ligand</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">It is a unidentate ligand</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>Which of the following options are correct for [Fe(CN)6]:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">D2sp3 hybridisation</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">Sp3d2 hybridisation</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">Paramagnetic</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">Both (a) (c)  </button></li>
										
									</ul>
								</div>
							</div>
						</section>
		
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p>What will be the molality of the solution containing 18.25 g of HCl gas in 500 g of water?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">0.1 M</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">1 M </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">0.5 M </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">1 M</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                           
                            <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>What is the mass per cent of carbon in carbon dioxide?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning">0.034%</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">27.27%</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">3.4%</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">28.7%</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n12">
									<h2>Q12</h2>
									<p>Ethyl bromide can be converted into ethyl alcohol by;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n12('1');" class="btn btn-warning">Heating with dilute hydrochloric acid and zinc</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('2');">Boiling with an alcoholic solution of KOH</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('3');">The action of moist silver oxide</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('4');">Refluxing methanol</button></li>
										
									</ul>
								</div>
							</div>
						</section>

			
					
						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p>Which  of  the  following  functions  are  not  differentiable  at  x=2?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">Modulus function</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">Signum function</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">Greatest integer function</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">All of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>lim x tends to 0 (1 + 2x)<sup>1/x</sup> =</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">e<sup>-2</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">e<sup>2</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">e</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">none of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
						<section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p>The  rank  of  the   word    PAIN  is</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning">19</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">20</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">21</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">none  of  these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
						<section>
							<div class="content">
								<div class="inner" id="n16">
									<h2>Q16</h2>
									<p>If <sup>n</sup>C<sub>2</sub> = <sup>n</sup>C<sub>7</sub>,then n equals</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n16('1');" class="btn btn-warning">5</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('2');">9</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('3');">10</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('4');">7</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                
						<section>
							<div class="content">
								<div class="inner" id="n17">
									<h2>Q17</h2>
	
								<p>Which  of  the  following   are  continuous  functions over  all  real  numbers?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n17('1');" class="btn btn-warning">Polynomial functions</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('2');">trigonometric functions</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('3');">both</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('4');">none of these </button></li>
										
									</ul>
								</div>
							</div>
						</section>
                 
						<section>
							<div class="content">
								<div class="inner" id="n18">
									<h2>Q18</h2>
									<p>The number of arrangements possible in the word PERMUTATIONS if vowels are together are</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n18('1');" class="btn btn-warning">1234900</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('2');">2419200</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('3');">234900</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('4');">1243900</button></li>
										
									</ul>
								</div>
							</div>
						</section>
       
						<section>
							<div class="content">
								<div class="inner" id="n19">
									<h2>Q19</h2>
									<p>In a Cereal grain the single Cotlydon of embryo is represented by:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n19('1');" class="btn btn-warning">Coleoptile</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('2');">Plumule</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('3');">Scitellom</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('4');">Coleorhiza</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                   
						<section>
							<div class="content">
								<div class="inner" id="n20">
									<h2>Q20</h2>
									<p>Aleurone layer helps in:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n20('1');" class="btn btn-warning">Storage of food in Endosperm
										</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('2');">Protection of Embryo</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('3');">Utilization of stored food</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('4');">All of the above</button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
						<section>
							<div class="content">
								<div class="inner" id="n21">
									<h2>Q21</h2>
									<p>The modified stem of Opuntia is: </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n21('1');" class="btn btn-warning">Phyllode</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('2');">Phylloclade</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('3');">Cladode</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('4');">Staminode</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n22">
									<h2>Q22</h2>
									<p>Tuberous roots are found in;</p>
									<ul class="actions"> 
								<li>   <button type="button" onclick="n22('1');" class="btn btn-warning">Beta Vulgaris</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('2');">Daucus Carota</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('3');">Ipomea Batatus</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('4');">Raphanus Sativus</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                       
						<section>
							<div class="content">
								<div class="inner" id="n23">
									<h2>Q23</h2>
									<p>Sucker is sub-aeriel stem modification seen in;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n23('1');" class="btn btn-warning">Hydrocotyle</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('2');">Chrysanthemum </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('3');">Pistia</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('4');">Launea</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                    
						<section>
							<div class="content">
								<div class="inner" id="n24">
									<h2>Q24</h2>
									<p>A root cap is usually absent in roots of:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n24('1');" class="btn btn-warning">Hydrophytes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('2');">Epiphytes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('3');">Parasites</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('4');">All of the above</button></li>
										
									</ul>
								</div>
							</div>
						</section>
     
						<section>
							<div class="content">
								<div class="inner" id="n25">
									<h2>Q25</h2>
									<p>Evolution of different species in a given area starting from a point and spreading to other geographical areas is known as</p>
									<ul class="actions">
									<li>   <button type="button" onclick="n25('1');" class="btn btn-warning">Migration</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n25('2');">Divergent evolution</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n25('3');">Adaptive radiation</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n25('4');">Natural selection</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                     
						<section>
							<div class="content">
								<div class="inner" id="n26">
									<h2>Q26</h2>
									<p>What was the most significant trend in the evolution of modern man (Homo sapiens) from his ancestors?</p>
									<ul class="actions">
									<li>   <button type="button" onclick="n26('1');" class="btn btn-warning">Increasing cranial capacity</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n26('2');">Upright posture</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n26('3');">Shortening of jaws</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n26('4');">Binocular vision</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                 
						<section>
							<div class="content">
								<div class="inner" id="n27">
									<h2>Q27</h2>
									<p>Which one of the followings is also called Sewall Wright Effect?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n27('1');" class="btn btn-warning">Gene Pool</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('2');">Gene flow</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('3');">Genetic Drift</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('4');">Isolation</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
    				<section>
							<div class="content">
								<div class="inner" id="n28">
									<h2>Q28</h2>
									<p>Which one of the following statements is correct?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n28('1');" class="btn btn-warning">There is no evidence of the existence of gills during embryogenesis of mammals</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('2');">Stem cells are specialized cells</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('3');">Ontogeny repeats phylogeny</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('4');">	All plant and animal cells are totipotent</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n29">
									<h2>Q29</h2>
									<p>When two species of different genealogy come to resemble each other as a result of adaptation, the phenomenon is termed:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n29('1');" class="btn btn-warning">Microevolution</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('2');">Divergent evolution</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('3');">Convergent evolution</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('4');">Co-evolution</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                       
						<section>
							<div class="content">
								<div class="inner" id="n30">
									<h2>Q30</h2>
									<p>An important evidence in favor of organic evolution is the occurrence of</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n30('1');" class="btn btn-warning">Homologous organs only</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('2');">Analogous and vestigial organs</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('3');">Homologous and vestigial organs</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('4');">Homologous and analogous organs
</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						
						</div>
						
						
						
				
						
				        
										
						<?php
									}
						?>
					
			
		<!-- Footer -->
		<br><br><br>
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>