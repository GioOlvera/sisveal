<script language="javascript">

function deshabilitado(idCliente) {
	
	alertify.confirm('Deshabilitar Cliente', '¿Esta seguro de deshabilitar cliente', 
		function(){ deshabilitarCliente(idCliente) 
	}, function(){ alertify.error('Se cancelo')});
	
}

	
function modificar(idCliente) {
	
	
	$('#idClienteE').val(idCliente);

}

function eliminar(idCliente) {
	
	alertify.confirm('Eliminar Cliente', '¿Esta seguro de eliminar el registro?', 
		function(){ eliminarCliente(idCliente) 
	}, function(){ alertify.error('Se cancelo')});
	
}


</script>
<?php

require_once "../conexion/conexion.php";

$salida = "";
$query = "SELECT * FROM cliente ORDER BY idCliente";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT idCliente, nombreCliente, apCliente, amCliente, telefonoCliente, estadoCliente FROM cliente 
	WHERE idCliente LIKE '%".$q."%' OR nombreCliente LIKE '%".$q."%' OR apCliente LIKE '%"
	.$q."%' OR amCliente LIKE '%".$q."%'OR telefonoCliente LIKE '%".$q."%' ";
	
}


$resultado = $conexion->query($query);

if ($resultado ->num_rows > 0)  {
	
	$salida = "<div id='main-container' > 
	<table class='table'>
				<thead>
				<tr class='tr'>
					<th class='th'>ID Cliente</th>
					<th class='th'>Nombre</th>
					<th class='th'>Apellido Paterno</th>
					<th class='th'>Apellido Materno</th>
					<th class='th'>Telèfono</th>
					<th class='th'>Estado</th>
					<th class='th'>Actualizar</th>
					<th class='th'>Eliminar</th>
					<th class='th'>Información</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

	while($mostrar = $resultado->fetch_assoc() ){		

		if($mostrar['estadoCliente']=='1'){		
		
					
		
		$salida.="		

			<tr class='tr' id='habilitado' onclick='seleccionar(this.1)'>			

				<td class='td' align='center' id='idCliente'>".$mostrar['idCliente']."</td>
				<td class='td'>".$mostrar['nombreCliente']."</td>
				<td class='td'>".$mostrar['apCliente']."</td>
				<td class='td'>".$mostrar['amCliente']."</td>
				<td class='td'>".$mostrar['telefonoCliente']."</td>

				<td class='td' >				
					<button href='#' onclick='deshabilitado(".$mostrar['idCliente'].")' class='btn-estado'><span class='glyphicon glyphicon-eye-close'></span> Deshabilitar</button>					
				</td>
				<td class='td'>
					<button  href='#' onclick='modificar(".$mostrar['idCliente'].")'  data-toggle='modal' data-target='#modaledi' class='btn-editar'><span class='glyphicon glyphicon-edit'></span> Editar</button>				
				</td>
				<td class='td'>
					<button href='#' onclick='eliminar(".$mostrar['idCliente'].")' class='btn-borrar'><span class='glyphicon glyphicon-remove'></span> Bra</button>					
				</td>
				<td class='td'>
					<button href='#' onclick='detalles(".$mostrar['idCliente'].")' class='btn-detalles'><span class='glyphicon glyphicon-question-sign'></span> Detalles</button>					
				</td>
			
			</tr>"

			;

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