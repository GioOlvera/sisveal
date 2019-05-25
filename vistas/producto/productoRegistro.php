<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro Producto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" >
	<meta http-equiv="X-UA-Compatible" content="le-edge">
	<link rel="stylesheet" href="../css/PrincipalEstilo.css">
	<link rel="stylesheet" href="../css/formClientes.css" > 
	<link rel="stylesheet" href="../css/buscador.css" > 
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/themes/default.css">
	<link rel="icon" type="text/css"  href="../img/iCO.ico" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="../../controles/librerias/jquery-3.3.1.js"></script>
	<!--<script src="../../controles/js/jquery.dataTables.min.js"></script>-->

	<script src="../../controles/librerias/quey.js"></script>
	<script src="../../controles/librerias/jquery.min.js"></script>	
	<script src="../../controles/librerias/bootstrap.min.js"></script>
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../controles/js/productoFuncion.js"></script>	
	<script src="../../controles/js/buscarProveedor.js"></script>
	
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
	<header class="header-for" >
		<div>		
			<form class="formulario" id="myformularioProd" >
				<h1 class="lb-cliente-t">Registro de Productos</h1>
				<br>
				<h2 class="lb-cliente-t">Datos Producto</h2>

				<table  width="1000" height="100" >
					<tr>
						<td width="135">
							<label class="lb-cliente">*Nombre del Producto:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="nombreProducto" placeholder="Carne" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+" >
						</td>
						<td width="135">
							<label class="lb-cliente">*Proveedor que lo Distribuye:</label>
						</td>
						<td style="position: absolute;">
							<input type="hidden" class="txt-cliente" id="idProveedorRP">
							<input class="txt-cliente" id="buscadorProveedor" list="listaProv" placeholder="Buscar...">
							<div id="proveedorDATOS">
						</td>
					</tr>
					<tr>
						<td width="80">
							<label class="lb-cliente">*Descripción:</label>
						</td>
						<td>	
						<br>						
							<textarea rows="4" cols="20" class="txt-cliente" id="descProducto" placeholder="Limite 30 Caracteres..." maxlength="30"></textarea>
						</td>
						<td width="80">
							<label class="lb-cliente">*Tipo de carne:</label>
						</td>
						<td>
							<select class="txt-cliente" id="tipoCarne">
								<option value="1">Selecciona el Tipo</option>
  								<option value="Res">Res</option>
  								<option value="Puerco">Puerco</option>
							</select>
						</td>
					</tr>
				</table>
				<br><br>
				<h2 class="lb-cliente-t">Datos Producto Detalles</h2>

				<table  width="950" height="60">
					<tr>
						<td width="50">
							<label class="lb-cliente">*Unidad de Medida:</label>
						</td>
						<td width="100">							
							<select class="txt-cliente" id="unidadMed">
  								<option value="1">Selecciona la Medida</option>
  								<option value="pza y kls">Pieza y Kilos</option>
  								<option value="cajas y pza">Cajas y pieza</option>
  								<option value="kls y cajas">kilogramos y Cajas</option>
							</select>
						</td>
						<td width="70">
							<label class="lb-cliente">*Tiempo en que se Caduca:</label>
						</td>
						<td width="110">
							<select class="txt-cliente" id="tiempCad">
  								<option value="1">Selecciona la Caducidad</option>
  								<option value="7">1 Semana</option>
  								<option value="14">2 Semana</option>
  								<option value="21">3 Semana</option>
  								<option value="28">4 Semana</option>
							</select>							
						</td>
					</tr>
					<!--
					<tr>
						<td width="80">
							<label class="lb-cliente">*Unidad de Cajas:</label>
						</td>
						<td>							
							<input type="text" class="txt-cliente" id="unidadesC" placeholder="">
						</td>
						<td width="80">
							<label class="lb-cliente">*Kilogramos de Cajas o :</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="unidadesK" placeholder="">
							
						</td>
					</tr>
					<tr>
						<td width="135">
							<label class="lb-cliente">*Precio de Compra:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="precioC" placeholder="$...">
						</td>
						<td width="135">
							<label class="lb-cliente">*Precio de Venta:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="precioV" placeholder="$...">
						</td>
					</tr>
					-->
				</table>
					<br>
				<table width="1000">

					<tr align="center">
					    <td>
							<button class="bot-reg" type="submit" id="Agregar">Registrar</button>					
						</td>
					</tr>
				</table>
			</form>
		</div>
	<!--<script src="../../controles/js/productoFuncion.js"></script>-->
	<script type="text/javascript">
		$(document).ready(function(){

				$('#Agregar').click(function(){
					idProveedorRP=$('#idProveedorRP').val();
					nombreProducto=$('#nombreProducto').val();
					descProducto=$('#descProducto').val();
					tipoCarne=$('#tipoCarne').val();
					unidadMed=$('#unidadMed').val();
					tiempCad=$('#tiempCad').val();					
					/*unidadesC=$('#unidadesC').val();
					unidadesK=$('#unidadesK').val();
					precioC=$('#precioC').val();
					precioV=$('#precioV').val();*/
					agregarProducto(idProveedorRP,nombreProducto,descProducto,tipoCarne,unidadMed,tiempCad/*,unidadesC,unidadesK,precioC,precioV*/);

					if ($('#nombreProducto').val()==""){
						alertify.alert("Debes Ingresar el Nombre del Producto");
						return false;
					}else if($('#idProveedorRP').val()==""){
						alertify.alert("Debes Seleccionar el Proveedor");
						return false;
					}else if($('#descProducto').val()==""){
						alertify.alert("Debes Ingresar una Descripción de Producto");
						return false;
					}else if($('#tipoCarne').val()=="Selecciona el Tipo"){
						alertify.alert("Debes Seleccionar el Tipo");
						return false;
					}else if($('#unidadMed').val()=="Selecciona la Medida"){
						alertify.alert("Debes Seleccionar la Caducidad");
						return false;
					}else if($('#tiempCad').val()=="Selecciona la Caducidad"){
						alertify.alert("Debes Seleccionar el Tipo");
						return false;
					}
					/*else if($('#precioC').val()==""){
						alertify.alert("Debes Ingresar el Precio de Compra");
						return false;
					}else if($('#precioV').val()==""){
						alertify.alert("Debes Ingresar el Precio de venta");
						return false;
					}else if($('#unidadesC').val()==""){
						alertify.alert("Debes Ingresar Unidades de Cada Caja");
						return false;
					}else if($('#unidadesK').val()==""){
						alertify.alert("Debes Ingresar los Kilos de Cada Unidad");
						return false;
					}*/

			});

		});
	</script>

	<br><br>
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>
	</header>
</body>
</html>