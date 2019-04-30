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
	<title>Pedido</title>
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

	<script src="../../controles/js/pedidoFuncion.js"></script>	
	<script src="../../controles/js/buscarCliente.js"></script>
	<script src="../../controles/js/tablaVenta.js"></script>	

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
						<li class="subUsuarioli"><a href="../producto/productoRegistro.php" id="FormularioClie" class="activeUsuario">Registrar Producto</a></li>
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
							<input type="submit" class="bot-reg" id="nuevo_cliente" name="" value="Nuevo Cliente" >
						</td>
						<td width="100">
							<label class="lb-cliente">Buscar Cliente:</label>
						</td>
						<td width="337" style="position: absolute;">
							<input type="hidden" class='txt-cliente' id='idClienteV' >
							<input class='txt-cliente' id='buscadorCliente' list='browsers' name='browser' placeholder='Buscar...' >
							<div id="clienteDATOS">
						</td>						
					</tr>
					<tr>
						<td width="120">
							<label class="lb-cliente">*Nombre Completo:</label>
						</td>
						<td width="300">
							<input type="text" class="txt-cliente" id="buscadorCliente" name="" placeholder="" >
						</td>
						<td width="100">
							<label class="lb-cliente">*Fecha:</label>
						</td>
						<td width="280">
							<input type="date" class="txt-cliente" id="fecha" name="" >
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

	   			<h2 class="lb-cliente-t" align="center">Datos Dirección</h2>

				<table width="1000" height="100">

					<tr>
						<td width="135">
							<label class="lb-cliente">*Código Postal:</label>
						</td>	
						<td width="400">
							<input type="text" class="txt-cliente" id="txt-buscador" placeholder="74100">
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
							<input type="text" class="txt-cliente" id="no_exterior" placeholder="20">
						</td>
						<td>
							<label class="lb-cliente">*No° Interior:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="no_interior" placeholder="10" >
						</td>
					</tr>			
				</table>

				<br><br>

	    		<h2 class="lb-cliente-t" align="center">Registrar Pedido</h2>

	    		<table width="1000" height="100">	    			
	    			<tr>
	    				<td width="100">
	    					<label class="lb-cliente">*Nombre del Producto:</label><br>
	    				</td>	
	    				<td width="250">
	    					<input type="text" class="txt-cliente" id="producto" name="" placeholder="" required="required">
	    				</td>
	    				<td width="130">
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
	    				<td width="130" align="center" colspan="1">
	    					<input type="button" class="bot-reg" id="" name="" onclick="agregarProducto();" value="Agregar">
	    				</td>
	    			</tr>
	    		</table>

				<br><br>

				<h2 class="lb-cliente-t" align="center">Lista</h2>

				<table >
					<tr>					
						<td>
							<div id="main-container" >
								<table class="table">
									<thead>
										<tr width="80" class="tr">
											<th class="th">ID</th>
											<th class="th">Nombre</th>
											<th class="th">Cantidad</th>
											<th class="th">Precio</th>
											<th class="th">SubTotal</th>
											<th class="th">Ediatr</th>
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
						</td>
						<td width="1000" align="center">
							<div id="conTotal">

								<h3 class="lb-cliente" id="total">Total:</h3>

							</div>
							<br><br><br>
							<input type="submit" class="bot-reg" id="Finalizar" name="" value="Finalizar Venta">
						</td>					
					</tr>
				</table>

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
			pedido(buscadorCliente,producto,cantidad,precio,fecha;	

			if ($('#buscadorCliente').val()==""){
				alertify.alert("Debe Ingresar El Nombre del Cliente");
				return false;
			}else if($('#fecha').val()=="dd/mm/aaaa"){
				alertify.alert("Debe de Ingresar La Fecha");
				return false;
			}
		});

	});
</script>

	<!--TABLA ARRAY-->
<script type="text/javascript">
function Jugador(idV, idL, nombreProd, cantidad, precio, subTot) {
  this.idV = idV;
  this.idL = idL;
  this.nombreProd = nombreProd;
  this.cantidad = cantidad;
  this.precio = precio; 
  this.subTot = subTot;   
}

var producto = [];
//var yoto;
var lista = document.getElementById('listado');
var total = 0.0;


function agregarProducto() {

  var nombre = document.getElementById("producto").value;
  var cantidad = parseFloat(document.getElementById("cantidad").value)
  var precio = parseFloat(document.getElementById("precio").value)

  if ($('#producto').val()==""){
  	alertify.alert("Debe Ingresar El Producto");
  	return false;
  }else if($('#cantidad').val()==""){
  	alertify.alert("Debe Ingresar La Cantidad");
  	return false;
  }else if($('#precio').val()==""){
  	alertify.alert("Debe Ingresar El Precio");
  	return false;
  }

  var jug = new Jugador(1, producto.length + 1, nombre, cantidad, precio, cantidad * precio);
  producto.push(jug);
  mostrarListado();
}

function mostrarListado(){
  lista.innerHTML='';
  for(var i=0; i<producto.length; i++){
    
      lista.innerHTML = lista.innerHTML +
          '<tr width="20" class="tr">' +         
            
              '<td width="50" class="td" align="center"><input type="hidden" readonly="readonly" id="idV" name="idV[]" value="'  + producto[i].idV + '">    <input type="hidden" readonly="readonly" id="idList" name="idList[]" value="'  + producto[i].idL + '"><label>' + producto[i].idL + '</label></td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="nombreProd" name="nombreProd[]" value="' + producto[i].nombreProd + '"><label>' + producto[i].nombreProd + '</label> </td>' +
              '<td width="50" class="td" align="center"><input type="hidden" readonly="readonly" id="cantidad" name="cantidad[]" value="' + producto[i].cantidad + '"><label>' + producto[i].cantidad + '</label> </td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="precio" name="precio[]" value="' + producto[i].precio + '"><label>$' + producto[i].precio + '</label> </td>' +
              '<td width="50" class="td"><input type="hidden" readonly="readonly" id="subTot" name="subTot[]" value="' + producto[i].subTot + '"><label>$' + producto[i].subTot + '</label> </td>' +

              '<td width="50" class="td"><button class="btn-editar" href="#" onclick="editar(' + producto[i].idL + ')">Editar</button></td>' +
              '<td width="50" class="td"><button class="btn-borrar" href="#" onclick="eliminar(' + producto[i].idL + ')">Elimina</button></td>' +
            
          '</tr>';

       
     total = total + producto[i].subTot;    
  }
  
    document.getElementById("total").innerHTML = "Total: $"+total;

//yoto = producto.length;
//document.getElementById("test").value = yoto;

 // document.getElementById('listado').innerText = lista;
}


// EDITAR PRODUCTO
function editar(i){
	var edit = i;
	var nombre = document.getElementById("producto").value;
  	var cantidad = parseFloat(document.getElementById("cantidad").value)
  	var precio = parseFloat(document.getElementById("precio").value)	

  	if ($('#producto').val()==""){
  		alertify.alert("Debe Ingresar El Producto");
  		return false;
  	}else if($('#cantidad').val()==""){
  		alertify.alert("Debe Ingresar La Cantidad");
  		return false;
  	}else if($('#precio').val()==""){
  		alertify.alert("Debe Ingresar El Precio");
  		return false;
  	}

  	if (!(isNaN(cantidad) || isNaN(edit))){
    for (var i=0; i<producto.length; i++){
      if (producto[i].id==edit){
        producto[i].nombreProd= nombre;
        producto[i].cantidad= cantidad;
        producto[i].precio= precio;
        producto[i].subTot= cantidad*precio;
      }
    }
    mostrarListado();
  }
}

//	ELIMINAR PRODUCTO
function eliminar(i){
  var pos = i;
  /*var total = parseFloat(document.getElementById("total").value)
  if (!(isNaN(total) || isNaN(pos))){
    for (var i=0; i<producto.length; i++){
      if (producto[i].id==pos){
        total= total-producto[i].subTot;*/
      producto.splice(pos-1, 1);  
  	  /*}
    }*/
  mostrarListado();
	//}
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