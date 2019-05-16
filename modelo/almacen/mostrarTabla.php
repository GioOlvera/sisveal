<?php

require('../conexion/conexion.php');
$li="td";
$salida = "";
$query = "SELECT * FROM almacen ORDER BY idProducto";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT idProducto, NombreProducto, Proveedores, Categoria, CantidadExistencia, CantidadLimite, FechaEntrada, PrecioUnitario FROM almacen WHERE idProducto LIKE '%".$q."%' OR NombreProducto LIKE '%".$q."%' OR Proveedores LIKE '%".$q."%' OR Categoria LIKE '%".$q."%' ";

	//$query2 = "SELECT id_Cliente FROM clientes
	//WHERE id_Cliente LIKE '%".$q."%'";	
	
}


$resultado = $conexion->query($query);

if ($resultado ->num_rows > 0)  {
	
	$salida = "<div id='main-container' > 
	<table class='table'>
				<thead>
				<tr class='tr'>
					<th class='th'>ID Producto</th>
					<th class='th'>Nombre</th>
					<th class='th'>Proveedor</th>
					<th class='th'>Categoria</th>
					<th class='th'>Cantidad en Existencia</th>
					<th class='th'>Fecha Entrada </th>
					<th class='th'>Precio de Kilos</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

	while($mostrar = $resultado->fetch_assoc() ){

		

			//}else{

		if($mostrar['CantidadExistencia']<25){
			$li="td1";
		}elseif ($mostrar['CantidadExistencia']>26) {
			$li="td";
		}
		
		$salida.="

		

			<tr class='tr' id='habilitado' onclick='seleccionar(this.1)'>

			

				<td class='".$li."' align='center' id='column'>".$mostrar['idProducto']."</td>
				<td class='".$li."'>".$mostrar['NombreProducto']."</td>
				<td class='".$li."'>".$mostrar['Proveedores']."</td>
				<td class='".$li."'>".$mostrar['Categoria']."</td>
				<td class='".$li."'>".$mostrar['CantidadExistencia']."</td>
				<td class='".$li."'>".$mostrar['FechaEntrada']."</td>
				<td class='".$li."'>".$mostrar['PrecioUnitario']."</td>


			
			</tr>";

		//}

		
	}
		$salida.="
		</tbody>

		</table>
		</div>";
	
	} else {
		$salida.="<label class='error'> NO SE ENCUENTRA EL REGISTRO </label>";


}

echo $salida;

$conexion->close();

?>