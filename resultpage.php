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
	<meta http-equiv="refresh" content="5"> 
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
				<!-- <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a> -->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="adminpage.php">Results</a></li>					
					<li><a href="index.php#votes">Vote</a></li>
					
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h3>Results Realtime</h3>				
			</div>
			<div class = "row services">
			<?php
				include ('konek.php');
				$kueri_ambil_data_candidates = "SELECT * FROM candidates";
				$result_ambil_data_candidates = $conn->query($kueri_ambil_data_candidates);
				
				if ($result_ambil_data_candidates->num_rows > 0) {
					while ($row = $result_ambil_data_candidates->fetch_assoc()) {
						echo '<div class="col-md-6">
							<div class="service">
								<div class="icon-holder">
									<img src="' . $row["photoaddress"] .'" alt="" class="avatar" height="75px"/>
								</div>
								<h4 class="heading">' . $row["nama"] .'</h4><br>';
								$var_idcandidate = $row["id"];
								echo '<h6 class="heading">';
									$kueri_ambil_hasil_voting = "SELECT * FROM voting WHERE idcandidate= '$var_idcandidate' ";
									$hasil_ambil_hasil_voting = $conn->query($kueri_ambil_hasil_voting);
									$a = 0;
									if ($hasil_ambil_hasil_voting->num_rows > 0) {
										while ($row = $hasil_ambil_hasil_voting->fetch_assoc()){										
											$a += 1;
										}
									} 
									echo $a;
									echo '</h6>
							</div>
						</div>';
					} 
				}
			$conn->close();
			?>
			</div>

			
		</div>
		<div class="cut cut-bottom"></div>
	</section>

	

	
	
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



