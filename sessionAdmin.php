<?php
	// melakukan koneksi ke database
	include "koneksi.php";
	
	session_start();// Memulai Session
	// Menyimpan Session
	$user_check=$_SESSION['latcookrole'];
	// Ambil nama user berdasarkan username dengan mysql_fetch_assoc
	// $ses_sql=mysqli_query($con,"select user_desc from user where user_username='$user_check'");
	// $row = mysqli_fetch_assoc($ses_sql);
	// $login_session =$row['user_desc'];
	
	// if($user_desc != "admin")
	// {
	// 	mysqli_close($connection); // Menutup koneksi
	// 	header('Location:index.php');
	// }
	// else{
	// 	header('Location:admin1.php');	
	// }

	if(!isset($user_check)){
		mysqli_close($connection); // Menutup koneksi
		header('Location:index.php'); // Mengarahkan ke Home Page
	}
?>