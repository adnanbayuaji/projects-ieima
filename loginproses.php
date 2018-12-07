<?php
	include "koneksi.php";
	include "autentikasi.php";

	if($_GET["m"]=="i")
	{
		$user_username = $_POST["user_username"];
		$user_password = $_POST["user_password"];

		if($user_username=="" && $user_password=="")
		{
			header("location:login.php?e=2");
		}

		else if(otentikasi($user_username,$user_password))
		{
			setcookie("latcooku", $user_username, time() + 3600, "/", "localhost");
			setcookie("latcookp", $user_password, time() + 3600, "/", "localhost");

			session_start();
			$_SESSION['latcookrole'] = authorisasi($user_username, $user_password);
			//$_SESSION['login_user'] = $user_username;

			if ($_SESSION['latcookrole']=="mahasiswa") header("location:index.php");
			if ($_SESSION['latcookrole']=="admin") header("location:start_admin.php");
			if ($_SESSION['latcookrole']=="dosen") header("location:start_admin.php");
			if ($_SESSION['latcookrole']=="instruktur") header("location:start_admin.php");
			
		}
		else
		{
			header("location:login.php?e=1");
		}
	}
	else if($_GET["m"]=="o")
	{
		setcookie("latcooku", "", time() - 3600, "/", "localhost");
		setcookie("latcookp", "", time() - 3600, "/", "localhost");
		session_destroy();

		header("location:login.php?e=3");
	}
?>