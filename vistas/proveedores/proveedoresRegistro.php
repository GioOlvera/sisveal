<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro Proveedores</title>
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
	<script src="../../controles/librerias/jquery.min.js"></script>	
	<!--<script src="../../controles/librerias/bootstrap.min.js"></script>-->
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../controles/js/proveedorFuncion.js"></script>
	
	<script src="../../controles/js/Estado.js"></script>
	<script src="../../controles/js/Municipio.js"></script>
	<script src="../../controles/js/Localidad.js"></script> 
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
			<!--------FORMULARIO-------->	
		<div>		
			<form class="formulario" id="myformulario" >
				<h2 class="lb-cliente-t">Datos Proveedor</h2>

				<table  width="1000" height="100">
					<tr>
						<td width="135">
							<label class="lb-cliente">*Nombre:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="nombreProv" pattern="[A-Za-záéíóúÁÉÍÓÚñÑZ0-9]+" >
						</td>
						<td width="135">
							<label class="lb-cliente">*Email</label>
						</td>
						<td>
							<input type="email" class="txt-cliente" id="emailProv" placeholder="Nick@gmai.com">
						</td>
					</tr>
					<tr>
						<td width="80">
							<label class="lb-cliente">RFC:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="rfcProv" placeholder="R0DD970213" maxlength="10" pattern="[A-Z0-9]+" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
						</td>
						<td width="80">
							<label class="lb-cliente">*Teléfono:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="telefonoProv" placeholder="2481342345" pattern="[0-9]{8,10}">
						</td>
					</tr>
				</table>

		<br><br>

	    <h2 class="lb-cliente-t" align="center">Datos Dirección</h2>

				<table width="1000" height="100">

					<tr>
						<td width="135">
							<label class="lb-cliente">*Código Postal:</label>
						</td>	
						<td width="400">
							<input type="text" class="txt-cliente" id="txt-buscador" placeholder="74100" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" maxlength="6">
						</td>
						<td width="135">
							<label class="lb-cliente">*Estado:</label>
						</td>
						<td width="400">
							<div id="EstadoDATOS">
						</td>
					</tr>

					<tr>
						<td width="80">
							<label class="lb-cliente">*Municipio:</label>
						</td>
						<td>
							<div id="MunicipioDATOS">
						</td>
						<td width="80">
							<label class="lb-cliente">*Localidad:</label>
						</td>
						<td>
							<div id="LocalidadDATOS">
						</td>
					</tr>
				</table>

				<table width="1000" height="100">
					<tr>
						<td>
							<label class="lb-cliente">*Calle:</label>
						</td>
						<td width="500">
							<input type="text" class="txt-cliente" id="calle" placeholder="Benito J." >
						</td>
						<td>
							<label class="lb-cliente">*No° Exterior:</label>
						</td>
						<td>		
							<input type="text" class="txt-cliente" id="no_exterior" placeholder="1">
						</td>
						<td>
							<label class="lb-cliente">*No° Interior:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="no_interior" placeholder="2" >
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
					nombreProv=$('#nombreProv').val();
					emailProv=$('#emailProv').val();
					rfcProv=$('#rfcProv').val();
					telefonoProv=$('#telefonoProv').val();
					cp=$('#txt-buscador').val();
					cbxestado=$('#cbxestado').val();
					cbxmunicipio=$('#cbxmunicipio').val();
					cbxlocalidad=$('#cbxlocalidad').val();
					calle=$('#calle').val();
					no_exterior=$('#no_exterior').val();
					no_interior=$('#no_interior').val();
					agregardatosP(nombreProv,emailProv,rfcProv,telefonoProv,cp,
						cbxestado,cbxmunicipio,cbxlocalidad,calle,no_exterior,no_interior);

					if ($('#nombreProv').val()==""){
						alertify.alert("Debes Ingresar el Nombre del Proveedor");
						return false;
					}else if($('#emailProv').val()==""){
						alertify.alert("Debes Ingresar el Correo Eléctronico");
						return false;
					}else if($('#telefonoProv').val()==""){
						alertify.alert("Debes Ingresar un No° Teléfono");
						return false;
					}

					else if($('#txt-buscador').val()==""){
						alertify.alert("Debes Ingresar el Código Postal");
						return false;
					}else if($('#cbxestado').val()=="Selecciona el Estado"){
						alertify.alert("Debes Seleccionar el Estado");
						return false;
					}else if($('#cbxmunicipio').val()=="Selecciona el Municipio"){
						alertify.alert("Debes Seleccionar el Municipio");
						return false;
					}else if($('#cbxlocalidad').val()=="Selecciona el Localidad"){
						alertify.alert("Debes Seleccionar la Localidad");
						return false;
					}else if($('#calle').val()==""){
						alertify.alert("Debes Ingresar la Calle");
						return false;
					}else if($('#no_exterior').val()==""){
						alertify.alert("Debes Ingresar el No° Exterior");
						return false;
					}else if($('#no_interior').val()==""){
						alertify.alert("Debes Ingresar un No° Interior");
						return false;
					}

			});

		});
	</script>

	<br><br>
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>
</body>
</html>