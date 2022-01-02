<?php
$servername = "localhost";
$username = "root";
$password1 = "";

$conn = new mysqli($servername, $username,$password1,'quiz');


$sql1="SELECT * FROM q WHERE g='g1'";
$q1 = mysqli_query($conn,$sql1);
	
$row1 = mysqli_fetch_assoc($q1);



$sql2="SELECT * FROM q WHERE g='g2'";
$q2 = mysqli_query($conn,$sql2);
	
$row2 = mysqli_fetch_assoc($q2);


$sql3="SELECT * FROM q WHERE g='g3'";
$q3 = mysqli_query($conn,$sql3);
	
$row3 = mysqli_fetch_assoc($q3);

$sql4="SELECT * FROM q WHERE g='g4'";
$q4 = mysqli_query($conn,$sql4);
	
$row4 = mysqli_fetch_assoc($q4);


$sql5="SELECT * FROM q WHERE g='g5'";
$q5 = mysqli_query($conn,$sql5);
	
$row5 = mysqli_fetch_assoc($q5);

$sql6="SELECT * FROM q WHERE g='g6'";
$q6 = mysqli_query($conn,$sql6);
	
$row6 = mysqli_fetch_assoc($q6);

$sql7="SELECT * FROM q WHERE g='g7'";
$q7 = mysqli_query($conn,$sql7);
	
$row7 = mysqli_fetch_assoc($q7);



$sql8="SELECT * FROM q WHERE g='g8'";
$q8 = mysqli_query($conn,$sql8);
	
$row8 = mysqli_fetch_assoc($q8);


$sql9="SELECT * FROM q WHERE g='g9'";
$q9 = mysqli_query($conn,$sql9);
	
$row9 = mysqli_fetch_assoc($q9);

$sql10="SELECT * FROM q WHERE g='g10'";
$q10 = mysqli_query($conn,$sql10);
	
$row10 = mysqli_fetch_assoc($q10);


$sql11="SELECT * FROM q WHERE g='g11'";
$q11 = mysqli_query($conn,$sql11);
	
$row11 = mysqli_fetch_assoc($q11);

$sql12="SELECT * FROM q WHERE g='g12'";
$q12 = mysqli_query($conn,$sql12);
	
$row12 = mysqli_fetch_assoc($q12);


$sql13="SELECT * FROM q WHERE g='g13'";
$q13 = mysqli_query($conn,$sql13);
	
$row13 = mysqli_fetch_assoc($q13);

$sql14="SELECT * FROM q WHERE g='g14'";
$q14 = mysqli_query($conn,$sql14);
	
$row14 = mysqli_fetch_assoc($q14);


$sql15="SELECT * FROM q WHERE g='g15'";
$q15 = mysqli_query($conn,$sql15);
	
$row15 = mysqli_fetch_assoc($q15);







?>


<html>
<head>
  <title>Scores</title>
</head><body>
  <script>
     setInterval(function(){ 
    
location.reload();

    
      
    
    
    }, 5000);
    </script>
<script src="Chart.min.js"></script>
<canvas id="bar-chart-horizontal" width="800" height="400"></canvas>

<script>


new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["G1", "G2", "G3", "G4", "G5","G6", "G7", "G8", "G9", "G10","G11","G12","G13","G14","G15",],
      datasets: [
        {
          label: "Live Scores",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#e8c3b9","#c45850","#3e95cd","#3cba9f","#e8c3b9",],
          data: [<?php echo $row1['score']; ?>,<?php echo $row2['score']; ?>,<?php echo $row3['score']; ?>,<?php echo $row4['score']; ?>,<?php echo $row5['score']; ?>,<?php echo $row6['score']; ?>,<?php echo $row7['score']; ?>,<?php echo $row8['score']; ?>,<?php echo $row9['score']; ?>,<?php echo $row10['score']; ?>,<?php echo $row11['score']; ?>,<?php echo $row12['score']; ?>,<?php echo $row13['score']; ?>,<?php echo $row14['score']; ?>,<?php echo $row12['score']; ?>]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Live Score'
      }
    }
});


</script>




<center><a href='http://localhost/main/server/rules/FP/r1.html'><button>Next </button></a></center>





</body></html>