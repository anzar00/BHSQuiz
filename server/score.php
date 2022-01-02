<?php

require 'd.php';
$servername = "localhost";
$username = "root";
$password1 = "";

$conn = new mysqli($servername, $username,$password1,'quiz');


$servername = "localhost";
$username = "root";
$password1 = "";

$conn = new mysqli($servername, $username,$password1,'quiz');


$sql1="SELECT * FROM scores WHERE g='g1'";
$q1 = mysqli_query($conn,$sql1);
	
$row1 = mysqli_fetch_assoc($q1);
$score1=$row1['r1']+$row1['r2']+$row1['r3']+$row1['r4']+$row1['r5']+$row1['r6'];



$sql2="SELECT * FROM scores WHERE g='g2'";
$q2 = mysqli_query($conn,$sql2);
	
$row2 = mysqli_fetch_assoc($q2);
$score2=$row2['r1']+$row2['r2']+$row2['r3']+$row2['r4']+$row2['r5']+$row2['r6'];




$sql3="SELECT * FROM scores WHERE g='g3'";
$q3 = mysqli_query($conn,$sql3);
	
$row3 = mysqli_fetch_assoc($q3);
$score3=$row3['r1']+$row3['r2']+$row3['r3']+$row3['r4']+$row3['r5']+$row3['r6'];



$sql4="SELECT * FROM scores WHERE g='g4'";
$q4 = mysqli_query($conn,$sql4);
	
$row4 = mysqli_fetch_assoc($q4);
$score4=$row4['r1']+$row4['r2']+$row4['r3']+$row4['r4']+$row4['r5']+$row4['r6'];




$sql5="SELECT * FROM scores WHERE g='g5'";
$q5 = mysqli_query($conn,$sql5);
	
$row5 = mysqli_fetch_assoc($q5);
$score5=$row5['r1']+$row5['r2']+$row5['r3']+$row5['r4']+$row5['r5']+$row5['r6'];


$sql6="SELECT * FROM scores WHERE g='g6'";
$q6 = mysqli_query($conn,$sql6);
	
$row6 = mysqli_fetch_assoc($q6);
$score6=$row6['r1']+$row6['r2']+$row6['r3']+$row6['r4']+$row6['r5']+$row6['r6'];

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
      labels: ["<?php echo $s1; ?>", "<?php echo $s2; ?>", "<?php echo $s3; ?>", "<?php echo $s4; ?>", "<?php echo $s5; ?>","<?php echo $s6; ?>"],
      datasets: [
        {
          label: "Live Scores",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","black"],
          data: ["<?php echo $score1; ?>","<?php echo $score2; ?>","<?php echo $score3; ?>","<?php echo $score4; ?>","<?php echo $score5; ?>","<?php echo $score6; ?>"]
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




<?php if($_GET['l']=="1") {
		
		echo "<center><a href='http://localhost/main/server/rules/FP/r2.html'><button>Next </button></a></center>";
	}
	
	?>
	<?php if($_GET['l']=="2") {
		
		echo "<center><a href='http://localhost/main/server/rules/FP/r3.html'><button>Next </button></a></center>";
	}
	?>
	<?php if($_GET['l']=="3") {
		
		echo "<center><a href='http://localhost/main/server/rules/r4.html'><button>Next </button></a></center>";
	}
	?>
	<?php if($_GET['l']=="4") {
		
		echo "<center><a href='http://localhost/main/server/rules/FP/r4.html'><button>Next</button></a></center>";
	}
	?>
		<?php if($_GET['l']=="5") {
		
		echo "<center><a href='http://localhost/main/server/rules/r5.html'><button>Next</button></a></center>";
	}

	?>
<?php if($_GET['l']=="7") {
		
		echo "<center><a href='http://localhost/main/server/rules/FP/r5.html'><button>Next</button></a></center>";
	}

	?>
<?php if($_GET['l']=="8") {
		
		echo "Live";
	}

	?>





</body></html>