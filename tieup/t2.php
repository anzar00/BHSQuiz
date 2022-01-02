


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
			if(c==300) {
				GoSub();
			}
			
			
			
			if (self.count > (self.seconds - 1)) clearInterval(self.interval);

			self.degrees = self.degrees + (180 / self.seconds);
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
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n2").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n3(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n3").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n4(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n4").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n5(a) {
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n5").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n6(a) {
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }
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
		
		
if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n9").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
	
		
			
		function n10(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2; }

document.getElementById("n10").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n11(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n11").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n12(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n12").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n13(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n13").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n14(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n14").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n15(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); score=score-2;  }

document.getElementById("n15").innerHTML = "<center> <h1>Are you ready to submit? </h1></center>";
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
							You will be asked 30 questions in a time limit of 5 mins<br>
							For a correct response, the teams get 5 points and -2 for an incorrect response. </p>
							<p>
							The timer will start as soon as you click the play button <br>
							Submit only when you have attempted all the questions</p>
                            
							<ul class="actions">Enter Pin: <br><br>
							<input type="text" id='t'><br>
								<li><button onclick="if (document.getElementById('t').value=='1002') { window.location = 't2.php?g=<?php echo $_GET['t']; ?>'; }" class="button scrolly">Start !!</button></li>
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
								
								

									
									
									
									<p><h3>Lets start the TieUp Round 2 round. Keep the time limit on the left side of the screen in mind.<br>
									Hurry up !! Scroll down for more questions.</h3></p>
							
								</div>
							</div>
						</section>
						
						<section >
							<div class="content">
								<div class="inner" id="n1">
									<h2>Q1</h2>
									<p>Which State has Launched free power connection scheme for BPL families?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">Rajasthan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">Punjab</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">Uttar Pradesh </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">Madhya Pradesh </button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
															
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>Which metro Railway will become India’s 1st to have its own FM radio station? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">Jaipur</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">Lucknow</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">Delhi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">Hyderabad</button></li>
										
									</ul>
								</div>
							</div>
						</section>
				
						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>Who was The Petroleum & Oil Minister Of India?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">Nazma Haptulla</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">Dharmendra Pradhan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">V.K Singh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">Ravishankar Prasad</button></li>
										
									</ul>
								</div>
							</div>
						</section>
							
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>Which Country won Women’s Cricket World Cup 2017?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">Pakistan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">Australia</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">England</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">China</button></li>
										
									</ul>
								</div>
							</div>
						</section>
								
						<section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q5</h2>
									<p>Who is the captain of Indian women’s Cricket team?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">Mithali Raj </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">Poonam Sharma </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">Jhulan Goswami</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">Veena Singh </button></li>
										
									</ul>
								</div>
							</div>
						</section>
								
						<section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q6</h2>
									<p>A bag used by US astronaut Neil Armstrong to bring samples of moon dust back to earth was sold for?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">$1.8bn</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">$1.7bn</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">$1.6bn</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">$1.5bn</button></li>
										
									</ul>
								</div>
							</div>
						</section>
											
						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>Reliance Jio announced the launch of its 4G feature phone named?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">Jio For You</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">Jio Mobile</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">Jio Phone</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">Phone in Budget</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
					
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p>Which Mobile App is launched By Government of India?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">Celebrating Yoga</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">Celebrating Birthday</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">Online Ticket</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">Free Offers</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
							
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>Which Institute won first yoga award For the Prime Minister’s Award for outstanding contribution for promotion and development of yoga?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">RamamaniIyengar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">IIM A </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">IIM B </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">Delhi University </button></li>
										
									</ul>
								</div>
							</div>
						</section>
 									
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p>Recently which User has become the first Twitter user to reach 100 million followers?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">Singer Katy Perry</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">President Barack Obama </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">PM Modi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">Amitabh Bacchan</button></li>
										
									</ul>
								</div>
							</div>
						</section>
							               
                        <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>Which Central Indian Railway’s station has become India’s first railway station run by women? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning">Thane</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">Chapra </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">Kanpur</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">Matunga</button></li>
										
									</ul>
								</div>
							</div>
						</section>
					
	                   <section>
							<div class="content">
								<div class="inner" id="n12">
									<h2>Q12</h2>
									<p>Which Airline rated best airline in the world?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n12('1');" class="btn btn-warning">Singapore</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('2');">Malaysian </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('3');">Emirats</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('4');">Air India </button></li>
										
									</ul>
								</div>
							</div>
						</section>			
 
                        <section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p>Which Yojana is related to providing subsidized LPG cylinder?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">Jandhan Yojana</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">Ujjwala Yojana </button></li>
								<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">Jeevan Jyoti Yojana </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">Ujala Yojana </button></li>
										
									</ul>
								</div>
							</div>
						</section>
                                    
                           
                       <section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>India’s first solar-powered 1600 HP DEMU train has launched from which railway station?</p>
									<ul class="actions">
				<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">Safdarjung railway station</button></li>
				<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">Farukhnagar railway station </button></li>
				<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">Mumbai Central railway station </button></li>
				<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">Habibganj railway station</button></li>
										
									</ul>
								</div>
							</div>
						</section>             

                    <section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p>Who has been appointed the new brand ambassador of the Srinagar Municipal Corporation (SMC)?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning">Bilal Dar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">Shafqat Khan</button></li>
								<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">Choudhary Sukhandan </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">Altaf Bukhari </button></li>
										
									</ul>
								</div>
							</div>
						</section>                
                                    
                                    
                                    
										
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