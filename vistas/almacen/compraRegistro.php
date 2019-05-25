<!DOCTYPE html>
<html lang="es">
<head>
	<title>Compra</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" >
	<meta http-equiv="X-UA-Compatible" content="le-edge">
	<link rel="stylesheet" href="../css/PrincipalEstilo.css">
	<link rel="stylesheet" href="../css/formClientes.css" >
	<!-- 
	<link rel="stylesheet" href="../css/tablaVenta.css">
	<link rel="stylesheet" href="../css/buscador.css" > -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../../controles/librerias/alertifyjs/css/themes/default.css">
	<link rel="icon" type="text/css"  href="../img/iCO.ico" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="../../controles/librerias/jquery-3.3.1.js"></script>
	<script src="../../controles/librerias/quey.js"></script>
	<script src="../../controles/librerias/jquery.min.js"></script>	
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../controles/js/compraFuncion.js"></script>	
	<script src="../../controles/js/buscarProveedor.js"></script>	
	
	
</head>

<body >

			<!--MENU DE NOTIFICACIONES-->	
<div align="center">	
	<header>		
		<?php include "../includes/header.php" ?>	
	</header>	
</div>

	<!--MENU-->	
	
<div class="menu-horizontal" align="center">		
	<header>
		<?php include "../includes/nav.php" ?>
	</header>	
</div>		
			<!--------FORMULARIO-------->	
	<header class="header-for">
		<div>		
			<form class="formulario" id="myformularioComp">
				<h2 class="lb-cliente-t">Realizar Compra</h2>
				<br>
				<table width="900">
					<tr>
						<td width="400" height="50" align="right">
							<label class="lb-cliente">Buscar Proveedor:</label>
						</td>
						<td width="300"  style="position: absolute;" align="center">
							<input type="hidden" class="txt-cliente" id="idProveedorRP">
							<input class="txt-cliente" id="buscadorProveedor" list="listaProv" placeholder="Buscar...">
							<div id="proveedorDATOS">							
						</td>
					</tr>
				</table>
				<br>
				<table width="1000" height="10">	
					<tr>	
						<td align="center">							
							<input type="hidden" class="txt-cliente" id="fechaDate">
							<input type="button" class="bot-reg" id="aceptar" onclick="cambiar()" value="Aceptar">
						</td>						
					</tr>
				</table>
			</form>
		</div>
     <!--AGREGAR PRODUCTO 
			<form class="formulario" id="myformularioCompD" >
				<br>
				<table  width="960" height="100">
					<tr>
						<td width="120" height="50">
							<label class="lb-cliente">*Nombre del Producto:</label>
						</td>
						<td width="300" height="50">
						<?php /*
							require_once "../../modelo/conexion/conexion.php";
							$ultimo= "SELECT * FROM compra ORDER BY clvCompra DESC LIMIT 1";
							$resultado=mysqli_query($conexion, $ultimo);
							while($mostrar=mysqli_fetch_array($resultado)){
						?>
							<input type="hidden" class="txt-cliente" id="idUltimo" value="<?php echo $mostrar['clvCompra']; ?>">

						<?php 
							}*/
						?>

							<input type="hidden" class="txt-cliente" id="idProductoR">
							<input class="txt-cliente" id="buscadorProducto" list="listaProd" placeholder="Buscar...">
							<div id="productoDATOS">
						</td>
						<td width="100" height="50">
							<label class="lb-cliente">*Cajas:</label>
						</td>
						<td width="280" height="50">
							<input type="text" class="txt-cliente" id="cajas" name="" >
						</td>
					</tr>
					<tr>
						<td width="120" height="50">
							<label class="lb-cliente">*precio:</label>
						</td>
						<td width="300" height="50">
							<input type="text" class="txt-cliente" id="precio" name="" placeholder="" required="required">
						</td>
						<td width="100" height="50" colspan="2" align="center">
							<input type="button" class="bot-reg" id="" name="" onclick="agregarCompra();" value="Agregar">
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
								<?php // for ($i=1; $i<=2; $i++){ ?>
									<tr width="80">
										<tbody id="listado"></tbody>
									</tr>
								<?php //} ?>
							</table>									
						</div>
					</td>
					<td width="1000" align="center">
						<div id="conTotal">
							
						<h3 class="lb-cliente" id="total">Total:</h3>
						<input type="hidden" class="lb-cliente" id="total2">
							

						</div>
						<br><br><br>
						<input type="submit" class="bot-reg" id="Finalizar" name="" value="Finalizar Venta">
					</td>
					
				</tr>
			</table>
		</form>
						
		</div>
	</form>
-->

	<script src="../../controles/js/compraFuncion.js"></script>	
	<script src="../../controles/js/reloj.js"></script>	

	<script type="text/javascript">
		$(document).ready(function(){

				$('#aceptar').click(function(){
					idProveedorRP=$('#idProveedorRP').val();
					fecha=$('#fechaDate').val();
					compra(idProveedorRP,fecha);	

					if ($('#idProveedorRP').val()==""){
						alertify.alert("Debe Seleccionar El Proveedor");
						return false;
					}
			});

		});

	
	</script>
	<script type="text/javascript">
		function cambiar(){ 
		setTimeout("location.href='../../vistas/almacen/descripcionCompra.php'", 1000);
		}
	</script>
	<!--ACTUALIZAR TOTAL

	<script type="text/javascript">
		$(document).ready(function(){

				$('#Finalizar').click(function(){
					total=$('#total2').val();
					idUltimo=$('#idUltimo').val();
					totalA(total, idUltimo);	

			});

		});
	</script>
-->
	<!--TABLA ARRAY
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


function agregarCompra() {
  var ultimo = document.getElementById("idUltimo").value;
  var nombre = document.getElementById("buscadorProducto").value;
  var cantidad = parseFloat(document.getElementById("cajas").value)
  var precio = parseFloat(document.getElementById("precio").value)

  if ($('#buscadorProducto').val()==""){
  	alertify.alert("Debe Ingresar El Producto");
  	return false;
  }else if($('#cajas').val()==""){
  	alertify.alert("Debe Ingresar La Cantidad");
  	return false;
  }else if($('#precio').val()==""){
  	alertify.alert("Debe Ingresar El Precio");
  	return false;
  }

  var jug = new Jugador(ultimo, producto.length + 1, nombre, cantidad, precio, cantidad * precio);
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

      
          total += producto[i].subTot;
          document.getElementById("total").innerHTML = "Total: $"+total;
          document.getElementById("total2").value = total;
          //document.getElementByIdClassName("total2").innerHTML = "Total: $"+total;
          //var x = document.getElementsByClassName("total2");
  			//x[0].innerHTML = "Total: $"+total;
  }

    
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
-->
	<br><br>
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>
	</header>
</body>
</html>