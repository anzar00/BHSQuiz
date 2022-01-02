


<!DOCTYPE HTML>





<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title></title>
		
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
		
		  <link href='http://192.168.100.1/main/timer/css/radialtimer.css' rel='stylesheet'>
    <script src='http://192.168.100.1/main/timer/js/jquery-2.0.3.min.js' type='text/javascript'></script>
	<link href='http://192.168.100.1/main/timer/css/main.css' rel='stylesheet'>
		<script>
		var team="<?php echo $_GET['g']; ?>";
		var score=0;
		function GoSub() {

			var urll="helpers/q1.php?g=<?php echo $_GET['g']; ?>&score="+score;
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
			if(c==180) {
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
	Timer.init("timer", '180');
	
});







		function n1(a) {
			if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; } 
document.getElementById("n1").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
		function n2(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n2").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n3(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n3").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n4(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n4").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n5(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n5").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n6(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }
document.getElementById("n6").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n7(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n7").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n8(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n8").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
			
		function n9(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n9").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
	
		
			
		function n10(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n10").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
		function n11(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n11").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n12(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n12").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n13(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n13").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n14(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n14").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n15(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n15").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n16(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n16").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n17(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n17").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n18(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n18").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n19(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n19").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n20(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n20").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n21(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n21").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n22(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n22").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n23(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n23").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n24(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n24").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n25(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n25").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n26(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n26").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n27(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n27").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n28(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n28").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n29(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n29").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n30(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n30").innerHTML = "<center> <h1>Are you ready to submit?</h1></center>";
		}
		
		
function getCorrect() {
   score=score+5;
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

						<font size="5px">	<li><a class="scrolly active active-locked" href="#intro">Tie Breaker</a></li></font>
                        
							<?php if(isset($_GET['g'])) { ?><li><button onclick="GoSub()">Submit</button><?php } ?>
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
							<h1>Welcome <?php echo $_GET['t']; ?></h1>
							<p> This is the tie up round. <br>
							You will be asked 30 questions and have a time limit of 3mins<br>
							For a correct response, the teams get 5 points and they loose 2 for an incorrect response. </p>
							<p>
							The timer will start as soon as you click the play button <br>
							Submit only when you have attempted all the questions</p>
                            
							<ul class="actions">Enter Pin: <br><br>
							<input type="text" id='t'><br>
								<li><button onclick="if (document.getElementById('t').value=='1001') { window.location = 't1.php?g=<?php echo $_GET['t']; ?>'; }" class="button scrolly">Start !!</button></li>
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
									<h2>Welcome <?php echo $_GET['g']; ?></h2>
								
								

									
									
									
									<p><h3>Lets start the Tie Up round. Keep the time limit on the left side of the screen in mind.<br>
									Hurry up !! Scroll down for more questions.</h3></p>
							
								</div>
							</div>
						</section>		
						
						<section >
							<div class="content">
								<div class="inner" id="n1">
									<h2>Q1</h2>
									<p>Which of the following are not called "terrestrial planets"?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">Mercury</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">Venus</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">Mars</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">Jupiter</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
									
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>Android is licensed under which open source licensing license?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">Gnu’s GPLB </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">Apache/MITC</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">OSSD</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">Source Forge</button></li>
										
									</ul>
								</div>
							</div>
						</section>
									
						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>What was Google’s main business motivation for supporting Android?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">To level the playing field for mobile devices</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">To directly compete with the iPhone</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">To corner the mobile device application market for licensing purposes</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">To allow them to advertise more</button></li>
										
									</ul>
								</div>
							</div>
						</section>

											
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>What was the first phone released that ran the Android OS?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">Google gPhone</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">T-Mobile G1</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">Motorola Droid</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">HTC Hero</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
						<section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q5</h2>
									<p>Which company developed android? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">Apple</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">Google</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">Android Inc.</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">Nokia</button></li>
										
									</ul>
								</div>
							</div>
						</section>

											
						<section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q6</h2>
									<p>Which company bought android?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">Apple</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">Google</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">Android Inc.</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">Nokia</button></li>
										
									</ul>
								</div>
							</div>
						</section>
											
						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>Web browser available in android is based on;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">Chrome</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">Firefox</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">Open-source Webkit</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">Opera</button></li>
										
									</ul>
								</div>
							</div>
						</section>
									
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p>Android is based on which kernel? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">Linux kernel</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">Windows kernel</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">MAC kernel </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">Hybrid Kernel</button></li>
										
									</ul>
								</div>
							</div>
						</section>	
										
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>Android is based on which language. </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">C Language</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">C++ </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">VC++</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">Java</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p>Which is the latest mobile version of android? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">3.0 (Honeycomb) </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">2.3 (Gingerbread)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">2.6 (Android)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">2.2 (Froyo)</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                
                        
                        <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>Android doesn't support which format.</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning">MP4</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">MPEG</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">AVI</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">MIDI</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q12</h2>
									<p>If you want to increase the whitespace between widgets, you will need to use the ____________ property</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">Android:Padding</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">Android:Digits</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">Android:Capitalize</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">Android:AutoText</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p>For __________ , code used by Android is not a open source.</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">Device driver</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">Video driver</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">WiFi driver </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">Bluetooth driver</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                
						<section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>What is mean by ANR?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">Application Not Recognized </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">Android Not Recognized</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">Application Not Responding</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">None of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                 
						<section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p>Typically MIME type will be:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning">Html</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">Text</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">Text/HTML</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">Doc</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                  
						<section>
							<div class="content">
								<div class="inner" id="n16">
									<h2>Q16</h2>
									<p>Which Political Party has Become Largest Political Party In Upper House Rajyasabha?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n16('1');" class="btn btn-warning">Janta Dal United</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('2');">Congress</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('3');">Alliance Parties</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('4');">Bhartiya Janta Party</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                 
						<section>
							<div class="content">
								<div class="inner" id="n17">
									<h2>Q17</h2>
									<p>Kempegowda International Airport Is Situated at?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n17('1');" class="btn btn-warning">Singapore</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('2');">Kolkata</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('3');">Bengluru</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('4');">Kerala</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                 
						<section>
							<div class="content">
								<div class="inner" id="n18">
									<h2>Q18</h2>
									<p>Which Airport has announced to offer First Heli Taxi In India?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n18('1');" class="btn btn-warning">Jaipur</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('2');">Bhuvneshwar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('3');">Mumbai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('4');">Bengluru</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                 
						<section>
							<div class="content">
								<div class="inner" id="n19">
									<h2>Q19</h2>
									<p>The First meeting of Japan India Coordination Forum(JICF) was held at? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n19('1');" class="btn btn-warning">Mumbai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('2');">Delhi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('3');">Jaipur</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('4');">Bhopal</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                        
						<section>
							<div class="content">
								<div class="inner" id="n20">
									<h2>Q20</h2>
									<p>US-India Strategic Partnership Forum (USISPF) is Being Setup with The Motive of?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n20('1');" class="btn btn-warning">Road Development</button></li>
								<li>   <button type="button" class="btn btn-warning" onclick="n20('2');">Rural Development </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('3');">Water Sanitation</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('4');">Business Development</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                  
						<section>
							<div class="content">
								<div class="inner" id="n21">
									<h2>Q21</h2>
									<p>Toyota Has tied up with which of The Company to Promote Electronic cars?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n21('1');" class="btn btn-warning">Suzuki</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('2');">Manda</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('3');">Mazda</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('4');">Miranda</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                 
						<section>
							<div class="content">
								<div class="inner" id="n22">
									<h2>Q22</h2>
									<p>The production of private sector missile sub-system between the $2.5 billion Kalyani Group and Israel’s Rafael Advanced Defence Systems Ltd., was inaugurated At?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n22('1');" class="btn btn-warning">Pune</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('2');">Jammu & Kashmir</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('3');">Pathankot</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('4');">Hyderabad</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                          
						<section>
							<div class="content">
								<div class="inner" id="n23">
									<h2>Q23</h2>
									<p>Who has been appointed Chairman and Managing Director in Small Industries Development Bank of India (SIDBI)?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n23('1');" class="btn btn-warning">Chanda Kochar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('2');">Pranav Ghosh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('3');">Mohammad Mustafa</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('4');">Arun Jaitley</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                  
						<section>
							<div class="content">
								<div class="inner" id="n24">
									<h2>Q24</h2>
									<p>Football star Neymar become the world’s most expensive footballer, He belongs to which of the country?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n24('1');" class="btn btn-warning">Argentina</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('2');">Canada</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('3');">Brazil</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('4');">UK</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                                 
						<section>
							<div class="content">
								<div class="inner" id="n25">
									<h2>Q25</h2>
									<p>Keoladeo National Park is situated at? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n25('1');" class="btn btn-warning">Rajsthan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('2');">Uttrakhand</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('3');">Madhya Pradesh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('4');">Tamil Nadu </button></li>
										
									</ul>
								</div>
							</div>
						</section>

                                   
						<section>
							<div class="content">
								<div class="inner" id="n26">
									<h2>Q26</h2>
									<p>Which State Govt Launched The Scheme  ‘Apni Gadi Apni Rozgar’? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n26('1');" class="btn btn-warning">Haryana</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('2');">Delhi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('3');">Jammu And Kashmir</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('4');">Punjab</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                                  
						<section>
							<div class="content">
								<div class="inner" id="n27">
									<h2>Q27</h2>
									<p>Which Country Recently successfully tests THAAD with Ballistic missile? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n27('1');" class="btn btn-warning">China</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('2');">North Korea </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('3');">USA</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('4');">INDIA</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                  
						<section>
							<div class="content">
								<div class="inner" id="n28">
									<h2>Q28</h2>
									<p>Ramon Magsaysay Award Also Known as Asia’s Nobel Prize, It Was Named After President of Which Country?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n28('1');" class="btn btn-warning">South Africa </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('2');">Thiland</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('3');">Philipins</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('4');">India</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						<section>
							<div class="content">
								<div class="inner" id="n29">
									<h2>Q29</h2>
									<p>Govt. has decided to transform which Market into a museum by September 2018?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n29('1');" class="btn btn-warning">Gold Market</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('2');">Canaught Place</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('3');">Gole market</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('4');">Begum Bazar</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                  
						<section>
							<div class="content">
								<div class="inner" id="n30">
									<h2>Q30</h2>
									<p>The Union Government Recently Launched an App To Maintain Roads. What is the name of APP?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n30('1');" class="btn btn-warning">Punarutthan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('2');">Nirman</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('3');">Unnati</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('4');">Aarambh</button></li>
										
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