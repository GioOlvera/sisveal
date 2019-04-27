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
	<title>Registro Trabajado</title>
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

	<script src="../../controles/js/trabajadorFuncion.js"></script>
	
	<script src="../../controles/js/Estado.js"></script>
	<script src="../../controles/js/Municipio.js"></script>
	<script src="../../controles/js/Localidad.js"></script> 
</head>


<body>
	<!--MENU-->	
<div class="menu-horizontal" align="center">		
	<header>
		<nav class="nav">
			<ul class="mnul" id="n-bar">
				<li class="mnli"><img src="../img/inicio.png" class="icon-clie"><a href="../InicioPrincipal.php" id="inicio" class="active">INICIO</a>
				</li>

				<li class="mnli"><img src="../img/cliente.png" class="icon-clie"><a href="#Clientes" id="" class="active">CLIENTES</a> 
					<ul class="subClientes" id="subClientes">
						<li class="subClientesli"><a href="../clientes/clientesRegistro.php" id="FormularioClie" class="activeClie">Registrar Cliente</a></li>
						<li class="subClientesli"><a href="../clientes/clientesHabilitados.php" id="HabilitadosClie" class="activeClie">Clientes Habilitados</a></li>
						<li class="subClientesli"><a href="../clientes/clientesDeshabilitados.php" id="DeshabilitadosClie" class="activeClie">Clientes Deshabilitados</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/Prov.png" class="icon-clie"><a href="#" id="Estado2" class="active">PROVEEDORES</a> 
					<ul class="subProve" id="subProve">

						<li class="subProveli"><a href="../proveedores/proveedoresRegistro.php" id="FormularioProv" class="activeProve">Registrar Proveedor</a>
						</li>
						<li class="subProveli"><a href="../proveedores/proveedoresHabilitados.php" id="DeshabilitadosProv" class="activeProve">Proveedores Habilitados</a>
						</li>
						<li class="subProveli"><a href="../proveedores/proveedoresDeshabilitados.php" id="DeshabilitadosProv" class="activeProve">Proveedores Deshabilitados</a>
						</li>
					</ul>
				</li>
				<li class="mnli"><img src="../img/trabajadores.png" class="icon-clie"><a href="#Trabajadores" id="Trabajadores2" class="active">TRABAJADORES</a>
					<ul class="subTraba" id="subClientes">
						<li class="subTrabali"><a href="trabajadoresRegistro.php" id="FormularioTrab" class="activeTraba">Registrar Trabajador</a></li>
						<li class="subTrabali"><a href="trabajadoresHabilitados.php" id="HabilitadosTrab" class="activeTraba">Trabajadores Habilitados</a></li>
						<li class="subTrabali"><a href="trabajadoresDeshabilitados.php" id="DeshabilitadosTrab" class="activeTraba">Trabajadores Deshabilitados</a></li>
					</ul>

				</li>
				<li class="mnli"><img src="../img/usuario.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">USUARIOS</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">Registrar Usuaio</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Habilitados</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Deshabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Deshabilitados</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/venta.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">VENTAS</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">Realizar venta</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">Pedido</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Deshabilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/almacen.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">ALMACEN</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Deshabilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/estado.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">ESTADO</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/prod.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">PRODUCTO</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/historial.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">HISTORIAL</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/ticket.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">TICKET</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/Ayuda.png" class="icon-clie"><a href="#" class="active">AYUDA</a></li>
				<form action="CerrarSesion.php" method="POST">
					<li class="mnli" ><a href="../../cerrar.php" class="activeUsuario1"><img src="../img/cerrar.png" class="icon-clie" >CERRAR SESIÓN</a> 
						<a class="activeUsuario2" href="../../cerrar.php">Usuario: <?php echo $_SESSION['usuario']; ?></a>
					</li>
				</form>
			</ul>
		</nav>
	</header>	
</div>			
			<!--------FORMULARIO-------->	
		<div>		
			<form class="formulario" id="myformulario" >
				<h2 class="lb-cliente-t">Datos Trabajador</h2>

				<table  width="1000" height="100">
					<tr>
						<td width="135" height="50">
							<label class="lb-cliente">*Nombre:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="nombreTrab" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+" placeholder="Nick">
						</td>
						<td width="135" height="50">
							<label class="lb-cliente">*Apellido Paterno:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="apTrab" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+" placeholder="Nick">
						</td>
					</tr>
					<tr>
						<td width="80" height="50">
							<label class="lb-cliente">*Apellido Materno:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="amTrab" pattern="[A-Za-záéíóúÁÉÍÓÚñÑ ]+" placeholder="Nick">
						</td>
						<td width="80" height="50">
							<label class="lb-cliente">*Teléfono:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="telefonoTrab" pattern="[0-9]{8,10}" placeholder="2481342345">
						</td>
					</tr>
					<tr>
						<td width="80" height="50">
							<label class="lb-cliente">*Edad:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="edadTrab" pattern="[0-9]{1,2}" placeholder="30">
						</td>
						<td width="80" height="50">
							<label class="lb-cliente">*Fecha de Nacimiento:</label>
						</td>
						<td>
							<input type="date" class="txt-cliente" id="fechaTrab" required="required">
						</td>
					</tr>
					<tr>
						<td width="80" height="50">
							<label class="lb-trabajador">*Cargo:</label>
						</td>
						<td>
							<select class="cargo" id="cargo">
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
							<input type="text" class="txt-cliente" id="txt-buscador" placeholder="74100" >
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
					nombreTrab=$('#nombreTrab').val();
					apTrab=$('#apTrab').val();
					amTrab=$('#amTrab').val();
					telefonoTrab=$('#telefonoTrab').val();
					edadTrab=$('#edadTrab').val();
					fechaTrab=$('#fechaTrab').val();
					cargo=$('#cargo').val();
					cp=$('#txt-buscador').val();
					cbxestado=$('#cbxestado').val();
					cbxmunicipio=$('#cbxmunicipio').val();
					cbxlocalidad=$('#cbxlocalidad').val();
					calle=$('#calle').val();
					no_exterior=$('#no_exterior').val();
					no_interior=$('#no_interior').val();
					agregardatosT(nombreTrab,apTrab,amTrab,telefonoTrab,edadTrab,fechaTrab,cargo,cp,
						cbxestado,cbxmunicipio,cbxlocalidad,calle,no_exterior,no_interior);

					if ($('#nombreTrab').val()==""){
						alertify.alert("Debes Ingresar el Nombre del Proveedor");
						return false;
					}else if($('#apTrab').val()==""){
						alertify.alert("Debes Ingresar el Apellido Paterno");
						return false;
					}else if($('#amTrab').val()==""){
						alertify.alert("Debes Ingresar el Apellido Materno");
						return false;
					}else if($('#telefonoTrab').val()==""){
						alertify.alert("Debes Ingresar un No° Teléfono");
						return false;
					}else if($('#edadTrab').val()==""){
						alertify.alert("Debes Ingresar la Edad");
						return false;
					}else if($('#fechaTrab').val()=="dd/mm/aaaa"){
						alertify.alert("Debes Ingresar la Fecha de Nacimiento");
						return false;
					}else if($('#cargo').val()=="Selecciona el Cargo"){
						alertify.alert("Debes Ingresar el Cargo");
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
	<div class="copiray" >
		<p>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</p>
		<p>Reynaldo Mena Salazar</p>
		<p>@copyright SISVEAL</p>
	</div>
</body>
</html>