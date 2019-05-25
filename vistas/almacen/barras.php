<?php 
require_once('../../modelo/conexion/conexion.php');
?>
<!doctype html>
<html>
	<head>
		<title>Grafica de Almacen</title>
		<script src="../../controles/librerias/Chart.js"></script>
		<link rel="stylesheet" href="../css/StyleAlmacen.css">
	</head>
	<body>
		<div align="center">
			<label class="titulo2"><b>Grafica de Almacen</b></label>
		</div>
		<div style="width: 100%">
			<canvas id="canvas" height="130" width="400"></canvas>
		</div>


	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
	
	var barChartData = {
		labels : [
		<?php 
		$sql = "SELECT NombreProducto, ExistenciaKP FROM almacen";
		$result = mysqli_query($conexion,$sql);
		while ($registros = mysqli_fetch_array($result))
		{
			
		?>
		

			'<?php echo $registros["NombreProducto"]; ?>',
		<?php
		}
		?>
		],

		datasets : [

			{
				
				fillColor : "rgba(32, 178, 170,0.5)",
				strokeColor : "rgba(30, 144, 255,0.8)",
				highlightFill: "rgba(102, 205, 170,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				
				data : 
				<?php 
				$sql = "SELECT * FROM almacen";
				$result = mysqli_query($conexion,$sql);
				?>
				[<?php while ($registros = mysqli_fetch_array($result)){ ?><?php echo $registros["ExistenciaKP"] ?>, <?php }?>]

			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>

	</body>
</html>
