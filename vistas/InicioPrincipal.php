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
	<link rel="icon" type="ima/iCO.icon"  href="img/iCO.ico" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/menuNotificaciones.css" >
	
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
		<!--MENU DE NOTIFICACIONES-->	
<div align="center" >	
	<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
	echo 'Uste no tiene Autorización';
	header("Location: ../../index.html");
	die();
}
?>

<script language="JavaScript"> 
onload = function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
  

    //fecha
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    //var curMonth = months[today.getMonth()];
    var curMonth = today.getMonth()+1;
    var curYear = today.getFullYear();

    curDay = ceros(curDay);
    curMonth = ceros(curMonth);

    var date = curWeekDay+", "+curDay+"/"+curMonth+"/"+curYear;
    
    document.getElementById("date").innerHTML = date;

    //if (curMonth >= 8 && min >= 9 && curMonth <= 8 && min <= 11 && sec < 1) {

        if (hr >= 9 && min >= 47 && hr <= 9 && min <= 47 && sec < 1) {
           //document.getElementById("saludo").innerHTML = "buenos días";
    	   notify();
        }else{
    	   false;
        }

    /*
    }else{
        false;
    }

    /*if (hr >= 12 && min >= 1 && hr < 7 ) {
        document.getElementById("saludo").innerHTML = "buenas tardes";
    }
    if (hr >= 7 && min >= 1) {
    	document.getElementById("saludo").innerHTML = "buenas noches";
    }*/
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
function ceros(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script> 
<script src="../../controles/js/notif.js"></script>

<header align="center" id="notificacion" style="background-color: teal;">		
    <div>
	<ul id="notif" >
		<li><a>HORA/FECHA: <a id="clock"></a> <a id="date"></a></a></li>
		<li><a style="background-color: lightseagreen;"><strong>SISTEMA DE VENTAS Y ALMACENAMIENTO</strong></a></li>
		<li><a><img class="icon" src="img/Usuar.png" alt="usuario"> USUARIO: <?php echo $_SESSION['usuario']; ?></a></li>
		<li><a> | </a></li>
		<li><a><img class="icon" src="img/escritura.png" alt="notificación"> NOTIFICACIONES</a></li>
		<li><a href="includes/cerrarSesion.php"><img class="icon" src="img/cerrar.png" alt="Salir del sistema" title="salir"> CERRAR SESIÓN</a></li>		
	</ul>			
    </div>
</header>			
</div>

<div class="menu-horizontal" align="center">		
	<header>
		<nav class="nav">
			<ul class="mnul" id="n-bar">
				<li class="mnli"><img src="img/inicio.png" class="icon-clie"><a href="InicioPrincipal.php" id="inicio" class="active">INICIO</a>
				</li>

				<li class="mnli"><img src="img/cliente.png" class="icon-clie"><a href="#Clientes" id="" class="active">CLIENTES</a> 
					<ul class="subClientes" id="subClientes">
						<li class="subClientesli"><a href="clientes/clientesRegistro.php" id="Formulario" class="activeClie">Registrar Nuevo Cliente</a></li>
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
			
	<div>
		<header>
		<?php include "includes/copy.php" ?>
	    </header>
	</div>

	</body>
</html>