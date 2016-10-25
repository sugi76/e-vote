<?php
	include('konek.php');
	$namavoter = $_POST["namavoter"] ;
	$kelasvoter = $_POST["kelasvoter"] ;
	$check = $_POST["check"] ;
	$isivote = $_POST["pilihansaya"] ;
	
	if ($check != 1) {
		echo '<html><head>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<script src="css/bootstrap.min.js"></script>
	
				
		</head><body>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="jumbotron well">
							<h2>Warning</h2>
							<p>' . $namavoter . ' anda, tidak menceklist tanda memilih dengan kesadaran sendiri</p>
							<p><a class="btn btn-primary btn-large" href="index.php">Back</a></p>
						</div>
					</div>
				</div>
			</div>
		</body></html>';
	} else {

	$kueri_simpan_voter = "INSERT INTO voter(nama, kelas) VALUE('$namavoter', '$kelasvoter')";
	$result_simpan_voter = $conn->query($kueri_simpan_voter);
	
	$kueri_ambil_idvoter = "SELECT id FROM voter WHERE nama = '$namavoter' ";
	$result_ambil_idvoter = $conn->query($kueri_ambil_idvoter);
	if ($result_ambil_idvoter->num_rows > 0) {
		while ($row = $result_ambil_idvoter->fetch_row()) {
			$idvoter = $row[0];
		}
	}
	
	$kueri_simpan_voting = "INSERT INTO voting(idcandidate, idvoter) VALUE ('$isivote', '$idvoter')";
	$result_simpan_voting = $conn->query($kueri_simpan_voting);

	mysqli_close($conn);
	
	header('Location: index.php');
	}
?>

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
