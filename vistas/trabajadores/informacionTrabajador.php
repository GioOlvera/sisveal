<!DOCTYPE html>
<html>
<head>
	<title>Información Trabajador</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" >
	<meta http-equiv="X-UA-Compatible" content="le-edge">
	<link rel="stylesheet" href="../css/PrincipalEstilo.css">
	<link rel="stylesheet" href="../css/formClientes.css" > 
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/themes/default.css">
	<link rel="icon" type="text/css"  href="../img/iCO.ico" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="../../controles/librerias/jquery-3.3.1.js"></script>
</head>
<body>
	<!--MENU-->	
<div class="menu-horizontal" align="center">		
	<header>
		<?php include "../includes/nav.php" ?>
	</header>	
</div>	

	<form class="formulario" id="myformulario">
		<h2 class="lb-cliente-t">Información del Trabajador</h2>

		<?php

		require_once "../../modelo/conexion/conexion.php";
		$idTrabajador = $_GET['idTrabajador'];

		$sql2="SELECT * FROM trabajador WHERE idTrabajador='$idTrabajador'";  
		$resultado=mysqli_query($conexion, $sql2);
		while($mostrar=mysqli_fetch_array($resultado)){

		?>

		<table  width="1000" height="100" align="center">
			<tr>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Nombre:</label>
				</td>
				<td width="500">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['nombreTrabajador']; ?></label>
				</td>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Apellido Paterno:</label>
				</td>
				<td width="500">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['apTrabajador']; ?></label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Apelido Materno:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['amTrabajador']; ?> </label>
				</td>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Teléfono:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['telefonoTrabajador']; ?></label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Edad:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['edadTrabajador']; ?> </label>
				</td>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Fecha de Nacimiento:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['dateTrabajador']; ?></label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<label class="lb-cliente" style="font-size: 18px;">Cargo:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['cargoTrabajador']; ?> </label>
				</td>
			</tr>
		</table>
		<?php
	}
		?>
		<br><br>

		<h2 class="lb-cliente-t" align="center">Datos Dirección</h2>

		<?php
		require_once "../../modelo/conexion/conexion.php";
		//$id_ClienteDireccion = $_GET['id_ClienteDireccion'];

		$sql3="SELECT * FROM direcciontrabajador WHERE idTrabajador='$idTrabajador'";  
		$resultado2=mysqli_query($conexion, $sql3);
		while($mostrar2=mysqli_fetch_array($resultado2)){

		?>

		
		<script>
			
		</script>

		<table width="1000" height="100" align="center">

			<tr>
				<td width="160">
					<label class="lb-cliente" style="font-size: 18px;">Código Postal:</label>
				</td>	
				<td width="400">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar2['cp']; ?></label>
				</td>
				<td width="160">
					<label class="lb-cliente" style="font-size: 18px;">Estado:</label>
				</td>
				<td width="400">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar2['estado']; ?></label>
				</td>
			</tr>

			<tr>
				<td width="80">
					<label class="lb-cliente" style="font-size: 18px;">Municipio:</label>
				</td>
				<td>
					<label class="txt-cliente" style="font-size: 18px;"> <?php echo $mostrar2['municipio']; ?> </label>
				</td>
				<td width="80">
					<label class="lb-cliente" style="font-size: 18px;">Localidad:</label>
				</td>
				<td>
					<label class="txt-cliente" style="font-size: 18px;"> <?php echo $mostrar2['localidad']; ?> </label>
				</td>
			</tr>
		</table>
		
		<table width="800" height="100" align="center">
			<tr>
				<td width="170">
					<label class="lb-cliente" style="font-size: 18px;">Calle:</label>
				</td>
				<td width="350">
					<label class="txt-cliente" style="font-size: 18px;"> <?php echo $mostrar2['calle']; ?> </label>
				</td>
				<td width="170">
					<label class="lb-cliente" style="font-size: 18px;">No° Exterior:</label>
				</td>
				<td width="350">		
					<label class="txt-cliente" style="font-size: 18px;"> <?php echo $mostrar2['no_exterior']; ?> </label>
				</td>
				<td width="170">
					<label class="lb-cliente" style="font-size: 18px;">No° Interior:</label>
				</td>
				<td width="350">
					<label class="txt-cliente" style="font-size: 18px;"> <?php echo $mostrar2['no_interior']; ?> </label>
				</td>
			</tr>
			
			<?php
		}
			?>
		</table>
		<br>
		<table width="1000">

			<tr align="center">
				<td>
					<a class="bot-reg" type="submit" id="Agregar" name="Agregar" href="trabajadoresHabilitados.php" style="text-decoration: none;">Aceptar</a>
				</td>
			</tr>			
		</table>			
	</form>
	<br><br>
	<div class="copiray" >
		<p>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</p>
		<p>Reynaldo Mena Salazar</p>
		<p>@copyright SISVEAL</p>
	</div>
	
</html>