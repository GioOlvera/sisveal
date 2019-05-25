<?php

require('../conexion/conexion.php');
$li="td";
$unidadMedid="KL";
$salida = "";
$query = "SELECT * FROM almacen ORDER BY idProducto";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT idProducto, NombreProducto, idProveedores, Categoria, ExistenciaKP, ExistenciaC, CantidadLimite, FechaEntrada, PrecioUnitario FROM almacen WHERE idProducto LIKE '%".$q."%' OR NombreProducto LIKE '%".$q."%' OR idProveedores LIKE '%".$q."%' OR Categoria LIKE '%".$q."%' ";

	
	/*$query="SELECT socios.nombre, socios_carga.nombre_carga, socios_carga.rut_carga FROM socios INNER JOIN socios_carga on socios.id=socios_carga.id_carga ORDER BY socios.nombre"; */
	
}


$resultadoA = $conexion->query($query);

if ($resultadoA ->num_rows > 0)  {
	
	$salida = "<div id='main-container' > 
	<table class='table'>
				<thead>
				<tr class='tr'>
					<th class='th'>ID Producto</th>
					<th class='th'>Nombre</th>					
					<th class='th'>Categoria</th>
					<th class='th'>Kilos en Existencia</th>
					<th class='th'>Cajas en Existencia</th>
					<th class='th'>Fecha Entrada </th>
					<th class='th'>Precio de Kilos</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

	while($mostrar = $resultadoA->fetch_assoc() ){

		if($mostrar['ExistenciaKP']<25){
			$li="td1";
		}elseif ($mostrar['ExistenciaKP']>26) {
			$li="td";
		}



		
		$salida.="

			<tr class='tr' id='habilitado' onclick='seleccionar(this.1)'>

				<td class='".$li."' align='center' id='column'>".$mostrar['idProducto']."</td>
				<td class='".$li."'>".$mostrar['NombreProducto']."</td>				
				<td class='".$li."'>".$mostrar['Categoria']."</td>
				<td class='".$li."'>".$mostrar['ExistenciaKP']." KL</td>
				<td class='".$li."'>".$mostrar['ExistenciaC']."</td>
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