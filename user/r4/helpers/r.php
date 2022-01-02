

<html>
	<head>
		<title>Congratulations</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							 <div class="avatar"><img src="http://192.168.100.1/main/<?php echo $_GET['g']; ?>.jpg" style=" height: 225px; width: 225px; border-radius: 50%"></div>
							<h1>Congratulations <?php echo $_GET['s']; ?></h1>
							<p>You have just compeleted the rapid fire round !<br></p>
                             <ul class="actions">
								<li><a href="http://192.168.100.1/main/user/?g=<?php echo $_GET['g']; ?>" class="button">Go to Home</a></li>
							</ul>
						</header>
			
						
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>