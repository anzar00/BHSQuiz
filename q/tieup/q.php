


<!DOCTYPE HTML>





<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Qualifying Round</title>
		
  <script src="'http://192.168.100.1/main/q/jquery.min.js"></script>
  <script src="http://192.168.100.1/main/q/bootstrap.min.js"></script>
		
		  <link href='http://192.168.100.1/main/timer/css/radialtimer.css' rel='stylesheet'>
    <script src='http://192.168.100.1/main/timer/js/jquery-2.0.3.min.js' type='text/javascript'></script>
	<link href='http://192.168.100.1/main/timer/css/main.css' rel='stylesheet'>
		<script>
		var team="<?php echo $_GET['g']; ?>";
		var SCORE=0;
		function GoSub() {

			var urll="helpers/q1.php?g=<?php echo $_GET['g']; ?>";
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
			if(c==360) {
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
	Timer.init("timer", '360');
	
});





function n1(a) {
			if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); } 
document.getElementById("n1").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
		function n2(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n2").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n3(a) {
		
		
if(a==4) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n7").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n8(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n8").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
			
		function n9(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n9").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
	
		
			
		function n10(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n14").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n15(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n15").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n16(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n16").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n17(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n17").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n18(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n18").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n19(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n19").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n20(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n20").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n21(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n21").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n22(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n22").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n23(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n23").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n24(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n24").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n25(a) {
		
		
if(a==3) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n25").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n26(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n29").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n30(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n30").innerHTML = "<center> <h1>Are you ready to submit ? </h1></center>";
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
		<link rel="stylesheet" href="http://192.168.100.1/main/q/assets/css/main.css" />
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

						<font size="5px">	<li><a class="scrolly active active-locked" href="#intro">Qualifying Round</a></li></font>
                        
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
							<p> This is the qualifying round of the competition. <br>
							Each team will be asked 30 multiple choice questions.<br>
							For a correct response, the teams get 2 points and 0 for an incorrect response. </p>
							<p>
							The timer will start as soon as you click the Play button <br>
							Submit only when you have attempted all the questions</p>
                            
							<ul class="actions">Enter Pin: <br><br>
							<input type="text" id='t'><br>
								<li><button onclick="if (document.getElementById('t').value=='8788') { window.location = 'q.php?g=<?php echo $_GET['t']; ?>'; }" class="button scrolly">Play..</button></li>
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
								
								

									
									
									
									<p><h3>Lets Start The Qualifying Round. Keep the time limit on the left side of the screen in mind.<br>
									Hurry up !! Scroll down for more questions.</h3></p>
							
								</div>
							</div>
						</section>
						
						
						
							<section >
							<div class="content">
								<div class="inner" id="n1">
									<h2>Q1</h2>
									<p>What is BIT?<br></p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">Bachelor in IT</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">Binary Digit</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">Bangalore IT park</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">Another name for piece</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
		
												
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>What is FAT?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">Obese</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">Falcon Technique</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">File Allocation Technique</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">File Allocation Table</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						


						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>What does "F" mean on the F1, F2, F3, F4, etc. keyboard keys? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">Find </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">File </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">Format </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">Function</button></li>
										
									</ul>
								</div>
							</div>
						</section>

				
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>Which of the following is not used as secondary storage? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">Semiconductor memory  </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">Magnetic disk </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">Magnetic drum </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">Magnetic tape </button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
															
						<section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q5</h2>
									<p>Which one of the following is not a client-server application? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">Internet chat</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">Web browsing</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">E-mail</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">Ping</button></li>
										
									</ul>
								</div>
							</div>
						</section>

	
        
                        <section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q6</h2>
									<p>Which of the following codes needs 7 bits to represent a character? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">ASCII </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">BCD </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">EBCDIC </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">Gray </button></li>
										
									</ul>
								</div>
							</div>

                            </section>
               
						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>Plasma Panel is</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">Input Device </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">Output Device </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">Memory Device </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">Communication Device </button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
								
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p> Baud means</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">The number of bits transmitted per unit time. </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">The number of bytes transmitted per unit time</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">The rate at which the signal changes.</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">None of the above</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
										
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>WWW uses protocol </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">FTP </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">HTTP </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">WBC </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">MTP </button></li>
										
									</ul>
								</div>
							</div>
						</section>
					
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p> Which of the following is an example of an optical disk? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">Digital Versatile Disk </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">Magnetic Disk </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">Memory Disk </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">Databus Disk </button></li>
										
									</ul>
								</div>
							</div>
						</section>
                            
                            <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>Which is the fastest memory? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning"> CD-ROM </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">RAM </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">Registers </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">Cache </button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n12">
									<h2>Q12</h2>
									<p>What is the name of the arrangements where several central processing units share one memory?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n12('1');" class="btn btn-warning">Multitasking  </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('2');">Multiprogramming </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('3');">Concurrent programming </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('4');">Multiprocessing </button></li>
										
									</ul>
								</div>
							</div>
						</section>
			
						
						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p> In a GUI, the window that is currently in use is called as </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">Top window </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">Active window </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">Framed window</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">None of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>The operating system manages </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">Memory </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">Processor </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">Disk and I/O devices </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">All of the above</button></li>
										
									</ul>
								</div>
							</div>
						</section>
               
						<section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p> Modulation is the process of </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning"> Sending a file from one computer to another. </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">Converting digital signal to analog signal. </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">Converting analog signal to digital signal. </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">Echoing every character that is received.</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                  
						<section>
							<div class="content">
								<div class="inner" id="n16">
									<h2>Q16</h2>
									<p>Junk E-mail is also called </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n16('1');" class="btn btn-warning">Spam </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('2');">Spoof </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('3');">Sniffer script </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('4');">Spool </button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
                
						<section>
							<div class="content">
								<div class="inner" id="n17">
									<h2>Q17</h2>
									<p>Which of the following wired transmission media is the fastest? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n17('1');" class="btn btn-warning">Twisted pair </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('2');">Coaxial cable </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('3');">Optical fiber </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('4');">None of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>
                   
						<section>
							<div class="content">
								<div class="inner" id="n18">
									<h2>Q18</h2>
									<p>When data is sent during set time periods, what do you call the transmission mode?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n18('1');" class="btn btn-warning">Synchronous </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('2');">Asynchronous </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('3');">Protocol </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('4');">None of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>
             
						<section>
							<div class="content">
								<div class="inner" id="n19">
									<h2>Q19</h2>
									<p>Which of the following networking solution is suitable for networking within a building? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n19('1');" class="btn btn-warning">WAN </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('2');">LAN </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('3');">MAN </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('4');">None of these </button></li>
										
									</ul>
								</div>
							</div>
						</section>

                   
						<section>
							<div class="content">
								<div class="inner" id="n20">
									<h2>Q20</h2>
									<p> IRC stands for </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n20('1');" class="btn btn-warning">Internet Real Time Communication</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('2');">Internet Relay Chat </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('3');">Internet Real-Time Chat </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('4');">None of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
                    
						<section>
							<div class="content">
								<div class="inner" id="n21">
									<h2>Q21</h2>
									<p>With electronic mail you can do which of the following </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n21('1');" class="btn btn-warning">send and read mail </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('2');">delete, reply to, or forward </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('3');">delete some one else’s mail </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('4');">both (a) and (b) </button></li>
										
									</ul>
								</div>
							</div>
						</section>
         
                 
						<section>
							<div class="content">
								<div class="inner" id="n22">
									<h2>Q22</h2>
									<p>Which service is used on internet to exchange files? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n22('1');" class="btn btn-warning">Telnet </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('2');">Gopher </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('3');">FTP </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('4');">SP </button></li>
										
									</ul>
								</div>
							</div>
						</section>
 
                       
						<section>
							<div class="content">
								<div class="inner" id="n23">
									<h2>Q23</h2>
									<p> Two commonly used web browser are internet explorer and </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n23('1');" class="btn btn-warning"> Netscape Network </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('2');">Mozilla Firefox </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('3');">Network Navigator </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('4');">Internet Navigator </button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
                    
						<section>
							<div class="content">
								<div class="inner" id="n24">
									<h2>Q24</h2>
									<p>The first network that planted the seeds of Internet was </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n24('1');" class="btn btn-warning">ARPANET </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('2');">NSFNET </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('3');">VNET </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('4');">INET </button></li>
										
									</ul>
								</div>
							</div>
						</section>
              
						<section>
							<div class="content">
								<div class="inner" id="n25">
									<h2>Q25</h2>
									<p>The server on the Internet is also known as</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n25('1');" class="btn btn-warning">Repeater </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('2');">NSFNET </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('3');">VNET </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('4');">INET </button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
                     
						<section>
							<div class="content">
								<div class="inner" id="n26">
									<h2>Q26</h2>
									<p>What does DNS stands for? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n26('1');" class="btn btn-warning"> Data Naming Service </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('2');">Domain Name System </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('3');">Data Numeric System </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('4');">Decentralized Naming System</button></li>
										
									</ul>
								</div>
							</div>
						</section>
       
                   
						<section>
							<div class="content">
								<div class="inner" id="n27">
									<h2>Q27</h2>
									<p>POP is referred to as? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n27('1');" class="btn btn-warning">Primary Offline Protocol </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('2');">Public Object Protocol </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('3');">Post Office Protocol </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('4');">None of the above</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
    				<section>
							<div class="content">
								<div class="inner" id="n28">
									<h2>Q28</h2>
									<p>Multimedia elements are </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n28('1');" class="btn btn-warning">Text and picture </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('2');">Animation </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('3');">Movie, video and sound </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('4');">All of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
						<section>
							<div class="content">
								<div class="inner" id="n29">
									<h2>Q29</h2>
									<p> TIFF stands for</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n29('1');" class="btn btn-warning">Tagged Image File Format </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('2');">Template Image File Format </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('3');">Temporary Interchange File Format </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('4');">None</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                       
						<section>
							<div class="content">
								<div class="inner" id="n30">
									<h2>Q30</h2>
									<p>GUI stands for </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n30('1');" class="btn btn-warning">Gnutella Universal Interface </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('2');">Graphical User Interface </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('3');">Graphic Universal Information </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('4');">General Utility Interface </button></li>
										
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
			<script src="http://192.168.100.1/main/q/assets/js/jquery.min.js"></script>
			<script src="http://192.168.100.1/main/q/assets/js/jquery.scrollex.min.js"></script>
			<script src="http://192.168.100.1/main/q/assets/js/jquery.scrolly.min.js"></script>
			<script src="http://192.168.100.1/main/q/assets/js/skel.min.js"></script>
			<script src="http://192.168.100.1/main/q/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="http://192.168.100.1/main/q/assets/js/main.js"></script>

	</body>
</html>