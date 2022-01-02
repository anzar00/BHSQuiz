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
		<title>Audio Round</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
		clearInterval(aaa);
		tpp=tpp+1;
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
	clearInterval(aaa);
	tpp=tpp+1;
	
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
                                                                        <center><button data-dismiss="modal" onclick="document.getElementById('correct').play();document.getElementById('n'+tpp).style.display = 'none'; return getCorrect(team);clearInterval(aaa);" type="button">correct</button><button data-dismiss="modal" onclick="document.getElementById('wrong').play();document.getElementById('n'+tpp).style.display = 'none';return getIncorrect(team); clearInterval(aaa);" type="button">incorrect</button></center>
                                                                      <br><br>
        <center>
  	<h1> Team Answering : </h1><br>
																															<br>	<input  data-dismiss="modal" value=" <?php echo $s1; ?>"  type="submit" class="special"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s1; ?> '; team='g1';">
																															<br><br>	<input value="<?php echo $s2; ?>"  type="submit" class="special"   data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s2; ?> '; team='g2';">
                                                                                                                                                                                                                                <br><br><input value="<?php echo $s3; ?>"  type="submit" class="special"   data-dismiss="modal"  onclick="document.getElementById('t'+tpp).innerHTML='Question For <?php echo $s3; ?>'; team='g3';"><br><br>
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
                            <button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br>
                            <h3>Time left :<div id="tt1">30</div></h3><button type="button" onclick="startt(1)">Start timer</button><button type="button" onclick="stopt()">Stop timer</button><br>
 <audio controls>
  <source src="a1.mp4" type="audio/mp3">
  <source src="a.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br>


						</div>
                     
 
 
 

						
					</section>	</div>
<div id="n2">
					
					<section class="banner style1 orient-right content-align-right image-position-left fullscreen onload-image-fade-in onload-content-fade-left">
						<div class="content">
                            <h1>Q2</h1>
							<h2><div id="t2"></div></h2>
						
							<button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br><h3>Time left :<div id="tt2">30</div></h3><button type="button" onclick="startt(2)">Start timer</button><button type="button" onclick="stopt()">Stop timer</button><br>


 <audio controls>
  <source src="a2.mp4" type="audio/mp3">
  <source src="a.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br><br>
							
						</div>
						
					</section>
						</div>
					
					<div id="n3">
					
									<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
                            <h1>Q3</h1>
						<h2><div id="t3"></div></h2>
							<button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br><h3>Time left :<div id="tt3">30</div></h3><button type="button" onclick="startt(3)">Start timer</button><button type="button" onclick="stopt()">Stop timer</button><br>


 <audio controls>
  <source src="a3.mp4" type="audio/mp3">
  <source src="a.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br><br>
							

						</div>
					
					</section>	</div><div id="n4">
					<section class="banner style1 orient-right content-align-right image-position-left fullscreen onload-image-fade-in onload-content-fade-left">
						<div class="content">
						<h1>Q4</h1>	
					<h2><div id="t4"></div></h2>
							<button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br><h3>Time left :<div id="tt4">30</div></h3><button type="button" onclick="startt(4)">Start timer</button><button type="button" onclick="stopt()">Stop timer</button><br>


 <audio controls>
  <source src="a4.mp4" type="audio/mp3">
  <source src="a.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br><br>
							
						</div>
						
					</section>	</div><div id="n5">
									<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
                            <h1>Q5</h1>
						<h2><div id="t5"></div></h2>
					<button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br><h3>Time left :<div id="tt5">30</div></h3><button type="button" onclick="startt(5)">Start timer</button><button type="button" onclick="stopt()">Stop timer</button><br>


 <audio controls>
  <source src="a5.mp4" type="audio/mp3">
  <source src="a.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br><br>
							

						</div>
					
					</section></div>
					
					
					<div id="n6">
									<section class="banner style1 orient-right content-align-right image-position-left fullscreen onload-image-fade-in onload-content-fade-left">
						<div class="content">
                            <h1>Q6</h1>
						<h2><div id="t6"></div></h2>
						<button type="button" data-toggle="modal" data-target="#p1">Menu</button><br><br><h3>Time left :<div id="tt6">30</div></h3><button type="button" onclick="startt(6)">Start timer</button><button type="button" onclick="stopt()">Stop timer</button><br>


 <audio controls>
  <source src="a6.mp4" type="audio/mp3">
  <source src="a.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br><br>
							

						</div>
					
					</section></div>
					
					
					</div>
					<br><br><br><br><br><br><br><br><br><center>
					<a href='http://localhost/main/server/r3/r3_v.php'>	<button>Video Segment</button></a></center>
						
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>