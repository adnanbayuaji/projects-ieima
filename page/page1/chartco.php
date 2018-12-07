<?php
	$querysuhu = "SELECT data_co FROM data WHERE sensor = 1 ORDER BY data_id DESC LIMIT 1";
	$hasil = mysqli_query($con, $querysuhu);
	while ($rowco = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
		$co = $rowco['data_co'];
	}
	$sisa = 10000 - $co;
	$data = $co.","." $sisa";
?>

	<canvas style="width:100%;" id="myChart3"></canvas>
	  
	<script type="text/JavaScript">
	var opts = {
		  angle: 0, // The span of the gauge arc
		  lineWidth: 0.56, // The line thickness
		  radiusScale: 1, // Relative radius
		  pointer: {
		    length: 0.59, // // Relative to gauge radius
		    strokeWidth: 0.035, // The thickness
		    color: '#000000' // Fill color
		  },
		  staticLabels: {
		    font: "10px sans-serif",  // Specifies font
		    labels: [<?php echo $comin1 ?>, <?php echo $comin2 ?>, <?php echo $comin ?>, <?php echo $comax ?>, <?php echo $comax1 ?>, <?php echo $comax2 ?>],  // Print labels at these values
		    color: "#000000",  // Optional: Label text color
		    fractionDigits: 0  // Optional: Numerical precision. 0=round off.
		  },
		  staticZones: [
		         {strokeStyle: "#F03E3E", min: <?php echo $comin1 ?>, max: <?php echo $comin2 ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $comin2 ?>, max: <?php echo $comin ?>},
		         {strokeStyle: "#30B32D", min: <?php echo $comin ?>, max: <?php echo $comax ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $comax ?>, max: <?php echo $comax1 ?>},
		         {strokeStyle: "#F03E3E", min: <?php echo $comax1 ?>, max: <?php echo $comax2 ?>}
		         ],
		  limitMax: false,     // If false, max value increases automatically if value > maxValue
		  limitMin: false,     // If true, the min value of the gauge will be fixed
		  colorStart: '#6FADCF',   // Colors
		  colorStop: '#8FC0DA',    // just experiment with them
		  strokeColor: '#E0E0E0',  // to see which ones work best for you
		  generateGradient: true,
		  highDpiSupport: true,     // High resolution support
		  
		};
		var target = document.getElementById('myChart3'); // your canvas element
		var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
		gauge.maxValue = <?php echo $comax2 ?>; // set max gauge value
		gauge.setMinValue(<?php echo $comin1 ?>);  // Prefer setter over gauge.minValue = 0
		gauge.animationSpeed = 32; // set animation speed (32 is default value)
		gauge.set(<?php echo $co ?>); // set actual value
	</script>