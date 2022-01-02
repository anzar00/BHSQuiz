<?php


$id=$_GET['id'];

$conn = new mysqli('localhost', 'root','','quiz');
$sqlq="SELECT * FROM r4 WHERE id='$id'";
$query_runq = mysqli_query($conn,$sqlq);


	
$rowq = mysqli_fetch_assoc($query_runq);



?>


<html>
<head>
<link rel="stylesheet" href="assets/css/main.css" />
		<script src="jquery.min.js"></script>








</head>
<body style="background-color: black;">
<?php if($id=="31") { echo"<h1><br><br><br><br>All 30 questions are done !</h1>"; } else { ?>
<div align="center" class="inner">
<h1>Question No <?php echo $id; ?></h1><br>
<h2>Demo Question  </h2><br><br><ul class="actions">
<li><button type="button" onclick="Check('1');" class="special" >MCQ1</button>
<li><button type="button" onclick="Check('2');" class="special" >MCQ2</button></ul><ul class="actions">
<li><button type="button" onclick="Check('3');" class="special" >MCq3</button>
<li><button type="button" onclick="Check('4');" class="special" >MCQ4</button></ul><br>
<a href="q.php?id=<?php echo $id+1; ?>&g=<?php echo $_GET['g']; ?>"><input type="button"  value="Skip" ></a>
</div><?php } ?>
</body>
</html>