<!DOCTYPE html>
<html>
<head>
	<title>Información Producto</title>

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
		<!--MENU DE NOTIFICACIONES-->	
<div align="center" >			
		<?php include "../includes/header.php" ?>		
</div>

	<!--MENU-->	
<div class="menu-horizontal" align="center">		
	<header>
		<?php include "../includes/nav.php" ?>
	</header>	
</div>	

	<form class="formulario" id="myformulario" action="" method="POST">
		<h2 class="lb-cliente-t">Información del Prodcuto</h2>

		<?php

		require_once "../../modelo/conexion/conexion.php";
		$clvProducto = $_GET['clvProducto'];

		$sql2="SELECT * FROM producto WHERE clvProducto='$clvProducto'"; 

		$resultado=mysqli_query($conexion, $sql2);
		while($mostrar=mysqli_fetch_array($resultado)){

		?>

		<table  width="1000" height="150" align="center">
			<tr>
				<td width="400">
					<label class="lb-cliente" style="font-size: 18px;">Nombre de Producto:</label>
				</td>
				<td width="500">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['nombre']; ?></label>
				</td>
				<td width="400">
					<label class="lb-cliente" style="font-size: 18px;">Descripcion del Producto:</label>
				</td>
				<td width="500">
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['descripcion']; ?></label>
				</td>
			</tr>
			<tr>
				<td width="400">
					<label class="lb-cliente" style="font-size: 18px;">Tipo de Producto:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['categoriaProd']; ?> </label>
				</td>
				<td width="400">
					<label class="lb-cliente" style="font-size: 18px;">Unidad de Medida:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['unidadMedida']; ?></label>
				</td>
			</tr>
			<tr>
				<td width="400">
					<label class="lb-cliente" style="font-size: 18px;">Dias en que Caduca:</label>
				</td>
				<td >
					<label class="txt-cliente" style="font-size: 18px;"><?php echo $mostrar['tiempoCaducidad']; ?> </label>
				</td>
				
			</tr>
		</table>
		<?php
			}
		?>
		<br>
		<table width="1000">

			<tr align="center">
				<td>
					<a class="bot-reg" type="submit" id="Agregar" name="Agregar" href="productoTabla.php" style="text-decoration: none;">Aceptar</a>
				</td>
			</tr>
			
		</table>		
	</form>
	<br><br>
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>
	
</html>