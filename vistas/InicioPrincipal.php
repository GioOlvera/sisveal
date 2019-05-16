<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
	echo 'Uste no tiene Autorización';
	header("Location: ../index.html");
	die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" >
	<meta http-equiv="X-UA-Compatible" content="le-edge">
	<link rel="stylesheet" href="css/PrincipalEstilo.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/alertify.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/select2.css">
	<!--<link href="css/all.min.css" rel="stylesheet" type="text/css">-->
	<!--<link href="css/sb-admin-2.min.css" rel="stylesheet">-->
	<link rel="icon" type="ima/iCO.icon"  href="img/iCO.ico" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="../controles/librerias/jquery-3.3.1.js"></script>
	<script src="../controles/librerias/quey.js"></script>
	<script src="../controles/librerias/jquery.min.js"></script>
	<script src="../controles/librerias/jquery-3.3.1.js"></script>	
	<script src="../controles/librerias/jquery.easing.min.js"></script>
	<script src="../controles/librerias/bootstrap.min.js"></script>
	<script src="../controles/librerias/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>

<div class="menu-horizontal" align="center">		
	<header>
		<nav class="nav">
			<ul class="mnul" id="n-bar">
				<li class="mnli"><img src="img/inicio.png" class="icon-clie"><a href="InicioPrincipal.php" id="inicio" class="active">INICIO</a>
				</li>

				<li class="mnli"><img src="img/cliente.png" class="icon-clie"><a href="#Clientes" id="" class="active">CLIENTES</a> 
					<ul class="subClientes" id="subClientes">
						<li class="subClientesli"><a href="clientes/clientesRegistro.php" id="Formulario" class="activeClie">Registrar Cliente</a></li>
						<li class="subClientesli"><a href="clientes/clientesHabilitados.php" id="HabilitadosClie" class="activeClie">Clientes Habilitados</a></li>
						<li class="subClientesli"><a href="clientes/clientesDeshabilitados.php" id="DeshabilitadosClie" class="activeClie">Clientes Deshabilitados</a></li>
					</ul>

				</li>

				<li class="mnli"><img src="img/Prov.png" class="icon-clie"><a href="#" id="Estado2" class="active">PROVEEDORES</a> 
					<ul class="subProve" id="subProve">

						<li class="subProveli"><a href="proveedores/proveedoresRegistro.php" id="FormularioProv" class="activeProve">Registrar Proveedor</a>
						</li>
						<li class="subProveli"><a href="proveedores/proveedoresHabilitados.php" id="DeshabilitadosProv" class="activeProve">Proveedores Habilitados</a>
						</li>
						<li class="subProveli"><a href="proveedores/proveedoresDeshabilitados.php" id="DeshabilitadosProv" class="activeProve">Proveedores Deshabilitados</a>
						</li>
					</ul>
				</li>
				<li class="mnli"><img src="img/trabajadores.png" class="icon-clie"><a href="#Trabajadores" id="Trabajadores2" class="active">TRABAJADORES</a>
					<ul class="subTraba" id="subClientes">
						<li class="subTrabali"><a href="trabajadores/trabajadoresRegistro.php" id="FormularioTrab" class="activeTraba">Registrar Trabajador</a></li>
						<li class="subTrabali"><a href="trabajadores/trabajadoresHabilitados.php" id="HabilitadosTrab" class="activeTraba">Trabajadores Habilitados</a></li>
						<li class="subTrabali"><a href="trabajadores/trabajadoresDeshabilitados.php" id="DeshabilitadosTrab" class="activeTraba">Trabajadores Deshabilitados</a></li>
					</ul>

				</li>
				<li class="mnli"><img src="img/usuario.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">USUARIOS</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="usuarios/usuariosRegistro.php" id="FormularioClie" class="activeUsuario">Registrar Usuaio</a></li>
						<li class="subUsuarioli"><a href="usuarios/usuariosHabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Habilitados</a></li>
						<li class="subUsuarioli"><a href="usuarios/usuariosDeshabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Deshabilitados</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/venta.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">VENTAS</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="ventas/ventas.php" id="FormularioClie" class="activeUsuario">Realizar venta</a></li>
						<li class="subUsuarioli"><a href="ventas/pedido.php" id="FormularioClie" class="activeUsuario">Pedido</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/almacen.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">ALMACEN</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="almacen/almacen.php" id="FormularioClie" class="activeUsuario">Almacen</a></li>
						<li class="subUsuarioli"><a href="almacen/compraRegistro.php" id="FormularioClie" class="activeUsuario">Compra</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/estado.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">ESTADO</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/prod.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">PRODUCTO</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="producto/productoRegistro.php" id="FormularioClie" class="activeUsuario">Registrar Producto</a></li>
						<li class="subUsuarioli"><a href="producto/productoRegistro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/historial.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">HISTORIAL</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/ticket.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">TICKET</a>
					<ul class="subUsuario" id="subClientes">
						<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">000000</a></li>
					</ul>
				</li>

				<li class="mnli"><img src="img/Ayuda.png" class="icon-clie"><a href="#" class="active">AYUDA</a></li>
				<form action="CerrarSesion.php" method="POST">
					<li class="mnli" ><a href="InicioPrincipal.php" class="activeUsuario1"><img src="img/cerrar.png" class="icon-clie" >CERRAR SESIÓN</a> 
						<a class="activeUsuario2" href="InicioPrincipal.php">Usuario: <?php echo $_SESSION['usuario']; ?></a>
					</li>
				</form>
			</ul>
		</nav>
	</header>	
</div>			
<br>
			<!--------CARRUSEL-------->
			
				<div data-ride="carousel">
					<div id="carrusel" class="">
						<div id="">
							<footer id="footer"> 
								<iframe src="carrusel.html" width="99.7%" height="490px" style="border:none;"></iframe>
							</footer>
						</div>
					</div>
				</div>
			
			<div class="copiray" >
				<p>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</p>
				<p>Reynaldo Mena Salazar</p>
				<p>@copiray SISVEAL</p>
			</div>
	</body>
</html>