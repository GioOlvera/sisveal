<?php
session_start();
$varsesion = $_SESSION['usuario'];


if($varsesion == null || $varsesion = ''){
	echo 'Uste no tiene Autorización';
	header("Location: ../../index.html");
	die();
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Proveedores Deshabilitados</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" >
	<meta http-equiv="X-UA-Compatible" content="le-edge">
	<link rel="stylesheet" href="../css/PrincipalEstilo.css">
	<link rel="stylesheet" href="../css/StyleClienteTabla.css" > 
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/themes/default.css">
	<link rel="icon" type="text/css"  href="../img/iCO.ico" >	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

	<script src="../../controles/librerias/jquery-3.3.1.js"></script>
	<script src="../../controles/librerias/quey.js"></script>
	<script src="../../controles/librerias/jquery.min.js"></script>	
	<script src="../../controles/librerias/bootstrap.min.js"></script>
	<script src="../../controles/librerias/select2.js"></script>
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../modelo/proveedores/tablaProveedoresH.php"></script>
	<script src="../../controles/js/tablaProveedoresD.js"></script>
	<script src="../../controles/js/ProveedorFuncion.js"></script>
 
</head>


<body>
	<!--MENU-->	
<div class="menu-horizontal" align="center">		
	<header>
		<?php include "../includes/nav.php" ?>
	</header>	
</div>	
		<!--------TABLAS-------->	
<br><br>
	<div align="center" >
		<label class="titulo" ><b>Tabla de Proveedores Deshabilitados</b></label> <br>
		<br><br>

		<label class="lb-buscador"><b>Buscador: </b></label>
		<input type="text" class="txt-buscador" id="txt-buscador" name="BuscadorC" placeholder="Buscador">
	</div>

	<div>
		<div id="datosD"></div>
		<br>
	</div>
		<!--------TABLAS-------->
<br><br>
	<div class="copiray" >
		<p>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</p>
		<p>Reynaldo Mena Salazar</p>
		<p>@copyright SISVEAL</p>
	</div>

<div>	
	<input id="" name="" type="hidden">
</div>	


<!--MODAL PARA EDITAR CLIENTES-->
<div class="modal fade" id="modaledi" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" id="piepaguinamd">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h3 class="modal-title">Datos de Proveedor</h3>
			</div>


			<div class="modal-body">
											
				<form class="form-horizontal" id="formUser">

					<div class="form-group">

						<label for="" class="control-label col-xs-5">*Nombre:</label>
						<div class="col-xs-5">							
							<input id="nombreClienteE" name="" type="text" class="form-control" placeholder="Ingrese sus Nombres">
						</div>
					</div>
					<div class="form-group">
						<label for="apCliente" class="control-label col-xs-5">*Apellido Paterno:</label>
						<div class="col-xs-5">
							<input id="apCliente" name=""  type="text" class="form-control" placeholder="Ingrese sus Apellidos">
						</div>
					</div>
					<div class="form-group">
						<label for="amCliente" class="control-label col-xs-5">*Apellido Materno:</label>
						<div class="col-xs-5">
							<input id="amCliente" name=""  type="password" class="form-control" placeholder="Ingrese sus Apellidos">
						</div>
					</div>
					<div class="form-group">
						<label for="telefonoCliente" class="control-label col-xs-5">*Teléfono:</label>
						<div class="col-xs-5">
							<input id="telefonoCliente" name=""  type="password" class="form-control" placeholder="Ingrese sus Apellidos">
						</div>
					</div>
					<div class="form-group">
						<label for="tipo" class="control-label col-xs-5">*Código Postal:</label>
						<div class="col-xs-5">
							<input id="txt-buscador" name=""  type="password" class="form-control" placeholder="Ingrese sus Apellidos">
						</div>
					</div>
					<div class="modal-footer">  
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						<input id="actualizar" type="submit" class="btn btn-success" value="Actualizar">
					</div>
					
				</form>
				
			</div>
			
		</div><!-- /.modal-content -->
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){

$('#datosD').load('../../modelo/proveedores/tablaProveedoresD.php');


});
</script>
</body>
</html>