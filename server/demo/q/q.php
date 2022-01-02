


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
		
		  <link href='http://localhost/main/timer/css/radialtimer.css' rel='stylesheet'>
    <script src='http://localhost/main/timer/js/jquery-2.0.3.min.js' type='text/javascript'></script>
	<link href='http://localhost/main/timer/css/main.css' rel='stylesheet'>
		<script>
		var SCORE=0;
	




	
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
			if(c==600) {
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
			if(a==3) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); } 
document.getElementById("n1").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
		function n2(a) {
		
		
if(a==3) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n2").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n3(a) {
		
		
if(a==2) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n3").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n4(a) {
		
		
if(a==3) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n4").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n5(a) {
		
		
if(a==1) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n5").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n6(a) {
		
		
if(a==1) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }
document.getElementById("n6").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n7(a) {
		
		
if(a==3) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n7").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n8(a) {
		
		
if(a==4) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n8").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		
			
		function n9(a) {
		
		
if(a==4) {  document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n9").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
	
		
			
		function n10(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n10").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		
		function n11(a) {
		
		
if(a==2) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n11").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n12(a) {
		
		
if(a==4) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n12").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n13(a) {
		
		
if(a==4) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n13").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n14(a) {
		
		
if(a==2) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n14").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n15(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n15").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n16(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n16").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n17(a) {
		
		
if(a==4) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n17").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n18(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n18").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n19(a) {
		
		
if(a==2) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n19").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n20(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n20").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n21(a) {
		
		
if(a==2) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n21").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n22(a) {
		
		
if(a==2) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n22").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n23(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n23").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n24(a) {
		
		
if(a==2) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n24").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n25(a) {
		
		
if(a==4) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n25").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n26(a) {
		
		
if(a==1) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n26").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n27(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n27").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n28(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n28").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n29(a) {
		
		
if(a==1) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n29").innerHTML = "<center> <h1>Scroll down for next question</h1></center>";
		}
		function n30(a) {
		
		
if(a==3) {   document.getElementById('correct').play(); } else { document.getElementById('wrong').play(); }

document.getElementById("n30").innerHTML = "<center> <h1>Are you ready to submit?</h1></center>";
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
	
	<audio src="http://localhost/main/files/correct.wav" id="correct"></audio>
<audio src="http://localhost/main/files/wrong.wav" id="wrong"></audio>
	
		<!-- Sidebar -->
			<section id="sidebar">
	

				<div class="inner">
					<nav><?php if(isset($_GET['g'])) { ?>
							 <div style='left: 50%; top: 20%;' class='radialtimer' id='timer'></div><br><br><br>
							<?php } ?>	<ul>

						<font size="5px">	<li><a class="scrolly active active-locked" href="#intro"> Demo Qualifying Round</a></li></font>
                         
							<?php if(isset($_GET['g'])) { ?><li><button onclick="GoSub()" class="button scrolly"><font size="5px"><a href="QU/QU.html">Submit</a></font></button></li>
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
							<h1>Welcome <?php echo $_GET['t']; ?></h1>
							
                            
							<ul class="actions">Enter Pin: <br><br>
							<input type="text" id='t'><br>
								<li><button onclick="if (document.getElementById('t').value=='0000') { window.location = 'q.php?g=<?php echo $_GET['t']; ?>'; }" class="button scrolly">Start !!</button></li>
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
									<h2> <?php echo $_GET['g']; ?></h2>
								
								

									
									
									
									<p><h3>Lets start the first round. Keep the time limit on the left side oh the screen in mind.<br>
									Hurry up !! Scroll down for more questions.</h3></p>
							
								</div>
							</div>
						</section>
						
						
						<section >
							<div class="content">
								<div class="inner" id="n1">
									<h2>Q1</h2>
									<p>India collaborating with Russia to build a nuclear plant in;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n1('1');" class="btn btn-warning">Nepal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('2');">Russia</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('3');">Bangladesh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n1('4');">India</button></li>
										
									</ul>
								</div>
							</div>
						</section>

						
						<section>
							<div class="content">
								<div class="inner" id="n2">
									<h2>Q2</h2>
									<p>China and Australia joint military training exercise 2017 held in Kunming called;</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n2('1');" class="btn btn-warning">Tiger Tricks</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('2');">Camel Walking</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('3');">Panda Kangaroo</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n2('4');">Elephant Legend</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						


						<section>
							<div class="content">
								<div class="inner" id="n3">
									<h2>Q3</h2>
									<p>Which country postal department released postage stamps on Yoga Expert Mr. Bishnu Charan Ghosh?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n3('1');" class="btn btn-warning">China</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('2');">Japan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('3');">Nepal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n3('4');">Bhutan</button></li>
										
									</ul>
								</div>
							</div>
						</section>

				
						<section>
							<div class="content">
								<div class="inner" id="n4">
									<h2>Q4</h2>
									<p>For which country, China planned to provide $10 billion credit line?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n4('1');" class="btn btn-warning">Bhutan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('2');">Nepal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('3');">Iran</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n4('4');">Fiji</button></li>
										
									</ul>
								</div>
							</div>
						</section>
												
															
						<section>
							<div class="content">
								<div class="inner" id="n6">
									<h2>Q5</h2>
									<p>Google is extending its successful Google Station program for __________.</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n6('1');" class="btn btn-warning">Indonesia</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('2');">Iceland</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('3');">India</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n6('4');">Ireland</button></li>
										
									</ul>
								</div>
							</div>
						</section>

	
        
                        <section>
							<div class="content">
								<div class="inner" id="n5">
									<h2>Q6</h2>
									<p>Which of the following going to conduct 2024 for Summer Olympics? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n5('1');" class="btn btn-warning">Paris</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('2');">Australia</button></li>
								<li>   <button type="button" class="btn btn-warning" onclick="n5('3');">United States of America</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n5('4');">South Africa</button></li>
										
									</ul>
								</div>
							</div>

                            </section>
               
						<section>
							<div class="content">
								<div class="inner" id="n7">
									<h2>Q7</h2>
									<p>Which country is the world's largest exporter of beef as per the OECD-FAO Agricultural Outlook 2017-2026 report?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n7('1');" class="btn btn-warning">India</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('2');">Australia</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('3');">Brazil</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n7('4');">Pakistan</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
								
						<section>
							<div class="content">
								<div class="inner" id="n8">
									<h2>Q8</h2>
									<p>1, 9, 25, 49, ?, 121. What will come at the place of question mark?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n8('1');" class="btn btn-warning">100</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('2');">91</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('3');">64</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n8('4');">81</button></li>
										
									</ul>
								</div>
							</div>
						</section>
						
										
						<section>
							<div class="content">
								<div class="inner" id="n9">
									<h2>Q9</h2>
									<p>8, 28, 116, 584,?. What will come at the place of question mark? </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n9('1');" class="btn btn-warning">3506</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('2');">3504</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('3');">3508</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n9('4');">3502</button></li>
										
									</ul>
								</div>
							</div>
						</section>
					
						<section>
							<div class="content">
								<div class="inner" id="n10">
									<h2>Q10</h2>
									<p>Erin is twelve years old. For three years, she has been asking her parents for a dog. Her parents have told her that they believe a dog would not be happy in an apartment, but they have given her permission to have a bird. Erin has not yet decided what kind of bird she would like to have. </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n10('1');" class="btn btn-warning">Erin's parents like birds better than they like dogs</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('2');">Erin does not like birds</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('3');">Erin and her parents live in an apartment</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n10('4');">Erin and her parents would like to move</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                            
                            <section>
							<div class="content">
								<div class="inner" id="n11">
									<h2>Q11</h2>
									<p>Yard is to inch as Quart is to:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n11('1');" class="btn btn-warning">Gallon</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('2');">Ounce</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('3');">Milk</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n11('4');">Liquid</button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n12">
									<h2>Q12</h2>
									<p>If the legislature decides to fund the agricultural subsidy program, national radio, and the small business loan program, the only other single program that can be funded is:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n12('1');" class="btn btn-warning">Hurricane preparedness </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('2');">Harbor improvements</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('3');">School music program</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n12('4');">Senate office building remodeling</button></li>
										
									</ul>
								</div>
							</div>
						</section>
			
						
						<section>
							<div class="content">
								<div class="inner" id="n13">
									<h2>Q13</h2>
									<p>Pain [Choose essential part] </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n13('1');" class="btn btn-warning">Cut</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('2');">Burn</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('3');">Nuisance</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n13('4');">Hurt</button></li>
										
									</ul>
								</div>
							</div>
						</section>


						<section>
							<div class="content">
								<div class="inner" id="n14">
									<h2>Q14</h2>
									<p>The school principal has received complaints from parents about bullying in the school yard during recess. He wants to investigate and end this situation as soon as possible, so he has asked the recess aides to watch closely. Which situation should the recess aides report to the principal?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n14('1');" class="btn btn-warning">A girl is sitting glumly on a bench reading a book and not interacting with her peers</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('2');">Four girls are surrounding another girl and seem to have possession of her backpack</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('3');">Two boys are playing a one-on-one game of basketball and are arguing over the last basket scored</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n14('4');">Three boys are huddled over a handheld video game, which isn't supposed to be on school grounds</button></li>
										
									</ul>
								</div>
							</div>
						</section>
               
						<section>
							<div class="content">
								<div class="inner" id="n15">
									<h2>Q15</h2>
									<p>Though the waste of time or the expenditure on fashions is very large, yet fashions have come to stay. They will not go, come what may. However, what is now required is that strong efforts should be made to displace the excessive craze for fashion from the minds of these youngsters. The passage best supports the statement that:</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n15('1');" class="btn btn-warning">Fashion is the need of the day</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('2');">The excessive craze for fashion is detrimental to one's personality </button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('3');">The hoard for fashion should be done away with so as not to let down the constructive development</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n15('4');">Work and other activities should be valued more than the outward appearance</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                  
						<section>
							<div class="content">
								<div class="inner" id="n16">
									<h2>Q16</h2>
									<p>FINCH : BIRD</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n16('1');" class="btn btn-warning">Frog : Toad</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('2');">Elephant : Reptile</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('3');">Dalmatian : Dog</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n16('4');">Collie : Marsupial</button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
                
						<section>
							<div class="content">
								<div class="inner" id="n17">
									<h2>Q17</h2>
									<p>SIAMESE : CAT</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n17('1');" class="btn btn-warning">Type : Breed</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('2');">Dog : Puppy</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('3');">Mark : Spot</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n17('4');">Romaine : Lettuce</button></li>
										
									</ul>
								</div>
							</div>
						</section>
                   
						<section>
							<div class="content">
								<div class="inner" id="n18">
									<h2>Q18</h2>
									<p>Who of the following is newly appointed as the chairman-cum-managing director (CMD) of NHPC Ltd.?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n18('1');" class="btn btn-warning">Binod Chowdhury</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('2');">Rajib Biswas</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('3');">Bairaj Joshi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n18('4');">Narayan Joshi</button></li>
										
									</ul>
								</div>
							</div>
						</section>
             
						<section>
							<div class="content">
								<div class="inner" id="n19">
									<h2>Q19</h2>
									<p>What is the state animal of Arunachal Pradesh?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n19('1');" class="btn btn-warning">Ox</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('2');">Gayal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('3');">Lion</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n19('4');">Indian Elephant</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                   
						<section>
							<div class="content">
								<div class="inner" id="n20">
									<h2>Q20</h2>
									<p>From where was India’s multipurpose telecommunication satellite INSAT-2E launched?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n20('1');" class="btn btn-warning">Thumba</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('2');">Baikanour</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('3');">Kourou</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n20('4');">Sriharikota</button></li>
										
									</ul>
								</div>
							</div>
						</section>
  
                    
						<section>
							<div class="content">
								<div class="inner" id="n21">
									<h2>Q21</h2>
									<p>In which city was the India International Science Festival held from 13 to 16 October 2017?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n21('1');" class="btn btn-warning">New Delhi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('2');">Chennai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('3');">Mumbai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n21('4');">Bhubaneswar</button></li>
										
									</ul>
								</div>
							</div>
						</section>
         
                 
						<section>
							<div class="content">
								<div class="inner" id="n22">
									<h2>Q22</h2>
									<p>Indian Railways has introduced a special Rajdhani Express without flexi-fare from New Delhi to -</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n22('1');" class="btn btn-warning">Mumbai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('2');">Chennai</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('3');">Ahmadabad</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n22('4');">Kolkata</button></li>
										
									</ul>
								</div>
							</div>
						</section>
 
                       
						<section>
							<div class="content">
								<div class="inner" id="n23">
									<h2>Q23</h2>
									<p>Who was the first woman President of South Korea?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n23('1');" class="btn btn-warning">Han Myung-Sook</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('2');">Yingluck Shinawatra</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('3');">Park Geun-Hye</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n23('4');">Aung San Suu Kyi</button></li>
										
									</ul>
								</div>
							</div>
						</section>
   
                    
						<section>
							<div class="content">
								<div class="inner" id="n24">
									<h2>Q24</h2>
									<p>Which country has launched its population census after a gap of 19 years?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n24('1');" class="btn btn-warning">Bangladesh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('2');">Pakistan</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('3');">Nepal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n24('4');">Sri Lanka</button></li>
										
									</ul>
								</div>
							</div>
						</section>
        25.	
a)	
b)	
c)	
d)	
                    
						<section>
							<div class="content">
								<div class="inner" id="n25">
									<h2>Q25</h2>
									<p>From which of the following countries does India import electricity?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n25('1');" class="btn btn-warning">Nepal</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('2');">Myanmar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('3');">Bangladesh</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n25('4');">Bhutan</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
                     
						<section>
							<div class="content">
								<div class="inner" id="n26">
									<h2>Q26</h2>
									<p>The cricketer who has become the fastest Indian and the second fastest overall to take 200 test wickets (in 36 matches) – </p>
									<ul class="actions">
										<li>   <button type="button" onclick="n26('1');" class="btn btn-warning">R Ashwin</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('2');">Jadega</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('3');">Bishen Singh Bedi</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n26('4');">Bhagwat Chandrasekhar</button></li>
										
									</ul>
								</div>
							</div>
						</section>
       
                   
						<section>
							<div class="content">
								<div class="inner" id="n27">
									<h2>Q27</h2>
									<p>The Indian cricketer who has been appointed the brand ambassador of Punjab National Bank –</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n27('1');" class="btn btn-warning">M S Dhoni</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('2');">Sachin Tendulkar</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('3');">Virat Kohli</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n27('4');">Ajinkya Rahane</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
    				<section>
							<div class="content">
								<div class="inner" id="n28">
									<h2>Q28</h2>
									<p>Vaccine against which disease has been added to measles vaccine to form a single vaccine and included in the Universal Immunization Programme by the Govt?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n28('1');" class="btn btn-warning">Polio</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('2');">Malaria</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('3');">Rubella</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n28('4');">Cholera</button></li>
										
									</ul>
								</div>
							</div>
						</section>
    
						<section>
							<div class="content">
								<div class="inner" id="n29">
									<h2>Q29</h2>
									<p>What type of animal is Bao Bao which is being shifted from Smithsonian National Zoo, Washington DC to China?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n29('1');" class="btn btn-warning">Giant Panda</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('2');">Snow Leopard</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('3');">Alpaca</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n29('4');">Polar Bear</button></li>
										
									</ul>
								</div>
							</div>
						</section>

                       
						<section>
							<div class="content">
								<div class="inner" id="n30">
									<h2>Q30</h2>
									<p>National Science Day is observed on 28 February each year to mark which event?</p>
									<ul class="actions">
										<li>   <button type="button" onclick="n30('1');" class="btn btn-warning">Birth of Sir C.V. Raman</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('2');">Award of Nobel Prize to Sir C.V. Raman</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('3');">Discovery of Raman Effect by Sir C.V. Raman</button></li>
										<li>   <button type="button" class="btn btn-warning" onclick="n30('4');">Death of Sir C.V. Raman</button></li>
										
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