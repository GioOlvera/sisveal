<!DOCTYPE html>
<html lang="es">
<head>
	<title>Descripción de la Compra</title>
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
	<script src="../../controles/librerias/alertifyjs/alertify.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="../../controles/js/compraFuncion.js"></script>	
	<script src="../../controles/js/buscarProducto.js"></script>
	
</head>

<body onload="actualizar()">
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
		<!--------AGREGAR PRODUCTO-------->	
		<div>		
			<form class="formulario" id="myformulario" >
				<h3 class="lb-cliente-t">Descripción de la Compra</h3>

				<table width="250" height="15" align="center">	
					<tr>
						<td width="12">
							<h4 class="lb-cliente">FOLIO:</h4>
						</td>
						<td width="100"><?php 
							require_once "../../modelo/conexion/conexion.php";
							$ultimo= "SELECT * FROM compra ORDER BY clvCompra DESC LIMIT 1";
							$resultado=mysqli_query($conexion, $ultimo);
							while($mostrar=mysqli_fetch_array($resultado)){
							?>
							<input type="text" class="txt-cliente" id="idUltimo" value="<?php echo $mostrar['clvCompra']; ?>" readonly="readonly">
							<?php 
							}
							?>
							<!--<h4 class="lb-cliente" id="kdcc"></h4>-->
						</td>				
					</tr>					
				</table>

				<table  width="1000" height="150" >
					<tr>
						<td width="190">
							<label class="lb-cliente">*Nombre del Producto:</label>
						</td>
						<td>							
							<input class="txt-cliente" id="buscadorProducto" list="listaProd" placeholder="Buscar...">
							<div id="productoDATOS">
						</td>
						<td width="135">
							<label class="lb-cliente">Descripción:</label>
						</td>
						<td>

							<input type="text" class="txt-cliente" id="idDescripcionR" placeholder="Descripción" readonly="readonly">

							<input type="hidden" class="txt-cliente" id="idProductoR" placeholder="id" readonly="readonly">
						</td>
					</tr>
					<tr>
						<td width="80">
							<label class="lb-cliente">*Kilogramos/Piezas:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="kl_pza" placeholder="Kl y Pza.">
							
						</td>
						<td width="80">
							<label class="lb-cliente">*Cajas:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="cajas" placeholder="24">
						</td>
					</tr>
				</table>
				<br>

				<br><br>
				<table align="center">
					<tr>						
						<td width="190">
							<label class="lb-cliente">*Costo del Pedido:</label>
						</td>
						<td>
							<input type="text" class="txt-cliente" id="costPedido" placeholder="$...">
						</td>
					</tr>
				</table>

				<br><br>
	    
				<table width="1000">

					<tr align="center">
					    <td>
					    	<input type="button" class="bot-reg" id="Agregar" onclick="window.location.href='../../vistas/almacen/compraRegistro.php';" value="Registrar">		
						</td>
					</tr>
				</table>
			</form>
		</div>

	<script src="../../controles/js/compraFuncion.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#Agregar').click(function(){
				idUltimo=$('#idUltimo').val();
				buscadorProducto=$('#buscadorProducto').val();
				//idProductoR=$('#idProductoR').val();
				kl_pza=$('#kl_pza').val();
				cajas=$('#cajas').val();
				kdcc=$('#kdcc').val();
				costPedido=$('#costPedido').val();
				descCompra(idUltimo,buscadorProducto,kl_pza,cajas,kdcc);
				totalA(idUltimo,costPedido);	

			if ($('#buscadorProducto').val()==""){
				alertify.alert("Debes Ingresar el nombre del Producto");
				return false;
			}else if($('#kl_pza').val()==""){
				alertify.alert("Debes Ingresar la Unidad de Medida");
				return false;
			}else if($('#cajas').val()==""){
				alertify.alert("Debes Ingresar el No° de Cajas");
				return false;
			}else if($('#kdcc').val()==""){
				alertify.alert("Debes Ingresar un No° Kilogramos de Cada Cada");
				return false;
			}else if($('#costPedido').val()==""){
				alertify.alert("Debes Ingresar el Costo Total del Pedido");
				return false;
			}

			});

		});
	</script>

	<br><br>
	<div>
		<header>
		<?php include "../includes/copy.php" ?>
	    </header>
	</div>
</body>
</html>