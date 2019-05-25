<!DOCTYPE html>
<html lang="es">
<head>
	<title>Usuarios Habilitados</title>
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

	<script src="../../controles/js/tablaUsuarioH.js"></script>
	<script src="../../controles/js/usuarioFuncion.js"></script>

 
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
		<label class="titulo" ><b>Tabla de Usuarios Habilitados</b></label> <br>
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
				<h3 class="modal-title">Datos de Usuario</h3>
			</div>


			<div class="modal-body">
											
				<form class="form-horizontal" id="myformularioU">
					<input type="hidden" id="idTrabajadorU" name="" class="form-control">
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Usuario:</label>
						<div class="col-xs-5">							
							<input id="usuarioU" name=""  type="text" class="form-control" placeholder="Ingrese el Usuario"  maxlength="30">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Email:</label>
						<div class="col-xs-5">							
							<input id="emailU" name=""  type="text" class="form-control" placeholder="Ingrese el Correo Electrónico"  maxlength="30">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Contraseña:</label>
						<div class="col-xs-5">
							<input id="passwordU" name=""  type="password" class="form-control" placeholder="Ingrese la Contraseña"  maxlength="20">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-xs-5">*Repetir Contraseña:</label>
						<div class="col-xs-5">
							<input id="passwordU2" name=""  type="password" class="form-control" placeholder="Ingrese la Contraseña"  maxlength="20">
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
<script src="../../controles/js/usuarioFuncion.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#datos').load('../../modelo/usuarios/tablaUsuariosH.php');

$('#actualizar').click(function(){

		idTrabajadorU=$('#idTrabajadorU').val();
		usuarioU=$('#usuarioU').val();
		emailU=$('#emailU').val();
		password=$('#passwordU').val();
		password2=$('#passwordU2').val();

	
		
		if($('#usuarioU').val()==""){
			alertify.alert("Debes Ingresar el Usuario");
			return false;
		}else if($('#emailU').val()=="Ingresar el Correo Electrónico"){
			alertify.alert("Debes Seleccionar el Estado");
			return false;
		}else if($('#passwordU').val()=="Ingrese una Contraseña"){
			alertify.alert("Debes Seleccionar el Municipio");
			return false;
		}else if($('#passwordU2').val()=="Ingrese una Contraseña"){
			alertify.alert("Debes Seleccionar la Localidad");
			return false;
		}

		if (password == password2){
				actualizarUsuario(idTrabajadorU,usuarioU,emailU,password);											
		}else{
				alertify.alert("Debe Ingresar la Misma Contraseña");
				return false;
		}

	
	});


});
</script>
</body>
</html>