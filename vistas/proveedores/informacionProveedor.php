<!DOCTYPE html>
<html>
<head>
	<title>Información Proveedor</title>

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

	<form class="formulario" id="myformulario" action="" method="POST">
		<h2 class="lb-cliente-t">Información del Proveedor</h2>

		<?php

		require_once "../../modelo/conexion/conexion.php";
		$idProveedor = $_GET['idProveedor'];

		$sql2="SELECT idProveedor, nombreProveedor, email, RFC, telefono FROM proveedor WHERE idProveedor='$idProveedor'";  
		$resultado=mysqli_query($conexion, $sql2);
		while($mostrar=mysqli_fetch_array($resultado)){

		?>

		<table  width="800" height="100" align="center">
			<tr>
				<td width="50">
					<label class="lb-cliente" style="font-size: 18px;">Nombre:</label>
				</td>
				<td width="300">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['nombreProveedor']; ?></label>
				</td>
				<td width="50">
					<label class="lb-cliente" style="font-size: 18px;">Email:</label>
				</td>
				<td width="300">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['email']; ?></label>
				</td>
			</tr>
			<tr>
				<td width="50">
					<label class="lb-cliente" style="font-size: 18px;">RFC:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['RFC']; ?> </label>
				</td>
				<td width="50">
					<label class="lb-cliente" style="font-size: 18px;">Teléfono:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['telefono']; ?></label>
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

		$sql3="SELECT idProveedor, cp, estado, municipio, localidad, calle, no_exterior, no_interior FROM direccionproveedor WHERE idProveedor='$idProveedor'";  
		$resultado2=mysqli_query($conexion, $sql3);
		while($mostrar2=mysqli_fetch_array($resultado2)){

		?>

		
		<script>
			
		</script>

		<table width="1000" height="100" align="center">

			<tr>
				<td width="150">
					<label class="lb-cliente" style="font-size: 18px;">Código Postal:</label>
				</td>	
				<td width="300">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar2['cp']; ?></label>
				</td>
				<td width="150">
					<label class="lb-cliente" style="font-size: 18px;">Estado:</label>
				</td>
				<td width="300">
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
					<a class="bot-reg" type="submit" id="Agregar" name="Agregar" href="proveedoresHabilitados.php" style="text-decoration: none;">Aceptar</a>
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