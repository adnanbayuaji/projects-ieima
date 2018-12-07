<?php
	// mendeteksi varibel cookies.
	if(!isset($_COOKIE["PHP"])) {		  
		  //echo "Cookie belum dibentuk ";
		  //session_destroy();
		  header('Location:index.php'); // Mengarahkan ke Home Page
	}
	setcookie("PHP", "2" , time() - 5);  
?>