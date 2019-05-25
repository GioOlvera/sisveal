<!DOCTYPE html>
<html lang="es">
<head>
	<title>Trabajadores Habilitados</title>
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

	<script src="../../controles/js/tablaTrabajadorH.js"></script>
	<script src="../../controles/js/trabajadorFuncion.js"></script>

 
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
		<label class="titulo" ><b>Tabla de Trabajadores Habilitados</b></label> <br>
		<br><br>

		<label class="lb-buscador"><b>Buscador: </b></label>
		<input type="text" class="txt-buscador" id="txt-buscador" name="BuscadorC" placeholder="Buscador">
	</div>

	<div>
		<div id="datos"></div>
		<br>
	</div>
		<!--------TABLAS-------->
<br><br>
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
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
				<h3 class="modal-title">Datos de Trabajadores</h3>
			</div>


			<div class="modal-body">
											
				<form class="form-horizontal" id="myformularioT">
					<input type="hidden" id="idTrabajadorT" name="" class="form-control">
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Cargo:</label>
						<div class="col-xs-5">							
							<select class="combobox form-control" id="cargo">
								<option>
									Selecciona el Cargo
								</option>
								<option>
									Chofer
								</option>
								<option>
									Cargardor 
								</option>
								<option>
									Vendedor
								</option>
								<option>
									Administrador
								</option>		
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Telèfono:</label>
						<div class="col-xs-5">
							<input id="telefonoA" name=""  type="text" class="form-control" placeholder="Ingrese el Teléfono"  maxlength="10">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Edad:</label>
						<div class="col-xs-5">
							<input id="edadA" name=""  type="text" class="form-control" placeholder="Ingrese la Edad"  maxlength="2">
						</div>
					</div>
					<div class="modal-footer">  
						<input id="actualizar" type="submit" class="btn btn-success" value="Actualizar">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>						
					</div>
					
				</form>
				
			</div>
			
		</div><!-- /.modal-content -->
	</div>
</div>
<script src="../../controles/js/trabajadorFuncion.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#datos').load('../../modelo/trabajadores/tablaTrabajadoresH.php');

$('#actualizar').click(function(){
		idTrabajadorT=$('#idTrabajadorT').val();
		cargo=$('#cargo').val();
		telefonoA=$('#telefonoA').val();
		edadA=$('#edadA').val();
		actualizarTrabajador(idTrabajadorT,cargo,telefonoA,edadA);

		/*
		if($('#nombreClienteE').val()==""){
			alertify.alert("Debes Ingresar el Código Postal");
			return false;
		}
		else if($('#apClienteE').val()=="Selecciona el Estado"){
			alertify.alert("Debes Seleccionar el Estado");
			return false;
		}else if($('#amClienteE').val()=="Selecciona el Municipio"){
			alertify.alert("Debes Seleccionar el Municipio");
			return false;
		}else if($('#telefonoClienteE').val()=="Selecciona el Localidad"){
			alertify.alert("Debes Seleccionar la Localidad");
			return false;
		}*/

	
	});


});
</script>
</body>
</html>