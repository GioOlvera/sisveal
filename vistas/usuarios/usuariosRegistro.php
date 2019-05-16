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
	<title>Registro Usuario</title>
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
	<script src="../../controles/librerias/quey.js"></script>
	<script src="../../controles/librerias/jquery.min.js"></script>	
	<!--<script src="../../controles/librerias/bootstrap.min.js"></script>-->
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../controles/js/usuarioFuncion.js"></script>
	
	<script src="../../controles/js/buscarTrabajador.js"></script>
</head>


<body>
	<!--MENU-->	
<div class="menu-horizontal" align="center">		
	<header>
		<?php include "../includes/nav.php" ?>
	</header>	
</div>			
			<!--------FORMULARIO-------->	
		<div>		
			<form class="formulario" id="myformulario" >
				<h2 class="lb-cliente-t">Datos trabajador</h2>

				<table  width="1000" height="100">
					<tr>
						<td width="130">
							<label class="lb-cliente">*Id Trabajador:</label>
						</td>
						<td width="250">
							<input type="text" class="txt-cliente" id="txt-buscadorTrabajador" name="" placeholder="Buscador" required="required"> 
						</td>
						<td width="130">
							<label class="lb-cliente">Nombre:</label>
						</td>
						<td width="250">
							<div id="nombreDATOS">
						</td>
					</tr>
					<tr>
						<td width="80">
							<label class="lb-cliente">Apellido Paterno:</label>
						</td>
						<td>
							<div id="apDatos">
						</td>
						<td width="80">
							<label class="lb-cliente">Apellido Materno:</label>
						</td>
						<td>
							<div id="amDatos">
						</td>
					</tr>
				</table>

		<br><br>

	    <h2 class="lb-cliente-t" align="center">Registrar Usuario</h2>

				<table width="1000" height="100">

					<tr>
						<td width="135">
							<label class="lb-cliente">*Correo Electronico:</label>
						</td>	
						<td width="400">
							<input type="email" class="txt-cliente" id="correoE" name="" placeholder="Nick@gmail.com" required="required">
						</td>
						<td width="135">
							<label class="lb-cliente">*Usuario:</label>
						</td>
						<td width="400">
							<input type="text" class="txt-cliente" id="usuario" name="" placeholder="Nick" required="required">
						</td>
					</tr>

					<tr>
						<td width="80">
							<label class="lb-cliente">*Contraseña:</label>
						</td>
						<td>
							<input type="password" class="txt-cliente" id="password" name="" required="required">
						</td>
						<td width="80">
							<label class="lb-cliente">*Verificación del Contraseña:</label>
						</td>
						<td>
							<input type="password" class="txt-cliente" id="password2" name="" required="required">
						</td>
					</tr>
				</table>

				<br>
				<table width="1000">

					<tr align="center">
					    <td>
							<button class="bot-reg" type="submit" id="Agregar">Registrar</button>					
						</td>
						<td>

						</td>
					</tr>
				</table>
			</form>
		</div>

	<script type="text/javascript">
		$(document).ready(function(){

				$('#Agregar').click(function(){
					idTrabajador=$('#txt-buscadorTrabajador').val();
					cargo=$('#cargo').val();
					correoE=$('#correoE').val();
					usuario=$('#usuario').val();
					password=$('#password').val();
					password2=$('#password2').val();
					
					if ($('#txt-buscadorTrabajador').val()==""){
						alertify.alert("Debe Ingresar el ID de un Trabajador");
						return false;
					}else if($('#correoE').val()==""){
						alertify.alert("Debe Ingresar el Correo Eléctronico");
						return false;
					}else if($('#usuario').val()==""){
						alertify.alert("Debe Ingresar un Usuario");
						return false;
					}else if($('#password').val()==""){
						alertify.alert("Debe Ingresar una Contraseña");
						return false;
					}else if($('#password2').val()==""){
						alertify.alert("Debe Volver a Ingresar la Contraseña");
						return false;
					}

					if (password == password2){
						agregardatosU(idTrabajador,cargo,correoE,usuario,password);											
					}else{
							alertify.alert("Debe Ingresar la Misma Contraseña");
							return false;
					}
			});

		});
	</script>

	<br><br>
	<div class="copiray" >
		<p>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</p>
		<p>Reynaldo Mena Salazar</p>
		<p>@copyright SISVEAL</p>
	</div>
</body>
</html>