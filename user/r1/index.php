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
			if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); } 
document.getElementById("n1").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
		function n2(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n2").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n3(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n3").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n4(a) {
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n4").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n5(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n5").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n6(a) {
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }
document.getElementById("n6").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n7(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n7").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n8(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n8").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
			
		function n9(a) {
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n9").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
	
		
			
		function n10(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n10").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n11(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n11").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n12(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n12").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n13(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n16").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n17(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n17").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n18(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n18").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n19(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n19").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n20(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n20").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n21(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n21").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n22(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n22").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n23(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n23").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n24(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n24").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n25(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n25").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n26(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n26").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n27(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
									<p>Time (T), velocity (C) and angular momentum (h) are chosen as fundamental quantities instead of mass, length and time . In terms of these , the dimensions of mass would be</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">[M]=[TC<sup>-2</sup>h]</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">[M]=[T<sup>-1</sup>C<sup>-2</sup>h<sup>-1</sup>]</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">[M]=[T<sup>-1</sup>C<sup>-2</sup>h]</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">[M]=[T<sup>-1</sup>C<sup>2</sup>h]</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
													
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>A ball is released from the top of a tower of height h metre. It takes T second to reach the ground. What is the position of the ball in T/3 second?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">h/9 metre from the ground</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">7h/9 metre from the ground</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">8h/9 metre from the ground</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">17h/9 metre from the ground</button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>A wire of radius r has a resistance R. It is streched to a wire of radius r/2, then the resistance of stretched becomes?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">4 R</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">8 R</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">16 R</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">32 R</button></li>
										
									</ul>
								</div>
							</div>
						</section>
				
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>If a body looses half of its velocity on penetrating 3cm in a wooden block, then how much will it penetratre more before coming to rest</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">1 cm</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">2 cm</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">3 cm</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">4 cm</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
													
						<section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q5</h2>
									<p>Three capacitors each of 4 micro farad are to be connected in such a way that the effective capacitance is 6 micro farad . This can be done by connecting them</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">all in series</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">all in parallel</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">two in parallel and one in series</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">two in series and one parallel</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                        <section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q6</h2>
									<p>A potential differenceof 2.4 V is applied across a carbon  resistor with colour scheme Brown, Red, Green and Gold. Clculate the current flowing through this resistor.</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">2 x 10<sup>-6</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">2 x 10<sup>-5</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">4 x 10<sup>-6</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">4 x 10<sup>-5</sup></button></li>
										
									</ul>
								</div>
							</div> 
                        </section>


						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>If the shortest wavelength in Lyman series of hydrogen atom is A, then the longest wavelength in paschen series of He+</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">5A/9</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">36A/5</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">36A/7</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">9A/5</button></li>
										
									</ul>
								</div>
							</div>
						</section>	
								
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p>The maximum number of 90° angles between bond pair –bond pair of electrons is observed in</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">dsp3 hybridization</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">sp3d hybridization</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">dsp2 hybridization</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">sp3d2 hybridisation</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>Using MO theory predict which of the following species has the shortest bond length ?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">O<sub>2</sub></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">O<sub>2</sub><sup>+</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">O<sub>2</sub><sup>-</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">O<sub>2</sub><sup>2-</sup></button></li>
										
									</ul>
								</div>
							</div>
						</section>
		
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p>If ὰ is the degree of dissociation of Na2SO4 , THE vant Hoff’s factor(i) used for calculating the molecular mass is</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">1+ὰ</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">1-ὰ </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">1+ 2ὰ </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">1- 2ὰ</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                           
                            <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>The half-life period of first order chemical reaction is 6.93 minutes. The time required for the completion of 99% of the chemical reaction will be</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning">230.3 minutes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">23.03 minutes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">46.06 minutes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">460.6 minutes</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n12">
									<h2>Q12</h2>
									<p>Theactivation energy of a reaction at a given temperature is found to be 2.303 RT J/mol. The ratio of rate constant to the Arrhenius factor is </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n12('1');" class="btn btn-warning">0.1</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('2');">0.01</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('3');">0.001</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('4');">0.02</button></li>
										
									</ul>
								</div>
							</div>
						</section>

			
					
						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p>A vertical pole consists of two parts, the lower part being one third of the whole. At a point in the horizontal plane through the base of the pole and distance 20 meters from it, the upper part of the pole subtends an angle whose tangent is 12. The possible heights of the pole are</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">20 m and 20√3m</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">20 m and 60 m</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">16 m and 48 m</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">None of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>Sets A and B have 3 and 6 elements respectively. What can be the minimum number of elements in A U B </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">3</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">6</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">9</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">18</button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
						<section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p>Angle b/w minute hand and hour hand when time on clock is 4:30 PM is?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning">45 Degree</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">55 Degree</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">65 Degree</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">None of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
						<section>
							<div class="content">
								<div class="inner" id="n16">
									<h2>Q16</h2>
									<p>lim: n→0 (1+2x)<sup>3/x</sup> gives</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n16('1');" class="btn btn-warning">e<sup>6</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('2');">e<sup>4</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('3');">e<sup>2</sup></button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('4');">e<sup>3</sup></button></li>
										
									</ul>
								</div>
							</div>
						</section>
                
						<section>
							<div class="content">
								<div class="inner" id="n17">
									<h2>Q17</h2>
	
								<p>The Domain of function f(x) = √ (x-1)(x-2)(x+3)</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n17('1');" class="btn btn-warning">x∈(-3,1)U(1,2)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('2');">x∈(-3,1)U(2,∞)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('3');">x∈(-∞,-3)U(1,2)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('4');">x∈(-∞,-3)U(2,∞)</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                 
						<section>
							<div class="content">
								<div class="inner" id="n18">
									<h2>Q18</h2>
									<p>If y=x+1/x then</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n18('1');" class="btn btn-warning">x<sup>2</sup>(dy/dx)+xy=0</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('3');">x<sup>2</sup>(dy/dx)+xy+2=0</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('4');">x<sup>2</sup>(dy/dx)-xy+2=0</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('2');">none of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
       
						<section>
							<div class="content">
								<div class="inner" id="n19">
									<h2>Q19</h2>
									<p>Which is not a mode of reproduction in Yeast?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n19('1');" class="btn btn-warning">Fission</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('2');">Budding</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('3');">Oogamy</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('4');">Plasmogamy</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                   
						<section>
							<div class="content">
								<div class="inner" id="n20">
									<h2>Q20</h2>
									<p>Fungus used in genetic experiments is </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n20('1');" class="btn btn-warning">Neurospora
										</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('2');">Rhizopus</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('3');">Mucor</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('4');">Claviceps</button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
						<section>
							<div class="content">
								<div class="inner" id="n21">
									<h2>Q21</h2>
									<p>'Botanical Snakes' are</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n21('1');" class="btn btn-warning">Bryophytes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('2');">Algae</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('3');">Pteridophytes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('4');">Spermatophytes</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n22">
									<h2>Q22</h2>
									<p>The term thylakoid was coined by</p>
									<ul class="actions"> 
								<li>   <button type="button" onclick="n22('1');" class="btn btn-warning">Menke</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('2');">Arron</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('3');">Park</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('4');">Willstatter</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                       
						<section>
							<div class="content">
								<div class="inner" id="n23">
									<h2>Q23</h2>
									<p>Enzymes for changing fats to carbohydrates occur in a</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n23('1');" class="btn btn-warning">Golgi apparatus</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('2');">Glyoxisomes </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('3');">Lysosomes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('4');">Spherosomes</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                    
						<section>
							<div class="content">
								<div class="inner" id="n24">
									<h2>Q24</h2>
									<p>Which is common in plant and animal cells</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n24('1');" class="btn btn-warning">Centrioles</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('2');">Central vacuole</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('3');">Mitochondria</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('4');">Plastids</button></li>
										
									</ul>
								</div>
							</div>
						</section>
     
						<section>
							<div class="content">
								<div class="inner" id="n25">
									<h2>Q25</h2>
									<p>Non transfer of pollen from anther to stigma of the same flower due to a mechanical barrier is</p>
									<ul class="actions">
									<li>   <button type="button" onclick="n25('1');" class="btn btn-warning">Dichogamy</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n25('2');">Herkogamy</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n25('3');">Heterostyly</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n25('4');">Cleistogamy</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                     
						<section>
							<div class="content">
								<div class="inner" id="n26">
									<h2>Q26</h2>
									<p>Polygonum type of embryo sac/female gametophyte of angiosperms is</p>
									<ul class="actions">
									<li>   <button type="button" onclick="n26('1');" class="btn btn-warning">7-celled, 7-nucleate</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n26('2');">7-celled, 8-nucleate</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n26('3');">8-celled, 7-nucleate</button></li>
									<li>   <button type="button" class="btn btn-warning" onclick="n26('4');">8-celled, 8-nucleate</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                 
						<section>
							<div class="content">
								<div class="inner" id="n27">
									<h2>Q27</h2>
									<p>Fertilization invloving carrying of male gametes by pollen tube is</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n27('1');" class="btn btn-warning">Porogamy</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('2');">Siphonogamy</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('3');">Chalazogamy</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('4');">Syngonogamy</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
    				<section>
							<div class="content">
								<div class="inner" id="n28">
									<h2>Q28</h2>
									<p>Apperance of an ancestral trait is</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n28('1');" class="btn btn-warning">Evolution</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('2');">Mutation</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('3');">Atavism</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('4');">Both A & B</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n29">
									<h2>Q29</h2>
									<p>The book "Origin of Species" was written by Darwin in</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n29('1');" class="btn btn-warning">1530</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('2');">1795</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('3');">1859</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('4');">1895</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                       
						<section>
							<div class="content">
								<div class="inner" id="n30">
									<h2>Q30</h2>
									<p>Sum total of genes in a population is called</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n30('1');" class="btn btn-warning">Genotype</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('2');">Genomics</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('3');">Gene pool</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('4');">Karyotype</button></li>
										
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