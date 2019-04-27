
<script language="javascript">
	

function habilitado(idProveedor) {

	
	 alertify.confirm('Habilitar Proveedor', '¿Esta seguro de Habilitar el Proveedor', 
		function(){ habilitarProv(idProveedor) 
	}, function(){ alertify.error('Se cancelo')});
	
}

/*function detalles(idProveedor) {

	
	 var doc="InformacionProveedorFi.php?idProveedor="+idProveedor;
         window.location=doc;
	
}*/

</script>
<?php

require_once "../conexion/conexion.php";

$salida = "";
$query = "SELECT * FROM proveedor ORDER BY idProveedor";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT idProveedor, nombreProveedor, email, RFC, telefono, estadoProveedor FROM proveedor
	WHERE idProveedor LIKE '%".$q."%' OR nombreProveedor LIKE '%".$q."%' OR email LIKE '%"
	.$q."%' OR RFC LIKE '%".$q."%' OR telefono LIKE '%".$q."%' ";

}

$resultado = $conexion->query($query);

if ($resultado ->num_rows > 0)  {


	$salida = "<div id='main-container' > <table class='table'>
				<thead>
				<tr class='tr'>
					<th class='th'>ID Proveedor</th>
					<th class='th'>Nombre</th>
					<th class='th'>Email</th>
					<th class='th'>RFC</th>
					<th class='th'>Telèfono</th>
					
					<th class='th'>Estado</th>
					<th class='th'>Información</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

	while($mostrar = $resultado->fetch_assoc() ){

	if($mostrar['estadoProveedor']=='0'){	

		$salida.="
			<tr class='tr' id='Habilitado' onclick='seleccionar(this.1)'>
				<td class='td' align='center' id='column'>".$mostrar['idProveedor']."</td>
				<td class='td'>".$mostrar['nombreProveedor']."</td>
				<td class='td'>".$mostrar['email']."</td>
				<td class='td'>".$mostrar['RFC']."</td>
				<td class='td'>".$mostrar['telefono']."</td>
				

				<td class='td' >				
					<button href='#' onclick='habilitado(".$mostrar['idProveedor'].")' class='btn-estado'><span class='glyphicon glyphicon-eye-close'></span> Habilitar</button>		
				</td>
				<td class='td'>
					<button href='#' onclick='detalles(".$mostrar['idProveedor'].")' class='btn-detalles'><span class='glyphicon glyphicon-question-sign'></span> Detalles</button>					
				</td>
			</tr>";
		}
		
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



