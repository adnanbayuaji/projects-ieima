<?php
	function function_roominfo(){
		include "../../koneksi.php";
		$queryMax = "SELECT * FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
    $data = mysqli_query($con, $queryMax);
    while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
      $suhu = $rowdat['data_suhu'];
      $lembab = $rowdat['data_kelembaban'];
      $co = $rowdat['data_CO'];
      $bising = $rowdat['data_kebisingan'];
      $intensitas = $rowdat['data_intensitas'];
    }
    $queryBatas = "SELECT * FROM setting";
    $dataset = mysqli_query($con, $queryBatas);
    while ($set = mysqli_fetch_array($dataset, MYSQLI_ASSOC)) {
      if($set['setting_id'] == 1){
        $suhumin = $set['setting_minimal'];
        $suhumax = $set['setting_maksimal'];
      }
      if($set['setting_id'] == 2){
        $lembabmin = $set['setting_minimal'];
        $lembabmax = $set['setting_maksimal'];
      }
      if($set['setting_id'] == 3){
        $comin = $set['setting_minimal'];
        $comax = $set['setting_maksimal'];
      }
      if($set['setting_id'] == 4){
        $bisingmin = $set['setting_minimal'];
        $bisingmax = $set['setting_maksimal'];
      }
      if($set['setting_id'] == 5){
        $intensitasmin = $set['setting_minimal'];
        $intensitasmax = $set['setting_maksimal'];
      }
    }

    $counting = 0;
    $array = [];
    $roominfo = "";
    if($suhu < $suhumin || $suhu > $suhumax)
    {
      $counting++;
      if($suhu < $suhumin)
      {
        array_push($array, "Increase your AC temperature");
      }
      else if($suhu > $suhumax)
      {
        array_push($array, "Decrease your AC temperature");
      }
    }
    if($lembab < $lembabmin || $lembab > $lembabmax)
    {
      $counting++;
      array_push($array, "Adjust air humidity through AC temperature");
    }
    if($intensitas < $intensitasmin || $intensitas > $intensitasmax)
    {
      $counting++;
      if($intensitas < $intensitasmin)
      {
        array_push($array, "Turn on lamps");
      }
      else if($intensitas > $intensitasmax)
      {
        array_push($array, "Turn off lamps that are not needed");
      }
    }
    if($co < $comin || $co > $comax)
    {
      $counting++;
      array_push($array, "Adjust air circulation and the number of people in the room");
    }
    if($bising < $bisingmin || $bising > $bisingmax)
    {
      $counting++;
      if($bising < $bisingmin)
      {
        array_push($array, "Silent room condition");
      }
      else if($bising > $bisingmax)
      {
        array_push($array, "Decrease your sound");
      }
    }

    //room information
    if($counting == 0)
    {
      $roominfo = "Good Room Condition";
    }
    else if($counting == 1)
    {
      $roominfo = "Fairly Good Room Condition";
    }
    else if($counting == 2)
    {
      $roominfo = "Poor Room Condition";
    }
    else if($counting > 2 )
    {
      $roominfo = "Inappropriate Room Condition";
    }

    echo "<h3 style='text-align: center'>".$roominfo."</h3>";

    return $array;
  }
?>