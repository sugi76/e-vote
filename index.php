<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Vote</title>
	<meta name="description" content="E-Voting using cardio template - Only for our member" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>

	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
<!-- bagian luhur -->
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="resultpage.php">Results</a></li>
					<li><a href="#candidates">Votes</a></li>
					
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
<!-- bagian animated text di tengah -->
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">SMP-SMA Kristen Kanaan Cianjur</h3>
							<h1 class="white typed">E-Vote Pengurus OSIS</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="cut cut-top"></div>
		
	</section>
	<section>
		<div class="cut cut-bottom"></div>
	</section>
	<section>
		<div class="container">
		</div>
	</section>
	

	<section id="candidates" class="section gray-bg">	
		<div class="container">
			<div class="row title text-center">
				<h3 class="margin-top">Candidates</h3>
				<h6 class="light muted">Choose the best from the best!</h6>
			</div>
			

			<div class="row"> <!-- sugi -->
				<?php
				include ('konek.php') ;
				$kueri = "SELECT * FROM candidates" ;
				$result = $conn->query($kueri);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_row()){
						echo '<div class="col-md-6">';
							echo '<div class="team text-center">';
								echo '<div class="cover" style="background:url(\'img/team/team-cover1.png\'); background-size:cover;">';
									echo '<div class="overlay text-center">';
										echo '<h3 class="white">Vote untuk Pengurus OSIS</h3>';
									echo '</div>';
								echo '</div>';
								echo '<img src="' . $row[3] . '" alt="Team Image" class="avatar" height="200px">';
								echo '<div class="title">';
									echo "<h4>" . $row[1] . "</h4><br>";
									
								echo '</div>';
								echo '<a href="#" data-toggle="modal" data-target="#modal" class="btn btn-blue-fill ripple">Vote Now</a>';
							echo '</div>';
						echo '</div>';
					}
				}
				mysqli_close($conn); ?>
			</div>			
		</div>
	</section>
	

	<form action="voter.php" method="post" class="popup-form"> <!-- sugi -->
	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	
		<div class="modal-dialog">
			<div class="modal-content modal-popup">				
				<h3 class="white">Voting Form</h3>				
					<input type="text" class="form-control form-white" placeholder="NAMA" name="namavoter">					
					<input type="text" class="form-control form-white" placeholder="Kelas" name="kelasvoter">
					<select name="pilihansaya" class="form-control form-white">
						<?php
						include ('konek.php');
						$kueri = "SELECT * FROM candidates" ;
						$result = $conn->query($kueri);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()){
								echo '<option value="' . $row['id'] . '" style="color: blue;">' . $row['nama'] . '</option>';
							}
						}
						mysqli_close($conn); ?>
					</select>

					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="hidden" value="0" name="check" />
							<input type="checkbox" value="1" id="squaredOne" name="check" />
							<label for="squaredOne"><span><strong>Saya memilih atas kesadaran sendiri dan tanpa paksaan</strong></span></label>
						</div>
					</div>
					
					<button type="submit" class="btn btn-submit">VOTE</button>				
			</div>
		</div>
	</div> 
	</form>
	<!--
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Opening Hours <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Mon - Fri</h5>
							<h3 class="regular white">9:00 - 22:00</h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="light-white light">Sat - Sun</h5>
							<h3 class="regular white">10:00 - 18:00</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer> -->
	
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
