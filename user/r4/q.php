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
<script>
var o;
var idd;
var idd="<?php echo $id; ?>";
				idd++;
var team="<?php echo $_GET['g']; ?>";
function Check(o) {
			var idd="<?php echo $id; ?>";
				idd++;
			if(o==<?php echo $rowq['answer']; ?>) {
				
				getCorrect()
				
				window.location.href="q.php?g=<?php echo $_GET['g']; ?>&id="+idd;
			}
			else {
				getInCorrect();
				window.location.href="q.php?g=<?php echo $_GET['g']; ?>&id="+idd;
				
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
<body style="background-color: black;">
<?php if($id=="31") { echo"<h1 style='font-family: 'Arial';font-weight: 10px; font-size: 25px;''><br><br><br><br>You have completed The Rapid Fire Round<br> Congratulations....</h1>"; } else { ?>
<div align="center" class="inner">
<h1>Question No <?php echo $id; ?></h1><br>
<p style="font-family: 'Arial';font-weight: 10px; font-size: 25px;"><?php echo $rowq['question']; ?> </p><br><br>
    
<button type="button" onclick="Check('1');" class="special" ><?php echo $rowq['m1']; ?></button>  
<button type="button" onclick="Check('2');" class="special" ><?php echo $rowq['m2']; ?></button><br><br>
<button type="button" onclick="Check('3');" class="special" ><?php echo $rowq['m3']; ?></button>
<button type="button" onclick="Check('4');" class="special" ><?php echo $rowq['m4']; ?></button><br><br>
<a href="q.php?id=<?php echo $id+1; ?>&g=<?php echo $_GET['g']; ?>"><input type="button"  value="Skip" ></a>
</div><?php } ?>
</body>
</html>