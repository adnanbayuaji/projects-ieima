<?php
  $tabsuhu = "";
  $tablembab = "";
  $tabco = "";
  $tabbising = "";
  $tabintensitas = "";
  $labels = "";
  function getData($sensor){
    include "../../koneksi.php";
    date_default_timezone_set("Asia/Jakarta");
    $time = date("Y-m-d H");  
    $queryla = "SELECT * FROM data WHERE data_waktu LIKE '".$time."%' AND sensor = ".$sensor;
    //$queryla = "SELECT * FROM data WHERE data_waktu LIKE '2017-10-23%'";
    $datalabel = mysqli_query($con, $queryla);
    $count = mysqli_num_rows($datalabel);
    $i = 0;
    global $tabsuhu, $tablembab, $tabco, $tabbising, $tabintensitas, $labels;
    // $tabsuhu = "";
    // $tablembab = "";
    // $tabco = "";
    // $tabbising = "";
    // $labels = "";
    while ($rowlabel = mysqli_fetch_array($datalabel, MYSQLI_ASSOC)) {
      $i = $i + 1;
      $suhu = $rowlabel['data_suhu'];
      if($i != $count){
        $tabbising = $tabbising.$rowlabel['data_kebisingan'].",";
        $tabco = $tabco.$rowlabel['data_CO'].",";
        $tablembab = $tablembab.$rowlabel['data_kelembaban'].",";
        $tabintensitas = $tabintensitas.$rowlabel['data_intensitas'].",";
        $tabsuhu = $tabsuhu.$suhu.",";
        $labels = $labels."\"".$rowlabel['data_waktu']."\",";
      } else{
        $tabbising = $tabbising.$rowlabel['data_kebisingan'];
        $tabco = $tabco.$rowlabel['data_CO'];
        $tablembab = $tablembab.$rowlabel['data_kelembaban'];
        $tabintensitas = $tabintensitas.$rowlabel['data_intensitas'].",";
        $tabsuhu = $tabsuhu.$suhu;
        $labels = $labels."\"".$rowlabel['data_waktu']."\"";
      }  
    }
  }

  function getDataParam($awal, $akhir, $sensor){
    include "../../koneksi.php";
    date_default_timezone_set("Asia/Jakarta");
    $time = date("Y-m-d H");  
    $queryla = "SELECT * FROM data WHERE data_waktu <= '".$akhir."' AND data_waktu >= '".$awal."' AND sensor = ".$sensor."";
    //$queryla = "SELECT * FROM data WHERE data_waktu LIKE '2017-10-23%'";
    $datalabel = mysqli_query($con, $queryla);
    $count = mysqli_num_rows($datalabel);
    $i = 0;
    global $tabsuhu, $tablembab, $tabco, $tabbising,$tabintensitas, $labels;
    // $tabsuhu = "";
    // $tablembab = "";
    // $tabco = "";
    // $tabbising = "";
    // $labels = "";
    while ($rowlabel = mysqli_fetch_array($datalabel, MYSQLI_ASSOC)) {
      $i = $i + 1;
      $suhu = $rowlabel['data_suhu'];
      if($i != $count){
        $tabbising = $tabbising.$rowlabel['data_kebisingan'].",";
        $tabco = $tabco.$rowlabel['data_CO'].",";
        $tablembab = $tablembab.$rowlabel['data_kelembaban'].",";
        $tabintensitas = $tabintensitas.$rowlabel['data_intensitas'].",";
        $tabsuhu = $tabsuhu.$suhu.",";
        $labels = $labels."\"".$rowlabel['data_waktu']."\",";
      } else{
        $tabbising = $tabbising.$rowlabel['data_kebisingan'];
        $tabco = $tabco.$rowlabel['data_CO'];
        $tablembab = $tablembab.$rowlabel['data_kelembaban'];
        $tabintensitas = $tabintensitas.$rowlabel['data_intensitas'].",";
        $tabsuhu = $tabsuhu.$suhu;
        $labels = $labels."\"".$rowlabel['data_waktu']."\"";
      }  
    }
  }
?>