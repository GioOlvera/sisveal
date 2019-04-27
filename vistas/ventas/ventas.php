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
	<link rel="stylesheet" href="../css/tablaVenta.css">
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
	<script src="../../controles/js/buscarCliente.js"></script>
	<script src="../../controles/js/tablaVenta.js"></script>	
	
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

						<li class="subProveli"><a href="proveedoresRegistro.php" id="FormularioProv" class="activeProve">Registrar Proveedor</a>
						</li>
						<li class="subProveli"><a href="proveedoresHabilitados.php" id="DeshabilitadosProv" class="activeProve">Proveedores Habilitados</a>
						</li>
						<li class="subProveli"><a href="#Estado-Proveedor" id="DeshabilitadosProv" class="activeProve">Proveedores Deshabilitados</a>
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
						<li class="subUsuarioli"><a href="usuarioRegistro.php" id="FormularioClie" class="activeUsuario">Registrar Usuaio</a></li>
						<li class="subUsuarioli"><a href="usuarioHabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Habilitados</a></li>
						<li class="subUsuarioli"><a href="usuarioDeshabilitados.php" id="FormularioClie" class="activeUsuario">Usuarios Deshabilitados</a></li>
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
	<header class="header-for">
		<div>		
			<form class="formulario" id="myformularioVenta" >
				<h2 class="lb-cliente-t">Datos Cliente</h2>

				<table  width="960" height="100">
					<tr>
						<td width="120" align="center">
							<label>Venta General</label><br>
							<label>SI&nbsp;<input type="radio" class="txt-cliente" id="desbloqueo" value="rbforaneo" name="intereses" onclick="foraneo()"/></label>							
							<label>&nbsp;NO<input type="radio" class="txt-cliente" id="bloqueo" value="rblocal" name="intereses" onclick="local()"/></label>
						</td>
						<td width="300" align="center">
							<input type="submit" class="bot-reg" id="nuevo_cliente" name="" value="Nuevo Cliente" disabled>
						</td>
						<td width="100">
							<label class="lb-cliente">Buscar Cliente:</label>
						</td>
						<td width="337" style="position: absolute;">
							<input type="search" class="txt-cliente" id="buscadorCliente" name="" placeholder="Buscar..." disabled>
							<div id="clienteDATOS">
						</td>						
					</tr>
					<tr>
						<td width="120">
							<label class="lb-cliente">*Nombre Completo:</label>
						</td>
						<td width="300">
							<input type="text" class="txt-cliente" id="nombreComp" name="" placeholder="" disabled>
						</td>
						<td width="100">
							<label class="lb-cliente">*Fecha:</label>
						</td>
						<td width="280">
							<input type="date" class="txt-cliente" id="fecha" name="" disabled>
						</td>
					</tr>
					<tr>
						<td colspan="4" align="center">
							<br>
							<input type="button" class="bot-reg" name="" onclick="bloqueC()" value="Aceptar">
						</td>
					</tr>
				</table>

		<br><br>

	    <h2 class="lb-cliente-t" align="center">Registrar Venta</h2>

				<table width="1000" height="100">
					<form>
					<tr>
						<td width="100">
							<label class="lb-cliente">*Nombre del Producto:</label>
						</td>	
						<td width="250">
							<input type="text" class="txt-cliente" id="producto" name="" placeholder="" required="required">
						</td>
						<td width="80">
							<label class="lb-cliente">*Cantidad:</label>
						</td>
						<td width="250">
							<input type="number" class="txt-cliente" id="cantidad" name="" placeholder="" required="required">
						</td>
					</tr>

					<tr>
						<td width="100">
							<label class="lb-cliente">*Precio:</label>
						</td>
						<td width="250">
							<input type="number" class="txt-cliente" id="precio" name="" required="required">
						</td>
						<td width="80" align="center">
							<input type="button" class="bot-reg" id="" name="" onclick="agregarProducto();" value="Agregar">
						</td>
						</form>
						<td width="250" align="center">
							<input type="submit" class="bot-reg" id="Finalizar" name="" value="Finalizar Venta">
						</td>
					</tr>
				</table>

			<h2 class="lb-cliente-t" align="center">Venta</h2>

			<div id="main-container" >
			<table class="table">
				<thead>
				<tr width="80" class="tr">
				    <th class="th">Id</th>
    				<th class="th">Nombre</th>
    				<th class="th">Cantidad</th>
    				<th class="th">Precio</th>
    				<th class="th">SubTotal</th>
    				<th class="th">Eliminar</th>
				</tr>
				</thead>
				<?php for ($i=1; $i<=2; $i++){ ?>
					<tr width="80">
						<tbody id="listado"></tbody>
					</tr>
				<?php } ?>
			</table>
			</div>
<!-- 
				<div id="" >
   					<div id="tablaVenta"></div>
  				</div>
-->
			</form>
		</div>

	<script src="../../controles/js/ventaFuncion.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

				$('#Finalizar').click(function(){
					buscadorCliente=$('#buscadorCliente').val();
					producto=$('#producto').val();
					cantidad=$('#cantidad').val();
					precio=$('#precio').val();
					fecha=$('#fecha').val();
					venta(buscadorCliente,producto,cantidad,precio,fecha;	

					/*if ($('#buscadorCliente').val()==""){
						alertify.alert("Debe Ingresar El Nombre del Cliente");
						return false;
					}else if($('#producto').val()==""){
						alertify.alert("Debe Ingresar El Producto");
						return false;
					}else if($('#cantidad').val()==""){
						alertify.alert("Debe Ingresar La Cantidad");
						return false;
					}else if($('#precio').val()==""){
						alertify.alert("Debe de Ingresar El Precio");
						return false;
					}else if($('#fecha').val()=="dd/mm/aaaa"){
						alertify.alert("Debe de Ingresar La Fecha");
						return false;
					}*/
			});

		});
	</script>

	<!--MANDA A LLAMAR LA TABLA
	<script type="text/javascript">
		$(document).ready(function(){

			$('#listado').load('../../modelo/ventas/tablaVenta.php');

		});
	</script>
-->
	<!--TABLA ARRAY-->
<script type="text/javascript">
function Jugador(id, nombreProd, cantidad, precio, subTot) {
  this.id = id;
  this.nombreProd = nombreProd;
  this.cantidad = cantidad;
  this.precio = precio; 
  this.subTot = subTot;   
}

var jugadores = [];
var yoto;
var lista = document.getElementById('listado');

function agregarProducto() {

  var nombre = document.getElementById("producto").value;
  var cantidad = parseInt(document.getElementById("cantidad").value)
  var precio = parseInt(document.getElementById("precio").value)
  var jug = new Jugador(jugadores.length + 1, nombre, cantidad, precio, cantidad * precio);
  jugadores.push(jug);
  mostrarListado();
}

function mostrarListado(){
  lista.innerHTML='';
  for(var i=0; i<jugadores.length; i++){
    
      lista.innerHTML = lista.innerHTML +
          '<tr width="20" class="tr">' +         
            
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="id" name="id[]" value="'  + jugadores[i].id + '"><label>' + jugadores[i].id + '</label></td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="nombreProd" name="nombreProd[]" value="' + jugadores[i].nombreProd + '"><label>' + jugadores[i].nombreProd + '</label> </td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="cantidad" name="cantidad[]" value="' + jugadores[i].cantidad + '"><label>' + jugadores[i].cantidad + '</label> </td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="precio" name="precio[]" value="' + jugadores[i].precio + '"><label>' + jugadores[i].precio + '$</label> </td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="subTot" name="subTot[]" value="' + jugadores[i].subTot + '"><label>' + jugadores[i].subTot + '$</label> </td>' +

              '<td width="50" class="td"><button class="btn-borrar" href="#" onclick="eliminar(' + jugadores[i].id + ')">Elimina</button></td>' +
            
          '</tr>';

         
  }
yoto = jugadores.length;
document.getElementById("test").value = yoto;

 // document.getElementById('listado').innerText = lista;
}

function sumarDinero(){
  var dinero = parseInt(document.getElementById('dinero').value);
  var id = parseInt(document.getElementById('jugadorid').value);
  var act = document.getElementById('actualizar').value;
  if (!(isNaN(dinero) || isNaN(id))){
    for (var i=0; i<jugadores.length; i++){
      if (jugadores[i].id==id){
        jugadores[i].dinero+= dinero;
        jugadores[i].name= act;
      }
    }
    mostrarListado();
  }
  
}

function eliminar(i){
  var pos = i;
  jugadores.splice(pos-1, 1);  
  mostrarListado();
}
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