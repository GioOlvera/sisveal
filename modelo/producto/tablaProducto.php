<script language="javascript">

function modificar(clvProducto) {
	
	var clvProducto=clvProducto;
	$('#idProductoE').val(clvProducto);
}

function eliminar(clvProducto) {
	
	alertify.confirm('Eliminar Producto', '¿Esta seguro de eliminar el registro?', 
		function(){ eliminarProducto(clvProducto) 
	}, function(){ alertify.error('Se cancelo')});
	
}

function detalles(clvProducto) {
	
	 var doc="informacionProducto.php?clvProducto="+clvProducto;
         window.location=doc;	
}


</script>
<?php

require_once "../conexion/conexion.php";

$salida = "";
$query = "SELECT * FROM producto ORDER BY clvProducto";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT clvProducto, nombre, categoriaProd, unidadMedida, tiempoCaducidad FROM producto 
	WHERE clvProducto LIKE '%".$q."%' OR nombre LIKE '%".$q."%' OR categoriaProd LIKE '%"
	.$q."%' OR unidadMedida LIKE '%".$q."%'OR tiempoCaducidad LIKE '%".$q."%' ";
	
}


$resultado = $conexion->query($query);

if ($resultado ->num_rows > 0)  {
	
	$salida = "<div id='main-container' > 
	<table class='table'>
			<thead>
				<tr class='tr'>
					<th class='th'>ID Producto</th>
					<th class='th'>Nombre</th>
					<th class='th'>Tipo de Carne</th>
					<th class='th'>Medida</th>
					<th class='th'>Caducidad</th>
					<th class='th'>Actualizar</th>
					<th class='th'>Eliminarlos</th>
					<th class='th'>Información</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

		
		while($mostrar = $resultado->fetch_assoc() ){			
							
		
		$salida.="		

			<tr class='tr' id='habilitado' onclick='seleccionar(this.1)'>			

				<td class='td' align='center' id='clvProducto'>".$mostrar['clvProducto']."</td>
				<td class='td'>".$mostrar['nombre']."</td>
				<td class='td'>".$mostrar['categoriaProd']."</td>
				<td class='td'>".$mostrar['unidadMedida']."</td>
				<td class='td'>".$mostrar['tiempoCaducidad']." Dias</td>

				<td class='td'>
					<button  href='#' onclick='modificar(".$mostrar['clvProducto'].")' data-toggle='modal' data-target='#modaledi' class='btn-editar'><span class='glyphicon glyphicon-edit'></span> Editar</button>				
				</td>
				<td class='td'>
					<button href='#' onclick='eliminar(".$mostrar['clvProducto'].")' class='btn-borrar'><span class='glyphicon glyphicon-remove'></span> Borrar</button>					
				</td>
				<td class='td'>
					<button href='#' onclick='detalles(".$mostrar['clvProducto'].")' class='btn-detalles'><span class='glyphicon glyphicon-question-sign'></span> Detalles</button>					
				</td>
			
			</tr>";
			
		
		
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