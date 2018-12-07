<?php
	include "../../koneksi.php";
	$nama_file = "laporan.xls";

	if(isset($_POST['cari'])){
		// $awal = $_POST['start'];
		// $akhir = $_POST['end'];
		// header("location:admin1.php?awal=$awal&akhir=$akhir");
	}
	elseif(isset($_POST['export'])){
		header("Content-Type:application/octet-stream");
		header("Content-disposition:attachment; filename=".$nama_file);
		header("Pragma: no-cache");
		header("Expires:0");
?>

<table>
	<tr>
		<td colspan="5"><center>INDOOR ENVIRONMENT INTELLIGENCE MONITORING APPLICATION REPORT</center></td>
	</tr>
	<tr></tr>
	<tr><td colspan="5">TABLE MONITORING HISTORY</td></tr>
</table>
<table border="1">
	<tr>
		<th>Time</th>
		<th>Temperature</th>
		<th>Humidity</th>
		<th>CO</th>
		<th>Noise</th>
		<th>Luminance</th>
	</tr>

<?php
	if (isset($_POST['start']))
	{
		$awal = $_POST['start'];
		$akhir = $_POST['end'];
		$query = "SELECT * FROM data WHERE data_waktu >= '$awal' AND data_waktu <= '$akhir' AND sensor = 3";
		if($_POST['start'] == ""){
			$query = "SELECT * FROM data";
		}
	}
	else
	{
		$query = "SELECT * FROM data";
	}
	//$query = "SELECT * FROM data";
	$queryRata = mysqli_query($con, $query);
	while ($row = mysqli_fetch_array($queryRata, MYSQLI_ASSOC)) {	
	//$data_id = $row['data_id'];
?>
	<tr>
		<td><?php echo $row['data_waktu'] ?></td>
		<td><?php echo ($row['data_suhu']==null)?'-':$row['data_suhu']." °C"; ?> </td>
		<td><?php echo ($row['data_kelembaban']==null)?'-':$row['data_kelembaban']." % RH"; ?> </td>
		<td><?php echo ($row['data_CO']==null)?'-':$row['data_CO']." ppm"; ?> </td>
		<td><?php echo ($row['data_kebisingan']==null)?'-':$row['data_kebisingan']." dB"; ?> </td>
		<td><?php echo ($row['data_intensitas']==null)?'-':$row['data_intensitas']." lux"; ?> </td>
	</tr>
	
<?php
	}
?>
</table>
<?php
	}
?>