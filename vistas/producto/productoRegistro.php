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
	<script src="../../controles/js/jquery.dataTables.min.js"></script>

	<script src="../../controles/librerias/quey.js"></script>
	<script src="../../controles/librerias/jquery.min.js"></script>	
	<!--<script src="../../controles/librerias/bootstrap.min.js"></script>-->
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../controles/js/ventaFuncion.js"></script>	
	<script src="../../controles/js/buscarProveedor.js"></script>	
	
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
						<li class="subProveli"><a href="#Estado-Proveedor" id="DeshabilitadosProv" class="activeProve">Proveedores Deshabilitados</a>
						</li>
					</ul>
				</li>
				<li class="mnli"><img src="../img/trabajadores.png" class="icon-clie"><a href="#Trabajadores" id="Trabajadores2" class="active">TRABAJADORES</a>
					<ul class="subTraba" id="subClientes">
						<li class="subTrabali"><a href="../trabajadores/trabajadoresRegistro.php" id="FormularioTrab" class="activeTraba">Registrar Trabajador</a></li>
						<li class="subTrabali"><a href="../trabajadores/trabajadoresHabilitados.php" id="HabilitadosTrab" class="activeTraba">Trabajadores Habilitados</a></li>
						<li class="subTrabali"><a href="../trabajadores/trabajadoresDeshabilitados.php" id="DeshabilitadosTrab" class="activeTraba">Trabajadores Deshabilitados</a></li>
					</ul>

				</li>
				<li class="mnli"><img src="../img/usuario.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">USUARIOS</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="../usuarios/usuarioRegistro.php" id="FormularioClie" class="activeUsuario">Registrar Usuaio</a></li>
						<li class="subUsuarioli"><a href="../usuarios/usuarioHabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Habilitados</a></li>
						<li class="subUsuarioli"><a href="../usuarios/usuarioDeshabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Deshabilitados</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="../img/venta.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">VENTAS</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">Realizar venta</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">Realizar venta Acredito</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Deshabilitados.php" id="FormularioClie" class="activeUsuario">Pedido</a></li>
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
						<li class="subUsuarioli"><a href="producto/productoRegistro.php" id="FormularioClie" class="activeUsuario">Registrar Producto</a></li>
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
	<header class="header-for">
		<div>		
			<form class="formulario" id="myformularioProd" >
				<h2 class="lb-cliente-t">Datos Producto</h2>

				<table  width="1000" height="100">
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
							<textarea rows="8" cols="20" class="txt-cliente" id="descProducto" placeholder="Comentarios..."></textarea>
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

				<table  width="1000" height="100">
					<tr>
						<td width="135">
							<label class="lb-cliente">*Precio de Compra:</label>
						</td>
						<td>
							<input type="number" class="txt-cliente" id="precioC" placeholder="$...">
						</td>
						<td width="135">
							<label class="lb-cliente">*Precio de Venta:</label>
						</td>
						<td>
							<input type="number" class="txt-cliente" id="precioV" placeholder="$...">
						</td>
					</tr>
					<tr>
						<td width="80">
							<label class="lb-cliente">*Unidades de la Caja:</label>
						</td>
						<td>							
							<input type="number" class="txt-cliente" id="unidadesC" placeholder="">
						</td>
						<td width="80">
							<label class="lb-cliente">*Kilogramos de Cada Unidad:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="unidadesK" placeholder="">
						</td>
					</tr>
				</table>
					<br><br>
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
					nombreProducto=$('#nombreProducto').val();
					proveedor=$('#proveedor').val();
					descProducto=$('#descProducto').val();
					tipoCarne=$('#tipoCarne').val();
					precioC=$('#precioC').val();
					precioV=$('#precioV').val();
					unidadesC=$('#unidadesC').val();
					unidadesK=$('#unidadesK').val();
					agregarProducto(nombreProducto,proveedor,descProducto,tipoCarne,precioC,
						precioV,unidadesC,unidadesK);

					if ($('#nombreProducto').val()==""){
						alertify.alert("Debes Ingresar el Nombre del Producto");
						return false;
					}else if($('#proveedor').val()==""){
						alertify.alert("Debes Seleccionar el Proveedor");
						return false;
					}else if($('#descProducto').val()==""){
						alertify.alert("Debes Ingresar una Descripción de Producto");
						return false;
					}else if($('#tipoCarne').val()=="Selecciona el Tipo"){
						alertify.alert("Debes Seleccionar el Tipo");
						return false;
					}else if($('#precioC').val()==""){
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
	</header>
</body>
</html>