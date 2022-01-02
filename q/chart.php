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
	
<html><head>
<script>
     setInterval(function(){ 
		
location.reload();

		
			
		
		
		}, 5000);
    </script>
<style>
body {
  margin: 0;
  overflow: hidden;
  background: black;
  font-family: Courier, monospace;
  font-size: 14px;
  color:#ccc; 
}

.wrapper {
  display: block;
  margin: 5em auto;
  border: 1px solid #555;
  width: 1000;
  height: 450px;
  position: relative;
}
p{text-align:center;}
.label {
  height: 1em;
  padding: .3em;
  background: rgba(255, 255, 255, .8);
  position: absolute;
  display: none;
  color:#333;
  
}
</style>
</head><body>


<div class="wrapper">
  <canvas id='c'></canvas>
  <div class="label">text</div>
</div>

<center>
<a href="http://localhost/quiz/rules/FP/r1.html">
<button>End</button></a>
</center>






<script>
var label = document.querySelector(".label");
var c = document.getElementById("c");
var ctx = c.getContext("2d");
var cw = c.width = 1000;
var ch = c.height = 450;
var cx = cw / 2,
  cy = ch / 2;
var rad = Math.PI / 180;
var frames = 0;

ctx.lineWidth = 1;
ctx.strokeStyle = "#999";
ctx.fillStyle = "#ccc";
ctx.font = "20px monospace";

var grd = ctx.createLinearGradient(0, 0, 0, cy);
grd.addColorStop(0, "hsla(167,72%,60%,1)");
grd.addColorStop(1, "hsla(167,72%,60%,0)");

var oData = {
  "G1": <?php echo $row1['score']; ?>,
  "G2": <?php echo $row2['score']; ?>,
  "G3": <?php echo $row3['score']; ?>,
  "G4": <?php echo $row4['score']; ?>,
  "G5": <?php echo $row5['score']; ?>,
  "G6": <?php echo $row6['score']; ?>,
  "G7": <?php echo $row7['score']; ?>,
  "G8": <?php echo $row8['score']; ?>,
  "G9": <?php echo $row9['score']; ?>,
  "G10": <?php echo $row10['score']; ?>,
  "G11": <?php echo $row11['score']; ?>,
  "G12": <?php echo $row12['score']; ?>,
  "G13": <?php echo $row13['score']; ?>,
  "G14": <?php echo $row14['score']; ?>,
  "G15": <?php echo $row15['score']; ?>
};

var valuesRy = [];
var propsRy = [];
for (var prop in oData) {

  valuesRy.push(oData[prop]);
  propsRy.push(prop);
}


var vData = 4;
var hData = valuesRy.length;
var offset = 50.5; //offset chart axis
var chartHeight = ch - 2 * offset;
var chartWidth = cw - 2 * offset;
var t = 1 / 7; // curvature : 0 = no curvature 
var speed = 2; // for the animation

var A = {
  x: offset,
  y: offset
}
var B = {
  x: offset,
  y: offset + chartHeight
}
var C = {
  x: offset + chartWidth,
  y: offset + chartHeight
}

/*
      A  ^
	    |  |  
	    + 25
	    |
	    |
	    |
	    + 25  
      |__|_________________________________  C
      B
*/

// CHART AXIS -------------------------
ctx.beginPath();
ctx.moveTo(A.x, A.y);
ctx.lineTo(B.x, B.y);
ctx.lineTo(C.x, C.y);
ctx.stroke();

// vertical ( A - B )
var aStep = (chartHeight - 50) / (vData);

var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
var aStepValue = (Max - Min) / (vData);
console.log("aStepValue: " + aStepValue); //8 units
var verticalUnit = aStep / aStepValue;

var a = [];
ctx.textAlign = "right";
ctx.textBaseline = "middle";
for (var i = 0; i <= vData; i++) {

  if (i == 0) {
    a[i] = {
      x: A.x,
      y: A.y + 25,
      val: Max
    }
  } else {
    a[i] = {}
    a[i].x = a[i - 1].x;
    a[i].y = a[i - 1].y + aStep;
    a[i].val = a[i - 1].val - aStepValue;
  }
  drawCoords(a[i], 3, 0);
}

//horizontal ( B - C )
var b = [];
ctx.textAlign = "center";
ctx.textBaseline = "hanging";
var bStep = chartWidth / (hData + 1);

for (var i = 0; i < hData; i++) {
  if (i == 0) {
    b[i] = {
      x: B.x + bStep,
      y: B.y,
      val: propsRy[0]
    };
  } else {
    b[i] = {}
    b[i].x = b[i - 1].x + bStep;
    b[i].y = b[i - 1].y;
    b[i].val = propsRy[i]
  }
  drawCoords(b[i], 0, 3)
}

function drawCoords(o, offX, offY) {
  ctx.beginPath();
  ctx.moveTo(o.x - offX, o.y - offY);
  ctx.lineTo(o.x + offX, o.y + offY);
  ctx.stroke();

  ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
}
//----------------------------------------------------------

// DATA
var oDots = [];
var oFlat = [];
var i = 0;

for (var prop in oData) {
  oDots[i] = {}
  oFlat[i] = {}

  oDots[i].x = b[i].x;
  oFlat[i].x = b[i].x;

  oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
  oFlat[i].y = b[i].y - 25;

  oDots[i].val = oData[b[i].val];
  
  i++
}



///// Animation Chart ///////////////////////////
//var speed = 3;
function animateChart() {
  requestId = window.requestAnimationFrame(animateChart);
  frames += speed; //console.log(frames)
  ctx.clearRect(60, 0, cw, ch - 60);
  
  for (var i = 0; i < oFlat.length; i++) {
    if (oFlat[i].y > oDots[i].y) {
      oFlat[i].y -= speed;
    }
  }
  drawCurve(oFlat);
  for (var i = 0; i < oFlat.length; i++) {
      ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
      ctx.beginPath();
      ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
      ctx.fill();
    }

  if (frames >= Max * verticalUnit) {
    window.cancelAnimationFrame(requestId);
    
  }
}
requestId = window.requestAnimationFrame(animateChart);

/////// EVENTS //////////////////////
c.addEventListener("mousemove", function(e) {
  label.innerHTML = "";
  label.style.display = "none";
  this.style.cursor = "default";

  var m = oMousePos(this, e);
  for (var i = 0; i < oDots.length; i++) {

    output(m, i);
  }

}, false);

function output(m, i) {
  ctx.beginPath();
  ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
  if (ctx.isPointInPath(m.x, m.y)) {
    //console.log(i);
    label.style.display = "block";
    label.style.top = (m.y + 10) + "px";
    label.style.left = (m.x + 10) + "px";
    label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + " Points ";
    c.style.cursor = "pointer";
  }
}

// CURVATURE
function controlPoints(p) {
  // given the points array p calculate the control points
  var pc = [];
  for (var i = 1; i < p.length - 1; i++) {
    var dx = p[i - 1].x - p[i + 1].x; // difference x
    var dy = p[i - 1].y - p[i + 1].y; // difference y
    // the first control point
    var x1 = p[i].x - dx * t;
    var y1 = p[i].y - dy * t;
    var o1 = {
      x: x1,
      y: y1
    };

    // the second control point
    var x2 = p[i].x + dx * t;
    var y2 = p[i].y + dy * t;
    var o2 = {
      x: x2,
      y: y2
    };

    // building the control points array
    pc[i] = [];
    pc[i].push(o1);
    pc[i].push(o2);
  }
  return pc;
}

function drawCurve(p) {

  var pc = controlPoints(p); // the control points array

  ctx.beginPath();
  //ctx.moveTo(p[0].x, B.y- 25);
  ctx.lineTo(p[0].x, p[0].y);
  // the first & the last curve are quadratic Bezier
  // because I'm using push(), pc[i][1] comes before pc[i][0]
  ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

  if (p.length > 2) {
    // central curves are cubic Bezier
    for (var i = 1; i < p.length - 2; i++) {
      ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
    }
    // the first & the last curve are quadratic Bezier
    var n = p.length - 1;
    ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
  }

  //ctx.lineTo(p[p.length-1].x, B.y- 25);
  ctx.stroke();
  ctx.save();
  ctx.fillStyle = grd;
  ctx.fill();
  ctx.restore();
}

function arrayMax(array) {
  return Math.max.apply(Math, array);
};

function arrayMin(array) {
  return Math.min.apply(Math, array);
};

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  }
}
</script>
</body>
</html>