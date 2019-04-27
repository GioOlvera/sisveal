<?php
session_start();
$varsesion = $_SESSION['usuario'];


if($varsesion == null || $varsesion = ''){
	echo 'Uste no tiene Autorización';
	header("Location: ../../index.html");
	die();
}

require('../../modelo/conexion/conexion.php');
$idClienteE='idClienteE';

$sql3="SELECT idCliente, nombreCliente, apCliente, amCliente, telefonoCliente FROM cliente WHERE idCliente='$idClienteE'";  
$resultado2=mysqli_query($conexion, $sql3);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Clientes Habilitados</title>
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

	<script src="../../modelo/clientes/tablaClientesH.php"></script>
	<script src="../../controles/js/tablaClientesH.js"></script>
	<script src="../../controles/js/clienteFuncion.js"></script>
 
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
						<li class="subClientesli"><a href="clientesRegistro.php" id="FormularioClie" class="activeClie">Registrar Cliente</a></li>
						<li class="subClientesli"><a href="clientesHabilitados.php" id="HabilitadosClie" class="activeClie">Clientes Habilitados</a></li>
						<li class="subClientesli"><a href="clientesDeshabilitados.php" id="DeshabilitadosClie" class="activeClie">Clientes Deshabilitados</a></li>
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
						<li class="subTrabali"><a href="TrabajadoresPrincipales-Registro.php" id="FormularioTrab" class="activeTraba">Registrar Trabajador</a></li>
						<li class="subTrabali"><a href="TrabajadoresPrincipales-Habilitados.php" id="HabilitadosTrab" class="activeTraba">Trabajadores Habilitados</a></li>
						<li class="subTrabali"><a href="TrabajadoresPrincipales-Deshabilitados.php" id="DeshabilitadosTrab" class="activeTraba">Trabajadores Deshabilitados</a></li>
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
					<li class="mnli" ><a href="../../modelo/cerrar.php" class="activeUsuario1"><img src="../img/cerrar.png" class="icon-clie" >CERRAR SESIÓN</a> 
						<a class="activeUsuario2" href="CerrarSesion.php">Usuario: <?php echo $_SESSION['usuario']; ?></a>
					</li>
				</form>
			</ul>
		</nav>
	</header>	
</div>	


		<!--------TABLAS-------->	
<br><br>
	<div align="center" >
		<label class="titulo" ><b>Tabla de Clientes Habilitados</b></label> <br>
		<br><br>

		<label class="lb-buscador"><b>Buscador: </b></label>
		<input type="text" class="txt-buscador" id="txt-buscador" name="BuscadorC" placeholder="Buscador">
	</div>

	<div>
		<div id="datos"></div>
		<br>
	</div>
		<!--------TABLAS-------->
<br><br>
	<div class="copiray" >
		<p>Calle Matamoros N°139, San Lucas el Grande, el Verde Puebla</p>
		<p>Reynaldo Mena Salazar</p>
		<p>@copyright SISVEAL</p>
	</div>

<!--MODAL PARA EDITAR CLIENTES-->
<div class="modal fade" id="modaledi" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" id="piepaguinamd">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
				<h3 class="modal-title">Datos de Usuario</h3>
			</div>

			<div class="modal-body">
											
				<form class="form-horizontal" id="myformularioE">

					<div class="form-group">
												
						<label for="" class="control-label col-xs-5">*Nombre:</label>
						<div class="col-xs-5">	
							<input id="idClienteE" name="" type="hidden" class="form-control" >						
							<input id="nombreClienteE" name="" type="text" class="form-control" placeholder="Ingrese sus Nombres">
						</div>
						
					</div>
					<div class="form-group">
						<label for="apCliente" class="control-label col-xs-5">*Apellido Paterno:</label>
						<div class="col-xs-5">
							<input id="apClienteE" name=""  type="text" class="form-control" placeholder="Ingrese su Apellido">
						</div>
					</div>
					<div class="form-group">
						<label for="amCliente" class="control-label col-xs-5">*Apellido Materno:</label>
						<div class="col-xs-5">
							<input id="amClienteE" name=""  type="text" class="form-control" placeholder="Ingrese su Apellido">
						</div>
					</div>
					<div class="form-group">
						<label for="telefonoCliente" class="control-label col-xs-5">*Teléfono:</label>
						<div class="col-xs-5">
							<input id="telefonoClienteE" name=""  type="text" class="form-control" placeholder="Ingrese su Teléfono">
						</div>
					</div>
					<div class="modal-footer">  
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						<input id="actualizar" type="submit" class="btn btn-success" value="Actualizar">
					</div>
					
				</form>
				
			</div>
			
		</div><!-- /.modal-content -->
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){

$('#datos').load('../../modelo/clientes/tablaClientesH.php');


	$('#actualizar').click(function(){
		idClienteE=$('#idClienteE').val();
		nombreClienteE=$('#nombreClienteE').val();
		apClienteE=$('#apClienteE').val();
		amClienteE=$('#amClienteE').val();
		telefonoClienteE=$('#telefonoClienteE').val();
		/*cp=$('#txt-buscadorE').val();
		cbxestado=$('#cbxestado').val();
		cbxmunicipio=$('#cbxmunicipio').val();
		cbxlocalidad=$('#cbxlocalidad').val();
		calle=$('#calle').val();
		no_exterior=$('#no_exterior').val();
		no_interior=$('#no_interior').val();*/
		actualizarCliente(idClienteE,nombreClienteE,apClienteE,amClienteE,telefonoClienteE/*,cp,
			cbxestado,cbxmunicipio,cbxlocalidad,calle,no_exterior,no_interior*/);

/*
		else if($('#txt-buscadorE').val()==""){
			alertify.alert("Debes Ingresar el Código Postal");
			return false;
		}
		else if($('#cbxestado').val()=="Selecciona el Estado"){
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
		}*/

	});

});
</script>
</body>
</html>