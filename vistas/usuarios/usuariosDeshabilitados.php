<!DOCTYPE html>
<html lang="es">
<head>
	<title>Usuarios Deshabilitados</title>
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

	<script src="../../controles/js/tablaUsuarioD.js"></script>
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
		<label class="titulo" ><b>Tabla de Usuarios Deshabilitados</b></label> <br>
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
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>

<div>	
	<input id="" name="" type="hidden">
</div>	

<script src="../../controles/js/usuarioFuncion.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#datosD').load('../../modelo/usuarios/tablaUsuariosD.php');


});
</script>
</body>
</html>