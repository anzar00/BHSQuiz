<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<style type="text/css">
			

input,
span,
label,
textarea {
  font-family: 'Ubuntu', sans-serif;
  display: block;
  margin: 10px;
  padding: 5px;
  border: none;
  font-size: 22px;
}

textarea:focus,
input:focus {
  outline: 0;
}
/* Question */

input.question,
textarea.question {
  font-size: 48px;
  font-weight: 300;
  border-radius: 2px;
  margin: 0;
  border: none;
  width: 80%;
  background: rgba(0, 0, 0, 0);
  transition: padding-top 0.2s ease, margin-top 0.2s ease;
  overflow-x: hidden; /* Hack to make "rows" attribute apply in Firefox. */
}
/* Underline and Placeholder */

input.question + label,
textarea.question + label {
  display: block;
  position: relative;
  white-space: nowrap;
  padding: 0;
  margin: 0;
  width: 10%;
  border-top: 1px solid red;
  -webkit-transition: width 0.4s ease;
  transition: width 0.4s ease;
  height: 0px;
}

input.question:focus + label,
textarea.question:focus + label {
  width: 80%;
}

input.question:focus,
input.question:valid {
  padding-top: 35px;
}

textarea.question:valid,
textarea.question:focus {
  margin-top: 35px;
}

input.question:focus + label > span,
input.question:valid + label > span {
  top: -100px;
  font-size: 22px;
  color: #333;
}

textarea.question:focus + label > span,
textarea.question:valid + label > span {
  top: -150px;
  font-size: 22px;
  color: #333;
}

input.question:valid + label,
textarea.question:valid + label {
  border-color: green;
}

input.question:invalid,
textarea.question:invalid {
  box-shadow: none;
}

input.question + label > span,
textarea.question + label > span {
  font-weight: 300;
  margin: 0;
  position: absolute;
  color: #8F8F8F;
  font-size: 48px;
  top: -66px;
  left: 0px;
  z-index: -1;
  -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
  transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
}

input[type="submit"] {
  -webkit-transition: opacity 0.2s ease, background 0.2s ease;
  transition: opacity 0.2s ease, background 0.2s ease;
  display: block;
  opacity: 0;
  margin: 10px 0 0 0;
  padding: 10px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background: #EEE;
}

input[type="submit"]:active {
  background: #999;
}

input.question:valid ~ input[type="submit"], textarea.question:valid ~ input[type="submit"] {
  -webkit-animation: appear 1s forwards;
  animation: appear 1s forwards;
}

input.question:invalid ~ input[type="submit"], textarea.question:invalid ~ input[type="submit"] {
  display: none;
}

@-webkit-keyframes appear {
  100% {
    opacity: 1;
  }
}

@keyframes appear {
  100% {
    opacity: 1;
  }
}


		</style>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

<audio src="correct.wav" id="correct"></audio>
<audio src="wrong.wav" id="wrong"></audio>
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Spell Bee</a></h1>
					
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">

							<h2>Welcome to the final round.</h2>
							<p>Here we will test your vocabulary.<br /></p>
							
						</div>
						<a href="#one" class="more scrolly">First Question</a>
					</section>














				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<div id="d1">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a1.mp3" type="audio/mp3">
  <source src="a1.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>noun</i><br><br> The word is used in the following sentence</h4><br><h3>_____ is a beautiful plant. </h3>

<input type="text" name="name" class="question" id="q1" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q1').value; if (a=='gladiolus') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
				
			}

			document.getElementById('d1').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is gladiolus </h1> <br><br><br><br><br><br> ';
			">Check</button></div> <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#2" class="more scrolly">Second Question</button>
					</section>
	









<section id="2" class="wrapper style1 special">
						<div class="inner">
							<div id="d2">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a2.mp3" type="audio/mp3">
  <source src="a2.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>adjective</i><br><br> The word is used in the following sentence</h4><br><h3>the city fathers were _____ with their honours</h3>

<input type="text" name="name" class="question" id="q2" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q2').value; if (a=='promiscuous') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d2').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is promiscuous</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#3" class="more scrolly">Third Question</button>
					</section>

					<section id="3" class="wrapper style1 special">
						<div class="inner">
							<div id="d3">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a3.mp3" type="audio/mp3">
  <source src="a3.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>adjective</i><br><br> The word is used in the following sentence</h4><br><h3>She did not squint not as the sun crept through the Venetian blinds and seemed to ignite her already-luminous _____ eyes.</h3>

<input type="text" name="name" class="question" id="q3" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q3').value; if (a=='smaragdine') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d3').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is smaragdine </h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#4" class="more scrolly">Fourth Question</button>
					</section>

					<section id="4" class="wrapper style1 special">
						<div class="inner">
							<div id="d4">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a4.mp3" type="audio/mp3">
  <source src="a4.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br>

<h4><i>noun</i><br><br> The word is used in the following sentence</h4><br><h3>gigantic bones of _____ animals</h3>

<input type="text" name="name" class="question" id="q4" required autocomplete="off" spellcheck="false" /><br>
			<button onclick="
			a=document.getElementById('q4').value; if (a=='antediluvian') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d4').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is antediluvian  </h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#5" class="more scrolly">Fifth Question</button>
					</section>

					<section id="5" class="wrapper style1 special">
						<div class="inner">
							<div id="d5">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a5.mp3" type="audio/mp3">
  <source src="a5.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>adjective</i><br><br> The word is used in the following sentence</h4><br><h3>Generally, the first specimen differs from the others morphologically in having usually _____ podetia with broader scyphi.</h3>

<input type="text" name="name" class="question" id="q5" required autocomplete="off" spellcheck="false" /><br>
			<button onclick="
			a=document.getElementById('q5').value; if (a=='esquamulose') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d5').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is esquamulose  </h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#6" class="more scrolly">Sixth Question</button>
					</section>

					<section id="6" class="wrapper style1 special">
						<div class="inner">
							<div id="d6">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a6.mp3" type="audio/mp3">
  <source src="a6.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>noun</i><br><br> The word is used in the following sentence</h4><br><h3>Now, we know that "most-favored-nation status" is not the appropriate _____ to describe our relationship with China</h3>

<input type="text" name="name" class="question" id="q6" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q6').value; if (a=='euonym') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d6').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is euonym</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#7" class="more scrolly">Seventh Question</button>
					</section>


					<section id="7" class="wrapper style1 special">
						<div class="inner">
							<div id="d7">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a7.mp3" type="audio/mp3">
  <source src="a7.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>noun</i><br><br> The word is used in the following sentence</h4><br><h3>The early style of Italian engravers differs greatly from that of a modern _____.</h3>


<input type="text" name="name" class="question" id="q7" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q7').value; if (a=='chiaroscurist') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d7').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is chiaroscurist</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>



						</div><br>
							<button href="#8" class="more scrolly">Eighth Question</button>
					</section>

					<section id="8" class="wrapper style1 special">
						<div class="inner">
							<div id="d8">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a8.mp3" type="audio/mp3">
  <source src="a8.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>adjective</i><br><br> The word is used in the following sentence</h4><br><h3>Weathermen are not always on target when they try to _____ the weather</h3>

<input type="text" name="name" class="question" id="q8" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q8').value; if (a=='prospicience') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d8').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is prospicience</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>



						</div><br>
							<button href="#9" class="more scrolly">Ninth Question</button>
					</section>

					<section id="9" class="wrapper style1 special">
						<div class="inner">
							<div id="d9">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a9.mp3" type="audio/mp3">
  <source src="a9.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 
<h4><i>noun</i><br><br> Meaning :- </h4><br><h3> Ambush or Trap</h3>

<input type="text" name="name" class="question" id="q9" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q9').value; if (a=='guetapens') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d9').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is guetapens</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#10" class="more scrolly">Tenth Question</button>
					</section>

					<section id="10" class="wrapper style1 special">
						<div class="inner">
							<div id="d10">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a10.mp3" type="audio/mp3">
  <source src="a10.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 
<h4><i>adjective</i><br><br> The word is used in the following sentence</h4><br><h3> Probably the most common type, however, is _____, where a word is understood differently in relation to two or more other words which it modifies or governs.</h3>

<input type="text" name="name" class="question" id="q10" required autocomplete="off" spellcheck="false"/><br>
			<button onclick="
			a=document.getElementById('q10').value; if (a=='syllepsis') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d10').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is syllepsis</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#11" class="more scrolly">Eleventh Question</button>
					</section>

					<section id="11" class="wrapper style1 special">
						<div class="inner">
							<div id="d11">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a11.mp3" type="audio/mp3">
  <source src="a11.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 

<h4><i>adjective</i><br><br> The word is used in the following sentence</h4><br><h3> It was something _________, but definitely not a skeleton.</h3>

<input type="text" name="name" class="question" id="q11" required autocomplete="off" spellcheck="false" /><br>
			<button onclick="
			a=document.getElementById('q11').value; if (a=='grotesque') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d11').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is grotesque</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>




						</div><br>
							<button href="#12" class="more scrolly">Twelth Question</button>
					</section>

					<section id="12" class="wrapper style1 special">
						<div class="inner">
							<div id="d12">
							<header class="major">
								
								<h2>Your Word ...</h2>
								
							</header>
						<audio controls>
  <source src="a12.mp3" type="audio/mp3">
  <source src="a12.ogg" type="audio/ogg">
  Your browser does not support HTML5 video.
</audio><br><br> 
<h4><i>verb</i><br><br> The word is used in the following sentence</h4><br><h3> If the country continues to stockpile nuclear weapons, it will create fear that could ___________ and start a war</h3>

<input type="text" name="name" class="question" id="q12" required autocomplete="off" spellcheck="false" /><br>
			<button onclick="
			a=document.getElementById('q12').value; if (a=='reverberate') {
					document.getElementById('correct').play();

			} else {
				document.getElementById('wrong').play();
			}

			document.getElementById('d12').innerHTML='<br><br><br><br><br><br><h1>The Correct Spelling is reverberate</h1> <br><br><br><br><br><br> ';
			">Check</button></div>
			 <br>
			<button onclick="innerHTML='x2';">Double Trouble?</button>



						</div><br>
							<a href= "http://localhost/main/final/f/index.html"><button class="more scrolly">End</button></a>
					</section>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>