<?php
	$querybab = "SELECT data_kelembaban FROM data WHERE sensor = 3 ORDER BY data_id DESC LIMIT 1";
	$hasil = mysqli_query($con, $querybab);
	while ($rowbab = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
		$lembab = $rowbab['data_kelembaban'];
	}
	$sisa = 100 - $lembab;
	$data = $lembab.","." $sisa";
?>

	<canvas style="width:100%;" id="myChart1"></canvas>
	  
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
		    labels: [<?php echo $lembabmin1 ?>, <?php echo $lembabmin2 ?>, <?php echo $lembabmin ?>, <?php echo $lembabmax ?>, <?php echo $lembabmax1 ?>, <?php echo $lembabmax2 ?>],  // Print labels at these values
		    color: "#000000",  // Optional: Label text color
		    fractionDigits: 0  // Optional: Numerical precision. 0=round off.
		  },
		  staticZones: [
		         {strokeStyle: "#F03E3E", min: <?php echo $lembabmin1 ?>, max: <?php echo $lembabmin2 ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $lembabmin2 ?>, max: <?php echo $lembabmin ?>},
		         {strokeStyle: "#30B32D", min: <?php echo $lembabmin ?>, max: <?php echo $lembabmax ?>},
		         {strokeStyle: "#FFDD00", min: <?php echo $lembabmax ?>, max: <?php echo $lembabmax1 ?>},
		         {strokeStyle: "#F03E3E", min: <?php echo $lembabmax1 ?>, max: <?php echo $lembabmax2 ?>}
		         ],
		  limitMax: false,     // If false, max value increases automatically if value > maxValue
		  limitMin: false,     // If true, the min value of the gauge will be fixed
		  colorStart: '#6FADCF',   // Colors
		  colorStop: '#8FC0DA',    // just experiment with them
		  strokeColor: '#E0E0E0',  // to see which ones work best for you
		  generateGradient: true,
		  highDpiSupport: true,     // High resolution support
		  
		};
		var target = document.getElementById('myChart1'); // your canvas element
		var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
		gauge.maxValue = <?php echo $lembabmax2 ?>; // set max gauge value
		gauge.setMinValue(<?php echo $lembabmin1 ?>);  // Prefer setter over gauge.minValue = 0
		gauge.animationSpeed = 32; // set animation speed (32 is default value)
		gauge.set(<?php echo $lembab ?>); // set actual value
	</script>