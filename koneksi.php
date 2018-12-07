<?php
	$host = "localhost"; // setting nama server/hostname
	// $db = "monitoringdb"; // setting nama database
	$db = "ieima";
	$user = "root"; // setting nama user
	$password = ""; //setting password mysql

	// // melaukan koneksi ke server dengan nama user
	// // dan password yang sudah dibuat
	// $connect1 = mysql_connect($host, $user, $password) or die(mysql_error());
	
	// // memilih database yang akan digunakan
	// $connect2 = mysql_select_db($db) or die(mysql_error());

	$con = mysqli_connect($host,$user,$password,$db);

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


?>