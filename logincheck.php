<?php
	include('konek.php');	
	session_start();
	
	if (!isset($_POST['submit'])){
		
		if (empty($_POST['nama']) || empty($_POST['pwd'])) {
				$error = "Isilah username dan passwordnya";
				echo $error;
			} else {
				$nama = $_POST["nama"];
				$pwd = $_POST["pwd"];
				$nama = stripslashes($nama);
				$pwd = stripslashes($pwd);
				$nama = mysqli_real_escape_string ($conn, $nama);
				$pwd = mysqli_real_escape_string ($conn, $pwd);
				$kueri_check_user = "SELECT * FROM pengguna WHERE nama = '$nama' AND password = '$pwd'";
				$hasil_check_user = $conn->query($kueri_check_user);
				$row = mysqli_num_rows($hasil_check_user);
				if ($row == 1) {
					$_SESSION['loginuser'] = $nama;
					header ("Location: adminpage.php");
				} else {
					$error = "Username or Password is invalid";
					echo $error;
				} 
				$conn->close();				
			} 
	}
?>