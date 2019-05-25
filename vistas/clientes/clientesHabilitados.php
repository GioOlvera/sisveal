<!DOCTYPE html>
<html lang="es">
<head>
	<title>Clientes Habilitados</title>
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

	
	<script src="../../controles/js/tablaClientesH.js"></script>
	<script src="../../controles/js/clienteFuncion.js"></script>
 
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
		<label class="titulo" ><b>Tabla de Clientes Habilitados</b></label> <br>
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

<!--MODAL PARA EDITAR CLIENTES-->
<div class="modal fade" id="modaledi" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" id="piepaguinamd">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h3 class="modal-title">Datos de Usuario</h3>
			</div>

			<div class="modal-body">
											
				<form class="form-horizontal" id="myformularioE">
					<input type="hidden" id="idClienteE" name="idClienteE" class="form-control">					
					<div class="form-group">
												
						<label for="" class="control-label col-xs-5">*Nombre:</label>
						<div class="col-xs-5">													
							<input id="nombreClienteE" name="" type="text" class="form-control"  placeholder="Ingrese sus Nombres">
						</div>						
					</div>
					<div class="form-group">
						<label for="apCliente" class="control-label col-xs-5">*Apellido Paterno:</label>
						<div class="col-xs-5">
							<input id="apClienteE" name=""  type="text" class="form-control" placeholder="Ingrese su Apellido">
						</div>
					</div>
					<div class="form-group">
						<label for="amCliente" class="control-label col-xs-5">*Apellido Materno:</label>
						<div class="col-xs-5">
							<input id="amClienteE" name=""  type="text" class="form-control" placeholder="Ingrese su Apellido">
						</div>
					</div>
					<div class="form-group">
						<label for="telefonoCliente" class="control-label col-xs-5">*Teléfono:</label>
						<div class="col-xs-5">
							<input id="telefonoClienteE" name=""  type="text" class="form-control" placeholder="Ingrese su Teléfono">
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

<script src="../../controles/js/clienteFuncion.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$('#datos').load('../../modelo/clientes/tablaClientesH.php');

	$('#actualizar').click(function(){
		idClienteE=$('#idClienteE').val();
		nombreClienteE=$('#nombreClienteE').val();
		apClienteE=$('#apClienteE').val();
		amClienteE=$('#amClienteE').val();
		telefonoClienteE=$('#telefonoClienteE').val();
		/*cp=$('#txt-buscadorE').val();
		cbxestado=$('#cbxestado').val();
		cbxmunicipio=$('#cbxmunicipio').val();
		cbxlocalidad=$('#cbxlocalidad').val();
		calle=$('#calle').val();
		no_exterior=$('#no_exterior').val();
		no_interior=$('#no_interior').val();*/
		actualizarCliente(idClienteE,nombreClienteE,apClienteE,amClienteE,telefonoClienteE);

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