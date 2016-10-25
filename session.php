<?php
	include('konek.php');
	session_start();
	
	$kueri_cek_username = "SELECT FROM pengguna where nama ='$user_check' ";
	$row = mysqli_fetch_assoc($kueri_cek_username);
	$user_check = $_SESSION['loginuser'];
	$login_session = $row['nama'];
	if (!isset($login_session)){
		$conn->close();
		header ('location:index.php');
	}
?>