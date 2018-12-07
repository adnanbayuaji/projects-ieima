<?php
	$querysuhu = "SELECT data_suhu FROM data WHERE sensor = 1 ORDER BY data_id DESC LIMIT 1";
	$hasil = mysqli_query($con, $querysuhu);
	while ($rowsu = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
		$suhu = $rowsu['data_suhu'];
	}
	$sisa = 100 - $suhu;
	$data = $suhu.","." $sisa";
?>
   <canvas style="width:100%;"  id="myChart"></canvas>
	  
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
		    labels: [<?php echo $suhumin1 ?>, <?php echo $suhumin2 ?>, <?php echo $suhumin ?>, <?php echo $suhumax ?>, <?php echo $suhumax1 ?>, <?php echo $suhumax2 ?>],  // Print labels at these values
		    color: "#000000",  // Optional: Label text color
		    fractionDigits: 0  // Optional: Numerical precision. 0=round off.
		  },
		  staticZones: [
		         {strokeStyle: "#F03E3E", min: <?php echo $suhumin1 ?>, max: <?php echo $suhumin2 ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $suhumin2 ?>, max: <?php echo $suhumin ?>},
		         {strokeStyle: "#30B32D", min: <?php echo $suhumin ?>, max: <?php echo $suhumax ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $suhumax ?>, max: <?php echo $suhumax1 ?>},
		         {strokeStyle: "#F03E3E", min: <?php echo $suhumax1 ?>, max: <?php echo $suhumax2 ?>}
		         ],
		  limitMax: false,     // If false, max value increases automatically if value > maxValue
		  limitMin: false,     // If true, the min value of the gauge will be fixed
		  colorStart: '#6FADCF',   // Colors
		  colorStop: '#8FC0DA',    // just experiment with them
		  strokeColor: '#E0E0E0',  // to see which ones work best for you
		  generateGradient: true,
		  highDpiSupport: true,     // High resolution support
		  
		};
		var target = document.getElementById('myChart'); // your canvas element
		var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
		gauge.maxValue = <?php echo $suhumax2 ?>; // set max gauge value
		gauge.setMinValue(<?php echo $suhumin1 ?>);  // Prefer setter over gauge.minValue = 0
		gauge.animationSpeed = 32; // set animation speed (32 is default value)
		gauge.set(<?php echo $suhu ?>); // set actual value
	</script>