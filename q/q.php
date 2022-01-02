


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
			if(a==1) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); } 
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
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n4").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n5(a) {
		
		
if(a==2) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n8").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
			
		function n9(a) {
		
		
if(a==3) { getCorrect(); document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n15").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n16(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n20").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n21(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n21").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n22(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n22").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n23(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n23").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n24(a) {
		
		
if(a==2) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n27").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n28(a) {
		
		
if(a==4) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n28").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n29(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n29").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n30(a) {
		
		
if(a==1) { getCorrect();  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

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
									<p>Who was the last ruling Maharaja of Jammu and Kashmir?<br></p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">Hari Singh </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">Pratap Singh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">Ranbir Singh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">Gulab Singh</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
		
												
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>Which one is the longest river in Jammu and Kashmir?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">Indus </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">Jhelum</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">Chenab </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">Doda</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						


						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>The Wular Lake is located in which district? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">Udhampur </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">Baramulla </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">Bandipora  </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">Kupwara</button></li>
										
									</ul>
								</div>
							</div>
						</section>

				
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>Total number of national parks in Jammu and Kashmir is? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">3 </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">4</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">5</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">7</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
															
						<section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q5</h2>
									<p>The Shalimar Bagh was built in the year? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">1606</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">1619</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">1627</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">1635</button></li>
										
									</ul>
								</div>
							</div>
						</section>

	
        
                        <section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q6</h2>
									<p>In 1897, first railway line was built in Jammu and Kashmir to connect Jammu with which city? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">Sialkot  </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">Udhampur </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">Delhi </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">Rawalpindi </button></li>
										
									</ul>
								</div>
							</div>

                            </section>
               
						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>The Kashmiri Pandits more commonly refer Noon Chai as;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">Kehwa Chai </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">Noon Wath</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">Sheer Chai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">Gulab Chai</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
								
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p>The first fortification for Hari Parbhat was constructed during the reign of?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">Jehangir</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">Akbar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">Maharaja Hari Singh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">Aurangzeb</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
										
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>Area rank of Jammu and Kashmir is?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">3rd</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">7th</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">5th</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">4th</button></li>
										
									</ul>
								</div>
							</div>
						</section>
					
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p>Which district is known as “Land of Springs”?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">Baramulla</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">Budgam</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">Sopore</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">Anantnag</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                            
                            <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>Who was the first Prime Minister of J&K?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning">Mufti Umar Farooq</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">Justice Mehar Chand Mahajan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">Raja Hari Singh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">Jenab Mirwaiz Raja Farooq</button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n12">
									<h2>Q12</h2>
									<p>“Rath Vanday ti Puj Vanuk” means?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n12('1');" class="btn btn-warning">To be kind at another's expense</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('2');">To be kind to all butchers</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('3');">To be kind enough to go to butcher shop</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('4');">To be a kind butcher.</button></li>
										
									</ul>
								</div>
							</div>
						</section>
			
						
						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p>“Na Tren Manz, Na TruvIhan Manz” means?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">One who doesn't have any money</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">One who doesn't have any humor</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">One who doesn't have any importance</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">One who doesn’t have any friends</button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>According to a legend, Jesus Christ visited Kashmir, a meadow is named after this event, which one is it?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">Gulmarg</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">Yusmarg </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">Khelanmarg</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">Sonamarg</button></li>
										
									</ul>
								</div>
							</div>
						</section>
               
						<section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p>Kashmiri Wazwan comprises around how many dishes?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning">26</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">36</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">46</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">56</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                  
						<section>
							<div class="content">
								<div class="inner" id="n16">
									<h2>Q16</h2>
									<p>Other than Kashmiri chillies, their is this flower which gives Wazwan red color, what is it called?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n16('1');" class="btn btn-warning">Koung ( Saffron)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('2');">Mawal (Cockscomb flower)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('3');">Gulab ( Rose)</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('4');">None</button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
                
						<section>
							<div class="content">
								<div class="inner" id="n17">
									<h2>Q17</h2>
									<p>Wazwan is made in special vessels made of ?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n17('1');" class="btn btn-warning">Zinc- Plated Iron</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('2');">Nickel-Plated Copper</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('3');">Iron - Plated Zinc</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('4');">None of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>
                   
						<section>
							<div class="content">
								<div class="inner" id="n18">
									<h2>Q18</h2>
									<p>When did the habilitation at Burzahom come to an end?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n18('1');" class="btn btn-warning">AD 1300</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('2');">1300 BC</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('3');">AD 1400</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('4');">1400 BC</button></li>
										
									</ul>
								</div>
							</div>
						</section>
             
						<section>
							<div class="content">
								<div class="inner" id="n19">
									<h2>Q19</h2>
									<p>Who is known as the ‘Samudragupta of Kashmir’ ?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n19('1');" class="btn btn-warning">Gunavarman</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('2');">Durlab vardhan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('3');">Lalitaditya</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('4');">Sanghbuti</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                   
						<section>
							<div class="content">
								<div class="inner" id="n20">
									<h2>Q20</h2>
									<p>Which is known as the first bridge of Srinagar?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n20('1');" class="btn btn-warning">Zero Bridge</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('2');">Zaina Kadal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('3');">Kadi Kadal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('4');">Fateh Kadal</button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
                    
						<section>
							<div class="content">
								<div class="inner" id="n21">
									<h2>Q21</h2>
									<p>"Walo Ha Bagwaano" is one of the national songs of Kashmir. Who wrote it?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n21('1');" class="btn btn-warning">Mahmud Gami</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('2');">Mehjoor</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('3');">Iqbal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('4');">Abdul Ahad Azad</button></li>
										
									</ul>
								</div>
							</div>
						</section>
         
                 
						<section>
							<div class="content">
								<div class="inner" id="n22">
									<h2>Q22</h2>
									<p>Which of the folk dance is celebrated in Jammu and Kashmir?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n22('1');" class="btn btn-warning">Dumhal Dance</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('2');">Rouf Dance</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('3');">Bacha Nagma Dance</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('4');">All of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
 
                       
						<section>
							<div class="content">
								<div class="inner" id="n23">
									<h2>Q23</h2>
									<p> Which Temple is located in Jammu and Kasmir ?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n23('1');" class="btn btn-warning">Vaishno Devi Mandir</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('2');">Machail Mata</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('3');">Raghunath Temple</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('4');">All of these</button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
                    
						<section>
							<div class="content">
								<div class="inner" id="n24">
									<h2>Q24</h2>
									<p>Nund Rishi or Sheikh Noor ud-Din Wali or Sheikh Noor ud-Din Noorani and popularly as Sheikh ul-Alam (RA) was born in a village called;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n24('1');" class="btn btn-warning">Sunderbagh In Beerwah </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('2');">Qaimoh in Kulgam </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('3');">Lalchowk in Anantnag </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('4');">Outside Kashmir</button></li>
										
									</ul>
								</div>
							</div>
						</section>
              
						<section>
							<div class="content">
								<div class="inner" id="n25">
									<h2>Q25</h2>
									<p>Yoghurt-based mutton gravy without turmeric or chilli powder of Kashmir is;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n25('1');" class="btn btn-warning">Gushtaba</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('2');">Yakhni</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('3');">Rista</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('4');">Rogan Josh</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
                     
						<section>
							<div class="content">
								<div class="inner" id="n26">
									<h2>Q26</h2>
									<p>Which Section of J&K constitution deals with Fundamental Rights?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n26('1');" class="btn btn-warning">Section 11</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('2');">Section 10</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('3');">Section 13</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('4');">Section 15</button></li>
										
									</ul>
								</div>
							</div>
						</section>
       
                   
						<section>
							<div class="content">
								<div class="inner" id="n27">
									<h2>Q27</h2>
									<p>Who was appointed the Chief of Army Staff of Gulab Singh?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n27('1');" class="btn btn-warning">General Zorawar Sigh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('2');">General Ranbeer Lodha</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('3');">Najib Sodh Pahalwan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('4');">Pandit Rankbeer</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
    				<section>
							<div class="content">
								<div class="inner" id="n28">
									<h2>Q28</h2>
									<p>The orthographical system used to write the Kashmiri language is:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n28('1');" class="btn btn-warning">Sharada script</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('2');">Devanagari script</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('3');">Perso-Arabic script</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('4');">All of the above </button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
						<section>
							<div class="content">
								<div class="inner" id="n29">
									<h2>Q29</h2>
									<p>The constitution of J&K was adopted on ?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n29('1');" class="btn btn-warning">17th Nov, 1956</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('2');">19th Nov, 1956</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('3');">17th Nov, 1957</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('4');">19th Nov, 1957</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                       
						<section>
							<div class="content">
								<div class="inner" id="n30">
									<h2>Q30</h2>
									<p>Nishat Bahg was built by ?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n30('1');" class="btn btn-warning">Asif Khan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('2');">Nur Jahan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('3');">Akbar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('4');">Shah Jahan</button></li>
										
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