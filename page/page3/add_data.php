<?php
    // Connect to MySQL
    include("../../connect.php");

    // Prepare the SQL statement
    $suhu = $_GET["temp"];
    $kelembaban = $_GET["hum"];
    $intensitas = $_GET["ldr"];
	$co = $_GET['gas'];
    $kebisingan = $_GET['kebisingan'];

    date_default_timezone_set('Asia/Bangkok');
    $dateS = date('Y-m-d H:i:s', time());
    // echo $dateS;
    $SQL = "INSERT INTO data (data_suhu,data_kelembaban,data_intensitas,data_CO,data_kebisingan,data_waktu, sensor) VALUES ('".$suhu."','".$kelembaban."','".$intensitas."','".$co."','".$kebisingan."','$dateS', 3)";     
    // echo $SQL;
    // Execute SQL statement
    $result = mysql_query($SQL);
    // echo $result;
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }
    else
    {
        $row = mysql_query("SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='1'");

        while($datasuhu = mysql_fetch_array($row, MYSQLI_ASSOC)){		
            $suhuminimal = $datasuhu['setting_minimal'];	
            $suhumaksimal = $datasuhu['setting_maksimal'];			
        }

        if ($suhu > $suhumaksimal){
            $keterangansuhu = "Temperature more than standard limit of ".$suhumaksimal." degrees Celcius";
            $statussuhu = 1;
        } else if ($suhu < $suhuminimal){
            $keterangansuhu = "Temperature less than standard limit of ".$suhuminimal." degrees Celcius";
            $statussuhu = 1;
        } else
        {
            $keterangansuhu = "Temperature is normal";
            $statussuhu = 0;
        }

        $row2 = mysql_query("SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='2'");

        while($datakelembaban = mysql_fetch_array($row2, MYSQLI_ASSOC)){		
            $kelembabanminimal = $datakelembaban['setting_minimal'];	
            $kelembabanmaksimal = $datakelembaban['setting_maksimal'];			
        }

        if ($kelembaban > $kelembabanmaksimal){
            $keterangankelembaban = "Humidity more than standard limit of ".$kelembabanmaksimal."% RH";
            $statuskelembaban = 1;
        } else if ($kelembaban < $kelembabanminimal){
            $keterangankelembaban = "Humidity less than standard limit of ".$kelembabanminimal."% RH";
            $statuskelembaban = 1;
        } else
        {
            $keterangankelembaban = "Humidity is normal";
            $statuskelembaban = 0;
        }
        
        $row3 = mysql_query("SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='3'");

        while($dataco = mysql_fetch_array($row3, MYSQLI_ASSOC)){		
            $cominimal = $dataco['setting_minimal'];	
            $comaksimal = $dataco['setting_maksimal'];			
        }

        if ($co > $comaksimal){
            $keteranganco = "CO levels more than standard limit of ".$comaksimal." ppm";
            $statusco = 1;
        } else if ($co < $cominimal){
            $keteranganco = "CO levels less than standard limit of ".$cominimal." ppm";
            $statusco = 1;
        } else
        {
            $keteranganco = "CO levels is normal";
            $statusco = 0;
        }	

        $row4 = mysql_query("SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='4'");

        while($datakebisingan = mysql_fetch_array($row4, MYSQLI_ASSOC)){		
            $kebisinganminimal = $datakebisingan['setting_minimal'];	
            $kebisinganmaksimal = $datakebisingan['setting_maksimal'];			
        }

        if ($kebisingan > $kebisinganmaksimal){
            $keterangankebisingan = "Noise more than standard limit of ".$kebisinganmaksimal." dB";
            $statuskebisingan = 1;
        } else if ($kebisingan < $kebisinganminimal){
            $keterangankebisingan = "Noise less than standard limit of ".$kebisinganminimal." dB";
            $statuskebisingan = 1;
        } else
        {
            $keterangankebisingan = "Noise is normal";
            $statuskebisingan = 0;
        }

        $row5 = mysql_query("SELECT setting_minimal,setting_maksimal FROM setting WHERE setting_id ='5'");

        while($dataintensitas = mysql_fetch_array($row5, MYSQLI_ASSOC)){		
            $intensitasminimal = $dataintensitas['setting_minimal'];	
            $intensitasmaksimal = $dataintensitas['setting_maksimal'];			
        }

        if ($intensitas > $intensitasmaksimal){
            $keteranganintensitas = "Luminance more than standard limit of ".$intensitasmaksimal." lux";
            $statusintensitas = 1;
        } else if ($intensitas < $intensitasminimal){
            $keteranganintensitas = "Luminance less than standard limit of ".$intensitasminimal." lux";
            $statusintensitas = 1;
        } else
        {
            $keteranganintensitas = "Luminance is normal";
            $statusintensitas = 0;
        }

        $row6 = mysql_query("SELECT MAX(data_id) as id FROM data");
        while($getid = mysql_fetch_array($row6, MYSQLI_ASSOC)){
            $id = $getid['id']; 
        }
        // echo $id;

        mysql_query("INSERT INTO detail_data VALUES ('','1','$id','$keterangansuhu','$statussuhu')");
        mysql_query("INSERT INTO detail_data VALUES ('','2','$id','$keterangankelembaban','$statuskelembaban')");
        mysql_query("INSERT INTO detail_data VALUES ('','3','$id','$keteranganco','$statusco')");
        mysql_query("INSERT INTO detail_data VALUES ('','4','$id','$keterangankebisingan','$statuskebisingan')");
        mysql_query("INSERT INTO detail_data VALUES ('','5','$id','$keteranganintensitas','$statusintensitas')");
    }
    
    // Go to the review_data.php (optional)
    // header("Location: index.php");
?>