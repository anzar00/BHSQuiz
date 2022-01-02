<?php


require 'd.php';
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
<html>
	<head>
	
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

		<title>Video Round</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style type="text/css">
			
		#ques{
		color: white;
		
	}
	#ques:hover{
		color: black;
	}


		</style>
	</head>
	<body>
	<script>
var n,aaa,tn,tpp;
 tpp=1;
	
	function startt(n) {
			
			 aaa=setInterval(function() { tn=document.getElementById('tt'+n).innerHTML; tn=tn-1; document.getElementById('tt'+n).innerHTML=tn; if(tn=="0") {document.getElementById('wrong').play(); document.getElementById('n'+tpp).style.display = 'none'; stopt(); } },1000) ;
			aaa;
		
		
	}
	function stopt() {
			clearInterval(aaa);	
	}
        
              
        
    function getCorrect(g) {
		tpp=tpp+1;
		clearInterval(aaa);	
   $.ajax({
      url:'a.php?a=yess&g='+g,
      complete: function (response) {
          $('#output').html(response.responseText);
      },
      error: function () {
          $('#output').html('Bummer: there was an error!');
      }
  });
  return false;
}
function getIncorrect(g) {
	tpp=tpp+1;
	clearInterval(aaa);	
   $.ajax({
      url:'a.php?a=no&g='+g,
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

<audio src="correct.wav" id="correct"></audio>
<audio src="wrong.wav" id="wrong"></audio>

                                                             

                  <div class="modal fade" id="p1" role="dialog">
                       <div class="modal-dialog">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                      <div class="modal-header">
                             			   <button type="button" align="right" data-dismiss="modal">   &times;    </button>
                                      <h4 class="modal-title"></h4>
                                       </div>
                               	  <div class="modal-body">
                 
                 <center>
           
           <button data-dismiss="modal" onclick="document.getElementById('correct').play();document.getElementById('n'+tpp).style.display = 'none'; return getCorrect(team);stopt();" type="button">correct</button>

           <button data-dismiss="modal" onclick="document.getElementById('wrong').play();document.getElementById('n'+tpp).style.display = 'none';return getIncorrect(team);stopt();" type="button">incorect</button>
       </center>
        
                                                                      <br><br>
        <center>
  	<h1> Team Answering : </h1><br>
	
	<br>	
	<input  data-dismiss="modal" value=" <?php echo $s1; ?>"  type="submit" class="special"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s1; ?> '; team='g1';">
						<br><br>	
	<input value="<?php echo $s2; ?>"  type="submit" class="special"   data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s2; ?> '; team='g2';"><br><br>
	<input value="<?php echo $s3; ?>"  type="submit" class="special"   data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s3; ?> '; team='g3';"><br><br>
	<input value="<?php echo $s4; ?>"  type="submit" class="special"   data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s4; ?>'; team='g4';"><br><br>
	<input value="<?php echo $s5; ?>"  type="submit" class="special"   data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s5; ?> '; team='g5';"><br><br>
	<input value="<?php echo $s6; ?>"  type="submit" class="special" data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s6; ?>'; team='g6';"><br><br>
       </center>
																											      
        
      </div>
                      
                 <div class="modal-footer">
              
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          
                    </div>
       </div>
       </div>
      </div>

 <!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One --><div id="n1">
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
							
							
							<div class="content">
						<h1>Q1</h1>
						<h2><div id="t1"></div></h2>
						<h2 id="ques">How many times were the words '70 minute' repeated?</h2>
						
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
							<br><h3>Time left :<div id="tt1">30</div></h3><button type="button" onclick="startt(1)">start timer</button><button type="button" onclick="stopt()">stop timer</button><br>


						</div>
						
						
						<div class="image">

 <video width="650" height="650" controls>
  <source src="v1.mp4" type="video/mp4">
  <source src="a.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
 
 
 
 
 

						</div>
					</section>	</div>
</div><div id="n2">
					
					<section class="banner style1 orient-right content-align-right image-position-left fullscreen onload-image-fade-in onload-content-fade-left">
							
							<div class="content">
						<h1>Q2</h1>
						<h2><div id="t2"></div></h2>
						<h2 id="ques">What was the number of statues placed on the shelves in the room?</h2>
						
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
							<br><h3>Time left :<div id="tt2">30</div></h3><button type="button" onclick="startt(2)">start timer</button><button type="button" onclick="stopt()">stop timer</button><br>


						</div>

						
						<div class="image">
					 <video width="650" height="650" controls>
  <source src="v2.mp4" type="video/mp4">
  <source src="a.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
						</div>
					</section>
						</div>
					
					<div id="n3">
					
									<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
						<h1>Q3</h1>
						<h2><div id="t3"></div></h2>
						<h2 id="ques">The entrance of which official building was visible in the video?</h2>
						
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
							<br><h3>Time left :<div id="tt3">30</div></h3><button type="button" onclick="startt(3)">start timer</button><button type="button" onclick="stopt()">stop timer</button><br>


						</div>

						<div class="image">			 <video width="650" height="650" controls>
  <source src="v3.mp4" type="video/mp4">
  <source src="a.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
						</div>
					</section>	</div><div id="n4">
					<section class="banner style1 orient-right content-align-right image-position-left fullscreen onload-image-fade-in onload-content-fade-left">
						<div class="content">
						<h1>Q4</h1>
						<h2><div id="t4"></div></h2>
						<h2 id="ques">Which company's car was 'Chitti' driving?</h2>
						
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
							<br><h3>Time left :<div id="tt4">30</div></h3><button type="button" onclick="startt(4)">start timer</button><button type="button" onclick="stopt()">stop timer</button><br>


						</div>

						<div class="image">
									 <video width="650" height="650" controls>
  <source src="v4.mp4" type="video/mp4">
  <source src="a.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
						</div>
					</section>	</div><div id="n5">
									<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
						<h1>Q5</h1>
						<h2><div id="t5"></div></h2>
						<h2 id="ques">What is the sum of the prioner's uniform number?</h2>
						
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
							<br><h3>Time left :<div id="tt5">30</div></h3><button type="button" onclick="startt(5)">start timer</button><button type="button" onclick="stopt()">stop timer</button><br>


						</div>

						<div class="image">
									 <video width="650" height="650" controls>
  <source src="v5.mp4" type="video/mp4">
  <source src="a.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
						</div>
					</section>	</div><div id="n6">
					<section class="banner style1 orient-right content-align-right image-position-left fullscreen onload-image-fade-in onload-content-fade-left">
						<div class="content">
						<h1>Q6</h1>
						<h2><div id="t6"></div></h2>
						<h2 id="ques">What negative words were used in the clip?</h2>
						
						
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
							<br><h3>Time left :<div id="tt6">30</div></h3><button type="button" onclick="startt(6)">start timer</button><button type="button" onclick="stopt()">stop timer</button><br>


						</div>

						<div class="image">
									 <video width="650" height="650" controls>
  <source src="v6.mp4" type="video/mp4">
  <source src="a.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
						</div>
					</section>	</div>
						
							<br><br><br><br><br><br><br><br><br><center>
					<a href='http://localhost/main/server/score.php?l=4'>	<button>Show Scores</button></a></center>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>