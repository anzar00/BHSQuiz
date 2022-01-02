<?php

$g=$_GET['g'];
$servername = "localhost";
$username = "root";
$password1 = "";


$conn = new mysqli($servername, $username,$password1,'quiz');
$sqlq="SELECT * FROM scores WHERE g='$g'";
$query_runq = mysqli_query($conn,$sqlq);


	
$rowq = mysqli_fetch_assoc($query_runq);

if($_GET['a']=='yess') {

$score=$rowq['r3']+5;
}

if ($_GET['a']=='no') {
	
$score=$rowq['r3']-2;
}


$sql4 = "UPDATE scores SET r3='$score' WHERE g='$g'";
						$query_run = mysqli_query($conn,$sql4);
?>
