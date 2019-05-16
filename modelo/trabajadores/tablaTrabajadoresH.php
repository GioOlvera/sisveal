
<script language="javascript">
	

function deshabilitado(idTrabajador) {

	
	 alertify.confirm('Deshabilitar Trabajador', '¿Esta seguro de deshabilitar el Trabajador', 
		function(){ deshabilitarTrab(idTrabajador) 
	}, function(){ alertify.error('Se cancelo')});
	
}

function modificar(idTrabajador) {
	var idTrabajador =idTrabajador;
	$('#idTrabajadorT').val(idTrabajador);
	
}

function eliminar(idTrabajador) {

	
	 alertify.confirm('Eliminar Trabajador', '¿Esta seguro de eliminar el registro?', 
		function(){ eliminarTrab(idTrabajador) 
	}, function(){ alertify.error('Se cancelo')});
	
}
function detalles(idTrabajador) {

	
	 var doc="informacionTrabajador.php?idTrabajador="+idTrabajador;
         window.location=doc;
	
}

</script>
<?php

require_once "../conexion/conexion.php";

$salida = "";
$query = "SELECT * FROM trabajador ORDER BY idTrabajador";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT idTrabajador, nombreTrabajador, apTrabajador, amTrabajador, telefonoTrabajador, EstadoTrabajador FROM trabajador WHERE idTrabajador LIKE '%".$q."%' OR nombreTrabajador LIKE '%".$q."%' OR apTrabajador LIKE '%"
	.$q."%' OR amTrabajador LIKE '%".$q."%' OR telefonoTrabajador LIKE '%".$q."%' ";

}

$resultado = $conexion->query($query);

if ($resultado ->num_rows > 0)  {


	$salida = "<div id='main-container' > <table class='table'>
				<thead>
				<tr class='tr'>
					<th class='th'>ID Trabajador</th>
					<th class='th'>Nombre</th>
					<th class='th'>Apellido Paterno</th>
					<th class='th'>Apellido Materno</th>
					<th class='th'>Telèfono</th>
					
					<th class='th'>Estado</th>
					<th class='th'>Actualizar</th>
					<th class='th'>Eliminarlos</th>
					<th class='th'>Información</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

	while($mostrar = $resultado->fetch_assoc() ){

	if($mostrar['EstadoTrabajador']=='1'){	

		$salida.="
			<tr class='tr' id='Habilitado' onclick='seleccionar(this.1)'>
				<td class='td' align='center' id='column'>".$mostrar['idTrabajador']."</td>
				<td class='td'>".$mostrar['nombreTrabajador']."</td>
				<td class='td'>".$mostrar['apTrabajador']."</td>
				<td class='td'>".$mostrar['amTrabajador']."</td>
				<td class='td'>".$mostrar['telefonoTrabajador']."</td>
				

				<td class='td' >				
					<button href='#' onclick='deshabilitado(".$mostrar['idTrabajador'].")' class='btn-estado'><span class='glyphicon glyphicon-eye-close'></span> Deshabilitar</button>		
				</td>
				<td class='td'>
					<button  href='#' onclick='modificar(".$mostrar['idTrabajador'].")' data-toggle='modal' data-target='#modaledi' class='btn-editar'><span class='glyphicon glyphicon-edit'></span> Editar</button>					
				</td>
				<td class='td'>
					<button href='#' onclick='eliminar(".$mostrar['idTrabajador'].")' class='btn-borrar'><span class='glyphicon glyphicon-remove'></span> Borrar</button>					
				</td>
				<td class='td'>
					<button href='#' onclick='detalles(".$mostrar['idTrabajador'].")' class='btn-detalles'><span class='glyphicon glyphicon-question-sign'></span> Detalles</button>					
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



