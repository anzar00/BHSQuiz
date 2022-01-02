
<?php
require 'd.php';





if(!isset($_GET['id'])) {

		header('location:index.php?id=1');
}
$id=$_GET['id'];

$conn = new mysqli('localhost', 'root','','quiz');
$sqlq="SELECT * FROM r2 WHERE id='$id'";
$query_runq = mysqli_query($conn,$sqlq);


	
$rowq = mysqli_fetch_assoc($query_runq);

?>



<html>
	<head>
		<title>Buzzer Round</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="jquery.min.js"></script>
		  <link href='http://localhost/main/timer/css/radialtimer.css' rel='stylesheet'>
    <script src='http://localhost/main/timer/js/jquery-2.0.3.min.js' type='text/javascript'></script>
	<link href='http://localhost/main/timer/css/main.css' rel='stylesheet'>
		<script>
		
		
		
		<?php if(isset($_GET['q'])) {
		?>
		
		
		
	
var c=0,y="y";
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
			if(c==45) { if(y=="no") { } else {
				var idd="<?php echo $id; ?>";
				idd++;
				window.location.href="index.php?id="+idd+"&a=t";
			}
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
	Timer.init("timer", '45');
	
});


		<?php } ?>
		
		
		
		
		
		
		
		
		
		var o,team;
		
		function Check(o) {
			var idd="<?php echo $id; ?>";
				idd++;
			if(o==<?php echo $rowq['answer']; ?>) {
				
				getCorrect()
				
				window.location.href="index.php?id="+idd+"&a=yes";
			}
			else {
				getInCorrect();
				window.location.href="index.php?id="+idd+"&a=no";
				
			}
			
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
function getInCorrect() {
   $.ajax({
      url:'a.php?a=no&g='+team,
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
	</head>
	<body class="landing">
	
	<audio src="http://localhost/main/files/correct.wav" id="correct"></audio>
<audio src="http://localhost/main/files/wrong.wav" id="wrong"></audio>
	
	
	
	<?php if(isset($_GET['q'])) { ?>
	
	
	<div style="position: fixed; top:150px; left:90%;">
		 <div style='left: 50%; top: 20%;' class='radialtimer' id='timer'></div>
	</div><?php } ?>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						
					
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Buzzer Round</h2>
							
							
							
							<ul class="actions">
							<li><br><br>
							
							<?php
    if($_GET['id']==16) {
	if($_GET['a']=='yes') { echo "<script>document.getElementById('correct').play();</script>";  } else { echo "<script>document.getElementById('wrong').play();</script>"; } 
        
        echo " End Of Round 2 !<a href='http://localhost/main/server/score.php?l=2'><br><br><button>Scores</button></a>"; 
    } else {
		
							if(isset($_GET['a'])) 
							{ 
							if($_GET['a']=="yes") 
							{ 
					echo "<script>document.getElementById('correct').play();</script>
							<p>Congratulations!<br>
							Your answer was correct...</p>
							<a href='index.php?q=1&id=".$id."'><button> Get Ready To Buzz </button></a>";
							}
							else if($_GET['a']=="no") {
								echo "<script>document.getElementById('wrong').play();</script>
								<p>Your Answer was Incorrect.<br>
								Get Ready for the next question...</p>
									<a href='index.php?q=1&id=".$id."'><button> Get Ready To Buzz </button></a>
								";
								
							}
							else if($_GET['a']=="t") {
								echo "
								TIME UP!!<br>
								Get Ready for the next question...<br><br>
								<a href='index.php?q=1&id=".$id."'><button> Get Ready To Buzz </button></a>
								
								";
								
							}
                                else if($_GET['a']=="s") {
                                
                                echo "<a href='index.php?q=1&id=".$id."'><button> Get Ready To Buzz </button></a>";
                                }
							}
    }
							?>
			<br><br>
			
						</ul>
							
							
                            <?php if(isset($_GET['q'])) { ?>
                            <p style="font-family: 'Arial';font-weight: 7px; font-size: 20px; margin-left: 250px;margin-right: 100px;background-color: white; padding-bottom: 40px; border-radius: 50px; color:black;"><br><br><?php echo $rowq['question']; ?></p>
                            <ul class="actions"><br><br>
<li><a href="#" onclick="Check('1');" class="button "><?php echo $rowq['m1']; ?></a>
<li><a href="#" onclick="Check('2');" class="button "><?php echo $rowq['m2']; ?></a>
<li><a href="#" onclick="Check('3');" class="button "><?php echo $rowq['m3']; ?></a>
<li><a href="#" onclick="Check('4');" class="button "><?php echo $rowq['m4']; ?></a>


							</ul>

							
							<?php } ?>
						</div>
					</section>
				<!-- One -->
			

				<!-- Two -->
		
			
				<!-- CTA -->
			
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script><?php if(isset($_GET['q'])){ ?>
<div id='teams' style="position: fixed; top:50px; left:25px;">
<p><font size="6px;"> Team Answering... </font></p>
<a href="#" onclick="team='g1';y='no'; document.getElementById('timer').style.display='none'; document.getElementById('teams').innerHTML = '<?php echo $s1; ?> is answering...';" class="button"><?php echo $s1; ?></a><br><br><br>

<a href="#" onclick="team='g2';y='no'; document.getElementById('timer').style.display='none';  document.getElementById('teams').innerHTML = '<?php echo $s2; ?> is answering...';" class="button "><?php echo $s2; ?></a><br><br><br>

<a href="#" onclick="team='g3';y='no'; document.getElementById('timer').style.display='none';  document.getElementById('teams').innerHTML = '<?php echo $s3; ?> is answering...';" class="button "><?php echo $s3; ?></a><br><br><br>

<a href="#" onclick="team='g4';y='no'; document.getElementById('timer').style.display='none';  document.getElementById('teams').innerHTML = '<?php echo $s4; ?> is answering...';" class="button "><?php echo $s4; ?></a><br><br><br>

<a href="#" onclick="team='g5';y='no'; document.getElementById('timer').style.display='none';  document.getElementById('teams').innerHTML = '<?php echo $s5; ?> is answering...';" class="button "><?php echo $s5; ?></a><br><br><br>

<a href="#" onclick="team='g6';y='no'; document.getElementById('timer').style.display='none';  document.getElementById('teams').innerHTML = '<?php echo $s6; ?> is answering...';" class="button "><?php echo $s6; ?></a>
			<?php } ?>	</div>
	</body>
</html>