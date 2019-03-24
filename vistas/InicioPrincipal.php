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
	<link rel="stylesheet" type="text/css" href="css/alertify.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/select2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--<link href="css/all.min.css" rel="stylesheet" type="text/css">-->
	<!--<link href="css/sb-admin-2.min.css" rel="stylesheet">-->
	<link rel="icon" type="ima/iCO.icon"  href="img/iCO.ico" >

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content" class="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="nanvar">
					<!-- Nav Item - Alerts -->
					<li class="nav-item dropdown no-arrow mx-1">
						<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-bell fa-fw"></i>
							<!-- Counter - Alerts -->
							<span class="badge badge-danger badge-counter">3+</span>
						</a>
						<!-- Dropdown - Alerts -->
						<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
							<h6 class="dropdown-header">
								Alerts Center
							</h6>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="mr-3">
									<div class="icon-circle bg-primary">
										<i class="fas fa-file-alt text-white"></i>
									</div>
								</div>
								<div>
									<div class="small text-gray-500">December 12, 2019</div>
									<span class="font-weight-bold">A new monthly report is ready to download!</span>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="mr-3">
									<div class="icon-circle bg-success">
										<i class="fas fa-donate text-white"></i>
									</div>
								</div>
								<div>
									<div class="small text-gray-500">December 7, 2019</div>
									$290.29 has been deposited into your account!
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="mr-3">
									<div class="icon-circle bg-warning">
										<i class="fas fa-exclamation-triangle text-white"></i>
									</div>
								</div>
								<div>
									<div class="small text-gray-500">December 2, 2019</div>
									Spending Alert: We've noticed unusually high spending for your account.
								</div>
							</a>
							<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
						</div>
					</li>

					<!-- Nav Item - Messages -->
					<li class="nav-item dropdown no-arrow mx-1">
						<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-envelope fa-fw"></i>
							<!-- Counter - Messages -->
							<span class="badge badge-danger badge-counter">7</span>
						</a>
						<!-- Dropdown - Messages -->
						<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
							<h6 class="dropdown-header">
								Message Center
							</h6>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
									<div class="status-indicator bg-success"></div>
								</div>
								<div class="font-weight-bold">
									<div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
									<div class="small text-gray-500">Emily Fowler · 58m</div>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
									<div class="status-indicator"></div>
								</div>
								<div>
									<div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
									<div class="small text-gray-500">Jae Chun · 1d</div>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
									<div class="status-indicator bg-warning"></div>
								</div>
								<div>
									<div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
									<div class="small text-gray-500">Morgan Alvarez · 2d</div>
								</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
								<div class="dropdown-list-image mr-3">
									<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
									<div class="status-indicator bg-success"></div>
								</div>
								<div>
									<div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
									<div class="small text-gray-500">Chicken the Dog · 2w</div>
								</div>
							</a>
							<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
						</div>
					</li>

					<div class="topbar-divider d-none d-sm-block"></div>
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
							<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Settings
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
								Activity Log
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="../index.html" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>
				</nav>
			</div>
		</div>
	
	<div class="menu-horizontal" align="center">		
		<header>
			<nav class="nav">
				<ul class="mnul" id="n-bar">
					<li class="mnli"><img src="img/Inicio.png" class="icon-clie"><a href="InicioPrincipal.php" id="inicio" class="active">INICIO</a></li>

					<li class="mnli"><img src="img/Clie2.png" class="icon-clie"><a href="#Clientes" id="" class="active">CLIENTES</a> 
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
			<div class="copiray" >
				<p><b>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</b></p>
				<p><b>Reynaldo Mena Salazar</b></p>
				<p><b>@copiray SISVEAL</b></p>
			</div>
		</body>
		</html>