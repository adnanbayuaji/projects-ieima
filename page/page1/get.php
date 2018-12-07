<?php

	include("koneksi.php");

	$suhu = $_GET['suhu'];
	$kelembaban = $_GET['kelembaban'];
	$co = $_GET['co'];
	$kebisingan = $_GET['kebisingan'];
	date_default_timezone_set("Asia/Jakarta");
	$waktu = date("Y-m-d H:i:s");

	$query = "INSERT INTO data VALUES('','$suhu','$kelembaban','$co','$kebisingan','$waktu')";
	mysqli_query($con, $query);
	
	$row = mysqli_query($con,"SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='1'");

	while($datasuhu = mysqli_fetch_array($row, MYSQLI_ASSOC)){		
		$suhuminimal = $datasuhu['setting_minimal'];	
		$suhumaksimal = $datasuhu['setting_maksimal'];			
	}

	if ($suhu > $suhumaksimal){
		$keterangansuhu = "Temperature more than standard limit of 40 degrees Celcius";
		$status = 1;
	} else if ($suhu < $suhumaksimal){
		$keterangansuhu = "Temperature less than standard limit of 10 degrees Celcius";
		$status = 1;
	} else
	{
		$keterangansuhu = "Temperature is normal";
		$status = 0;
	}

	$row2 = mysqli_query($con, "SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='2'");

	while($datakelembaban = mysqli_fetch_array($row2, MYSQLI_ASSOC)){		
		$kelembabanminimal = $datakelembaban['setting_minimal'];	
		$kelembabanmaksimal = $datakelembaban['setting_maksimal'];			
	}

	if ($kelembaban > $kelembabanmaksimal){
		$keterangankelembaban = "Humidity more than standard limit of 60% RH";
		$status = 1;
	} else if ($kelembaban < $kelembabanmaksimal){
		$keterangankelembaban = "Humidity less than standard limit of 0% RH";
		$status = 1;
	} else
	{
		$keterangankelembaban = "Humidity is normal";
		$status = 0;
	}
	
	$row3 = mysqli_query($con, "SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='3'");

	while($dataco = mysqli_fetch_array($row3, MYSQLI_ASSOC)){		
		$cominimal = $dataco['setting_minimal'];	
		$comaksimal = $dataco['setting_maksimal'];			
	}

	if ($co > $comaksimal){
		$keteranganco = "CO levels more than standard limit of 10.000 ppm";
		$status = 1;
	} else if ($co < $comaksimal){
		$keteranganco = "CO levels less than standard limit of 350 ppm";
		$status = 1;
	} else
	{
		$keteranganco = "CO levels is normal";
		$status = 0;
	}	

	$row4 = mysqli_query($con, "SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='4'");

	while($datakebisingan = mysqli_fetch_array($row4, MYSQLI_ASSOC)){		
		$kebisinganminimal = $datakebisingan['setting_minimal'];	
		$kebisinganmaksimal = $datakebisingan['setting_maksimal'];			
	}

	if ($kebisingan > $kebisinganmaksimal){
		$keterangankebisingan = "Noise more than standard limit of 88 dB";
		$status = 1;
	} else if ($kebisingan < $kebisinganmaksimal){
		$keterangankebisingan = "Noise less than standard limit of 28 dB";
		$status = 1;
	} else
	{
		$keterangankebisingan = "Noise is normal";
		$status = 0;
	}

	$row5 = mysqli_query($con, "SELECT MAX(data_id) as id FROM data");
	while($getid = mysqli_fetch_array($row5, MYSQLI_ASSOC)){
		$id = $getid['id']; 
	}
	echo $id;

	mysqli_query($con, "INSERT INTO detail_data VALUES ('','1','$id','$keterangansuhu','$status')");
	mysqli_query($con, "INSERT INTO detail_data VALUES ('','2','$id','$keterangankelembaban','$status')");
	mysqli_query($con, "INSERT INTO detail_data VALUES ('','3','$id','$keteranganco','$status')");
	mysqli_query($con, "INSERT INTO detail_data VALUES ('','4','$id','$keterangankebisingan','$status')");

?>