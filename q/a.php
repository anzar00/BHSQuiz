<?php

$g=$_GET['g'];
$servername = "localhost";
$username = "root";
$password1 = "";


$conn = new mysqli($servername, $username,$password1,'quiz');
$sqlq="SELECT * FROM q WHERE g='$g'";
$query_runq = mysqli_query($conn,$sqlq);


	
$rowq = mysqli_fetch_assoc($query_runq);

if($_GET['a']=='yess') {

$score=$rowq['score']+2;
}



$sql4 = "UPDATE q SET score='$score' WHERE g='$g'";
						$query_run = mysqli_query($conn,$sql4);
?>
