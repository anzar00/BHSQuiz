<?php

$servername = "localhost";
$username = "root";
$password1 = "";

$conn = new mysqli($servername, $username,$password1,'quiz');


$sql1="SELECT * FROM scores WHERE g='g1'";
$q1 = mysqli_query($conn,$sql1);
	
$row1 = mysqli_fetch_assoc($q1);



$sql2="SELECT * FROM scores WHERE g='g2'";
$q2 = mysqli_query($conn,$sql2);
	
$row2 = mysqli_fetch_assoc($q2);


$sql3="SELECT * FROM scores WHERE g='g3'";
$q3 = mysqli_query($conn,$sql3);
	
$row3 = mysqli_fetch_assoc($q3);

$sql4="SELECT * FROM scores WHERE g='g4'";
$q4 = mysqli_query($conn,$sql4);
	
$row4 = mysqli_fetch_assoc($q4);


$sql5="SELECT * FROM scores WHERE g='g5'";
$q5 = mysqli_query($conn,$sql5);
	
$row5 = mysqli_fetch_assoc($q5);

$sql6="SELECT * FROM scores WHERE g='g6'";
$q6 = mysqli_query($conn,$sql6);
	
$row6 = mysqli_fetch_assoc($q6);

$s1=$row1['s'];

$s2=$row2['s'];

$s3=$row3['s'];

$s4=$row4['s'];

$s5=$row5['s'];

$s6=$row6['s'];




 ?>