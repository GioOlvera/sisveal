<!DOCTYPE html>
<html lang="es">
<head>
	<title>Tabla de Productos</title>
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

	<script src="../../controles/js/productoFuncion.js"></script>
	<script src="../../controles/js/productoTabla.js"></script>
 
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

		<!--------TABLAS-------->	
<br><br>
	<div align="center" >
		<label class="titulo" ><b>Tabla de Productos</b></label> <br>
		<br><br>

		<label class="lb-buscador"><b>Buscador: </b></label>
		<input type="text" class="txt-buscador" id="txt-buscador" name="BuscadorC" placeholder="Buscador">
	</div>

	<div>
		<div id="datosProducto"></div>
		<br>
	</div>
		<!--------copy-------->
<br><br>

	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>

<!--MODAL PARA EDITAR CLIENTES-->
<div class="modal fade" id="modaledi" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" id="piepaguinamd">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h3 class="modal-title">Datos de Producto</h3>
			</div>

			<div class="modal-body">
											
				<form class="form-horizontal" id="myformularioProdE">
					<input type="hidden" id="idProductoE" name="idProductoE" class="form-control">					
					<div class="form-group">
												
						<label for="" class="control-label col-xs-5">Nombre del Producto:</label>
						<div class="col-xs-5">													
							<input id="nombreProductoE" name="" type="text" class="form-control"  placeholder="Ingrese un Nombre" maxlength="20">
						</div>						
					</div>
					<div class="form-group">
						<label for="" class="control-label col-xs-5">Descripción:</label>
						<div class="col-xs-5">
							<input id="descProductoE" name=""  type="text" class="form-control" placeholder="Ingrese una Descripción" maxlength="30">
						</div>
					</div>
					<div class="form-group">
						<label for="amCliente" class="control-label col-xs-5">Tipo de Carne:</label>
						<div class="col-xs-5">
							<select class="combobox form-control" id="tipoCarneE">
								<option value="1">Selecciona el Tipo</option>
  								<option value="Res">Res</option>
  								<option value="Puerco">Puerco</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="telefonoCliente" class="control-label col-xs-5">Tipo de Medida:</label>
						<div class="col-xs-5">
							<select class="combobox form-control" id="unidadMedE">
  								<option value="1">Selecciona la Medida</option>
  								<option value="pza y kls">Pieza y Kilos</option>
  								<option value="cajas y pza">Cajas y pieza</option>
  								<option value="kl y cajas">kilogramos y Cajas</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="telefonoCliente" class="control-label col-xs-5">Tiempo de Caducidad:</label>
						<div class="col-xs-5">
							<select class="combobox form-control" id="tiempCadE">
  								<option value="1">Selecciona la Caducidad</option>
  								<option value="7">1 Semana</option>
  								<option value="14">2 Semana</option>
  								<option value="21">3 Semana</option>
  								<option value="28">4 Semana</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">  
						<input id="actualizar" type="submit" class="btn btn-success" value="Actualizar">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>					
				</form>				
			</div>			
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){

	$('#datosProducto').load('../../modelo/producto/tablaProducto.php');

	$('#actualizar').click(function(){
		idProductoE=$('#idProductoE').val();
		nombreProductoE=$('#nombreProductoE').val();
		descProductoE=$('#descProductoE').val();
		tipoCarneE=$('#tipoCarneE').val();
		unidadMedE=$('#unidadMedE').val();
		tiempCadE=$('#tiempCadE').val();

		actualizarProducto(idProductoE,nombreProductoE,descProductoE,tipoCarneE,unidadMedE,tiempCadE);
	
	});
});
</script>

</body>
</html>