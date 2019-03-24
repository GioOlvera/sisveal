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
	<link rel="stylesheet" href="css/PrincipalEstilo.css" >
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" type="ima/iCO.icon"  href="img/iCO.ico" >
	<script src="js/jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script src="js/jquery-3.3.1.js"></script>


<body>
	<div class="menu-horizontal" align="center">		
		<header>
			<nav class="nav">
				<ul class="mnul" id="n-bar">
					<li class="mnli"><img src="img/Inicio.png" class="icon-clie"><a href="InicioPrincipal.php" id="inicio" class="active">INICIO</a></li>

					<li class="mnli"><!--<img src="img/Clie2.png" class="icon-clie">--><a href="#Clientes" id="" class="active"><span class="glyphicon glyphicon-sunglasses"></span>CLIENTES</a> 
						<ul class="subClientes" id="subClientes">
							<li class="subClientesli"><a href="ClientesPrincipal-Registro.php" id="FormularioClie" class="activeClie">Registrar Nuevo</a></li>
							<li class="subClientesli"><a href="ClientesPrincipal-Habilitados.php" id="HabilitadosClie" class="activeClie">Clientes Habilitados</a></li>
							<li class="subClientesli"><a href="ClientesPrincipal-Deshabilitados.php" id="DeshabilitadosClie" class="activeClie">Clientes Deshabilitados</a></li>
						</ul>

					</li>

					<li class="mnli"><img src="img/Prov.png" class="icon-clie"><a href="#" id="Estado2" class="active">PROVEEDORES</a> 
						<ul class="subProve" id="subProve">

							<li class="subProveli"><a href="#Registrar-Proveedor" id="FormularioProv" class="activeProve">Registrar Proveedor</a>

								<ul class="subProveFM" id="subProveFM">
									<li class="subProveliFM"><a href="ProveedoresPrincipales-RegFisico.php" id="FormularioProvFi" class="activeProveFM">Físico</a></li>
									<li class="subProveliFM"><a href="ProveedoresPrincipales-RegMoral.php" id="FormularioProvMo" class="activeProveFM">Moral</a></li>
								</ul>
							</li>
							<li class="subProveli"><a href="#Estado-Proveedor" id="DeshabilitadosProv" class="activeProve">Proveedores Habilitados</a>

								<ul class="subProveFM" id="subProveFM">
									<li class="subProveliFM"><a href="ProveedoresPrincipales-HabFisico.php" id="HabilitadosProv" class="activeProveFM">Físico</a></li>
									<li class="subProveliFM"><a href="ProveedoresPrincipales-HabMoral.php" id="DeshabilitadosProv" class="activeProveFM">Moral</a></li>
								</ul>
							</li>
							<li class="subProveli"><a href="#Estado-Proveedor" id="DeshabilitadosProv" class="activeProve">Proveedores Deshabilitados</a>

								<ul class="subProveFM" id="subProveFM">
									<li class="subProveliFM"><a href="ProveedoresPrincipales-DesFisico.php" id="HabilitadosProv" class="activeProveFM">Físico</a></li>
									<li class="subProveliFM"><a href="ProveedoresPrincipales-DesMoral.php" id="DeshabilitadosProv" class="activeProveFM">Moral</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="mnli"><img src="img/Trab.png" class="icon-clie"><a href="#Trabajadores" id="Trabajadores2" class="active">TRABAJADORES</a>
						<ul class="subTraba" id="subClientes">
							<li class="subTrabali"><a href="TrabajadoresPrincipales-Registro.php" id="FormularioTrab" class="activeTraba">Registrar Nuevo</a></li>
							<li class="subTrabali"><a href="TrabajadoresPrincipales-Habilitados.php" id="HabilitadosTrab" class="activeTraba">Trabajadores Habilitados</a></li>
							<li class="subTrabali"><a href="TrabajadoresPrincipales-Deshabilitados.php" id="DeshabilitadosTrab" class="activeTraba">Trabajadores Deshabilitados</a></li>
						</ul>

					</li>
					<li class="mnli"><img src="img/Usuar.png" class="icon-clie"><a href="#" id="Operaciones2" class="active">USUARIOS</a>
						<ul class="subUsuario" id="subClientes">
							<li class="subUsuarioli"><a href="UsuariosPrincipales-Registro.php" id="FormularioClie" class="activeUsuario">Registrar Nuevo</a></li>
							<li class="subUsuarioli"><a href="UsuariosPrincipales-Habilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Habilitados</a></li>
							<li class="subUsuarioli"><a href="UsuariosPrincipales-Deshabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Deshabilitados</a></li>
						</ul>

					</li>
					<li class="mnli"><img src="img/consulta.png" class="icon-clie"><a href="respaldoPrincipal.php" class="active">CONSULTA</a></li>
					<li class="mnli"><img src="img/Estado-1.png" class="icon-clie"><a href="#" class="active">ESTADO</a></li>
					<li class="mnli"><img src="img/Ayuda.png" class="icon-clie"><a href="#" class="active">AYUDA</a></li>
					<form action="CerrarSesion.php" method="POST">
						<li class="mnli" ><a href="CerrarSesion.php" class="activeUsuario1"><img src="img/cerrar.png" class="icon-clie" >CERRAR SESIÓN</a> 
							<a class="activeUsuario2" href="CerrarSesion.php">Usuario: <?php echo $_SESSION['usuario']; ?></li>
							</form>
						</ul>
					</nav>
				</header>	
			</div>
			
			<!--------CARRUSEL-------->
		<div id="carrusel" class="">
 			<div id="">
				<footer id="footer"> 
						<iframe src="carrusel.html" width="99.7%" height="490px" style="border:none;"></iframe>
				</footer>
			</div>
		</div>
		<dir class="copiray" >
			<p><b>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</b></p>
			<p><b>Reynaldo Mena Salazar</b></p>
			<p><b>@copiray SISVEAL</b></p>
		</dir>
</body>
</html>