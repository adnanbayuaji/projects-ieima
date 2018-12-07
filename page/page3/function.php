<?php
	function chart_suhu(){
    include "../../koneksi.php";
    $suhu = null;
		$queryMax = "SELECT * FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
          $data = mysqli_query($con, $queryMax);
          while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
            $suhu = $rowdat['data_suhu'];
          }

          $queryBatas = "SELECT * FROM setting";
          $dataset = mysqli_query($con, $queryBatas);
          while ($set = mysqli_fetch_array($dataset, MYSQLI_ASSOC)) {
            if($set['setting_id'] == 1){
              $suhumin = $set['setting_minimal'];
              $suhumax = $set['setting_maksimal'];
              $suhumin1 = $set['minimal1'];
              $suhumin2 = $set['minimal2'];
              $suhumax1 = $set['maksimal1'];
              $suhumax2 = $set['maksimal2'];
            }
          }
?>
    <div style="float: left; width: 100%;">
      <div style="width: 100%; float: left; padding-left: 10px; padding-right: 10px;">
        <?php include "chartsuhu.php"; ?>
      </div>
      <div style="float: left; width: 100%;">
        <div style="width: 100%; float: left; text-align: center;">
          <!-- <img src="icon/temperature.png" width="60px" height="60px"> -->
          <?php if($suhu < $suhumin2 && $suhu > $suhumin1 || $suhu < $suhumax2 && $suhu > $suhumax1){ ?>
            <font size="6" color="RED"><?php echo $suhu." °C"; ?></font>
          <?php } else if($suhu < $suhumin && $suhu > $suhumin2 || $suhu < $suhumax1 && $suhu > $suhumax) { ?>
            <font size="6" color="YELLOW"><?php echo $suhu." °C"; ?></font>
          <?php } else { ?>
            <font size="6" color="GREEN"><?php echo $suhu." °C"; ?></font>
          <?php } ?>
        </div>
      </div>
    </div>
    <div style="width: 100%">
      <div style="float: left; width: 100%">
      <center>
        <font color="GREEN"><?php echo "Standard Range "; ?></font><br/>
        <font color="GREEN"><?php echo $suhumin." °C - ".$suhumax." °C"; ?></font>
      </center>
      </div>
    </div>
<?php
}

function chart_kelembapan(){
  include "../../koneksi.php";
  $lembab = null;
  $queryMax = "SELECT * FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
        $data = mysqli_query($con, $queryMax);
        while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
          $kelembaban = $rowdat['data_kelembaban'];
        }

        $queryBatas = "SELECT * FROM setting";
        $dataset = mysqli_query($con, $queryBatas);
        while ($set = mysqli_fetch_array($dataset, MYSQLI_ASSOC)) {
          if($set['setting_id'] == 2){
            $lembabmin = $set['setting_minimal'];
            $lembabmax = $set['setting_maksimal'];
            $lembabmin1 = $set['minimal1'];
            $lembabmin2 = $set['minimal2'];
            $lembabmax1 = $set['maksimal1'];
            $lembabmax2 = $set['maksimal2'];
          }
        }
?>
    <div style="float: left; width: 100%;">
      <div style="width: 100%; float: left; padding-left: 10px; padding-right: 10px;">
        <?php include "chartlembab.php"; ?>
      </div>
      <div style="float: left; width: 100%;">
        <div style="width: 100%; float: left; text-align: center;">
          <!-- <img src="icon/humidity.png" width="60px" height="60px"> -->
          <?php if($lembab < $lembabmin2 && $lembab > $lembabmin1 || $lembab < $lembabmax2 && $lembab > $lembabmax1){ ?>
            <font size="6" color="RED"><?php echo $lembab." % RH"; ?></font>
          <?php } else if($lembab < $lembabmin && $lembab > $lembabmin2 || $lembab < $lembabmax1 && $lembab > $lembabmax) { ?>
            <font size="6" color="YELLOW"><?php echo $lembab." % RH"; ?></font>
          <?php } else { ?>
            <font size="6" color="GREEN"><?php echo $lembab." % RH"; ?></font>
          <?php } ?>
        </div>
      </div>
    </div>
    <div style="width: 100%">
      <div style="float: left; width: 100%">
      <center>
        <font color="GREEN"><?php echo "Standard Range "; ?></font><br/>
        <font color="GREEN"><?php echo $lembabmin." % RH - ".$lembabmax." % RH"; ?></font>
      </center>
      </div>
    </div>

<?php
}

function chart_co(){
  include "../../koneksi.php";
  $co = null;
  $queryMax = "SELECT * FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
        $data = mysqli_query($con, $queryMax);
        while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
          $co = $rowdat['data_CO'];
        }

        $queryBatas = "SELECT * FROM setting";
        $dataset = mysqli_query($con, $queryBatas);
        while ($set = mysqli_fetch_array($dataset, MYSQLI_ASSOC)) {
          if($set['setting_id'] == 3){
            $comin = $set['setting_minimal'];
            $comax = $set['setting_maksimal'];
            $comin1 = $set['minimal1'];
            $comin2 = $set['minimal2'];
            $comax1 = $set['maksimal1'];
            $comax2 = $set['maksimal2'];
          }
        }
?>

    <div style="float: left; width: 100%;">
      <div style="width: 100%; float: left; padding-left: 10px; padding-right: 10px;">
        <?php include "chartco.php"; ?>
      </div>
      <div style="float: left; width: 100%;">
        <div style="width: 100%; float: left; text-align: center;">
          <!-- <img src="icon/co.png" width="60px" height="60px"> -->
          <?php if($co < $comin2 && $co > $comin1 || $co < $comax2 && $co > $comax1){ ?>
            <font size="6" color="RED"><?php echo $co. " ppm"; ?></font>
          <?php } else if($co < $comin && $co > $comin2 || $co < $comax1 && $co > $comax) { ?>
            <font size="6" color="YELLOW"><?php echo $co. " ppm"; ?></font>
          <?php } else { ?>
            <font size="6" color="GREEN"><?php echo $co. " ppm"; ?></font>
          <?php } ?>
        </div>
      </div>
    </div>
    <div style="width: 100%">
      <div style="float: left; width: 100%">
      <center>
        <font color="GREEN"><?php echo "Standard Range "; ?></font><br/>
        <font color="GREEN"><?php echo $comin." ppm - ".$comax." ppm"; ?></font>
      </center>
      </div>
    </div>
<?php
}

function chart_kebisingan(){
  include "../../koneksi.php";
  $bising = null;
  $queryMax = "SELECT * FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
        $data = mysqli_query($con, $queryMax);
        while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
          $bising = $rowdat['data_kebisingan'];
        }

        $queryBatas = "SELECT * FROM setting";
        $dataset = mysqli_query($con, $queryBatas);
        while ($set = mysqli_fetch_array($dataset, MYSQLI_ASSOC)) {
          if($set['setting_id'] == 4){
            $bisingmin = $set['setting_minimal'];
            $bisingmax = $set['setting_maksimal'];
            $bisingmin1 = $set['minimal1'];
            $bisingmin2 = $set['minimal2'];
            $bisingmax1 = $set['maksimal1'];
            $bisingmax2 = $set['maksimal2'];
          }
        }
?>

    <div style="float: left; width: 100%;">
      <div style="width: 100%; float: left; padding-left: 10px; padding-right: 10px;">
        <?php include "chartbising.php"; ?>
      </div>
      <div style="float: left; width: 100%;">
        <div style="width: 100%; float: left; text-align: center;">
          <!-- <img src="icon/noise.png" width="60px" height="60px"> -->
          <?php if($bising < $bisingmin2 && $bising > $bisingmin1 || $bising < $bisingmax2 && $bising > $bisingmax1){ ?>
            <font size="6" color="RED"><?php echo $bising. " dB"; ?></font>
          <?php } else if($bising < $bisingmin && $bising > $bisingmin2 || $bising < $bisingmax1 && $bising > $bisingmax) { ?>
            <font size="6" color="YELLOW"><?php echo $bising. " dB"; ?></font>
          <?php } else { ?>
            <font size="6" color="GREEN"><?php echo $bising. " dB"; ?></font>
          <?php } ?>
        </div>
      </div>
    </div>
    <div style="width: 100%">
      <div style="float: left; width: 100%">
      <center>
        <font color="GREEN"><?php echo "Standard Range "; ?></font><br/>
        <font color="GREEN"><?php echo $bisingmin." dB - ".$bisingmax." dB"; ?></font>
      </center>
      </div>
    </div>

    <?php
}

function chart_intensitas(){
  include "../../koneksi.php";
  $intensitas = null;
  $queryMax = "SELECT * FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
        $data = mysqli_query($con, $queryMax);
        while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
          $intensitas = $rowdat['data_intensitas'];
        }

        $queryBatas = "SELECT * FROM setting";
        $dataset = mysqli_query($con, $queryBatas);
        while ($set = mysqli_fetch_array($dataset, MYSQLI_ASSOC)) {
          if($set['setting_id'] == 5){
            $intensitasmin = $set['setting_minimal'];
            $intensitasmax = $set['setting_maksimal'];
            $intensitasmin1 = $set['minimal1'];
            $intensitasmin2 = $set['minimal2'];
            $intensitasmax1 = $set['maksimal1'];
            $intensitasmax2 = $set['maksimal2'];
          }
        }
?>

    <div style="float: left; width: 100%;">
      <div style="width: 100%; float: left; padding-left: 10px; padding-right: 10px;">
        <?php include "chartintensitas.php"; ?>
      </div>
      <div style="float: left; width: 100%;">
        <div style="width: 100%; float: left; text-align: center;">
          <!-- <img src="icon/noise.png" width="60px" height="60px"> -->
          <?php if($intensitas < $intensitasmin2 && $intensitas > $intensitasmin1 || $intensitas < $intensitasmax2 && $intensitas > $intensitasmax1){ ?>
            <font size="6" color="RED"><?php echo $intensitas. " lux"; ?></font>
          <?php } else if($intensitas < $intensitasmin && $intensitas > $intensitasmin2 || $intensitas < $intensitasmax1 && $intensitas > $intensitasmax) { ?>
            <font size="6" color="YELLOW"><?php echo $intensitas. " lux"; ?></font>
          <?php } else { ?>
            <font size="6" color="GREEN"><?php echo $intensitas. " lux"; ?></font>
          <?php } ?>
        </div>
      </div>
    </div>
    <div style="width: 100%">
      <div style="float: left; width: 100%">
      <center>
        <font color="GREEN"><?php echo "Standard Range "; ?></font><br/>
        <font color="GREEN"><?php echo $intensitasmin." lux - ".$intensitasmax." lux"; ?></font>
      </center>
      </div>
    </div>
    
<?php
}

function updated(){
	include "../../koneksi.php";
	$query = "SELECT data_waktu FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
	$data = mysqli_query($con, $query);
  	while ($rowdat = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
  		$waktuUp = $rowdat['data_waktu'];
  	}
?>
<div class="card-subtitle small text-muted">Updated at <?php echo $waktuUp; ?></div>
<?php
}
?>