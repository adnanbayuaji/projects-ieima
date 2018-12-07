<?php
	
	function otentikasi($user_username, $user_password)
	{
		include "koneksi.php";
		
		$query2 	= "select count(user_username) as jml from user where user_username='$user_username' and user_password='$user_password'";

		$query 	= mysqli_query($con, $query2);
		$hsl	= mysqli_fetch_array($query, MYSQLI_ASSOC);

		if($hsl["jml"]!=0) return true;
		else return false;
	}

	function authorisasi($user_username, $user_password)
	{
		include "koneksi.php";
		$query3 	= "select user_desc from user where user_username='$user_username' and user_password='$user_password'";
		$query 	= mysqli_query($con, $query3);
		
		$hsl	= mysqli_fetch_array($query, MYSQLI_ASSOC);

		return $hsl["user_desc"];
	}
?>