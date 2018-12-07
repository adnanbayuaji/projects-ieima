<?php
	$querysuhu = "SELECT data_intensitas FROM data WHERE sensor = 2 ORDER BY data_id DESC LIMIT 1";
	$hasil = mysqli_query($con, $querysuhu);
	while ($rowbis = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
		$intensitas = $rowbis['data_intensitas'];
	}
	$sisa = $intensitasmax - $intensitas;
	$data = $intensitas.","." $sisa";
?>

	<canvas style="width:100%;" id="myChart9"></canvas>
	  
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
		    labels: [<?php echo $intensitasmin1 ?>, <?php echo $intensitasmin2 ?>, <?php echo $intensitasmin ?>, <?php echo $intensitasmax ?>, <?php echo $intensitasmax1 ?>, <?php echo $intensitasmax2 ?>],  // Print labels at these values
		    color: "#000000",  // Optional: Label text color
		    fractionDigits: 0  // Optional: Numerical precision. 0=round off.
		  },
		  staticZones: [
		         {strokeStyle: "#F03E3E", min: <?php echo $intensitasmin1 ?>, max: <?php echo $intensitasmin2 ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $intensitasmin2 ?>, max: <?php echo $intensitasmin ?>},
		         {strokeStyle: "#30B32D", min: <?php echo $intensitasmin ?>, max: <?php echo $intensitasmax ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $intensitasmax ?>, max: <?php echo $intensitasmax1 ?>},
		         {strokeStyle: "#F03E3E", min: <?php echo $intensitasmax1 ?>, max: <?php echo $intensitasmax2 ?>}
		         ],
		  limitMax: false,     // If false, max value increases automatically if value > maxValue
		  limitMin: false,     // If true, the min value of the gauge will be fixed
		  colorStart: '#6FADCF',   // Colors
		  colorStop: '#8FC0DA',    // just experiment with them
		  strokeColor: '#E0E0E0',  // to see which ones work best for you
		  generateGradient: true,
		  highDpiSupport: true,     // High resolution support
		  
		};
		var target = document.getElementById('myChart9'); // your canvas element
		var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
		gauge.maxValue = <?php echo $intensitasmax2 ?>; // set max gauge value
		gauge.setMinValue(<?php echo $intensitasmin1 ?>);  // Prefer setter over gauge.minValue = 0
		gauge.animationSpeed = 32; // set animation speed (32 is default value)
		gauge.set(<?php echo $intensitas ?>); // set actual value
	</script>