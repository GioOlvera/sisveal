
<script language="javascript">
	

function habilitado(idTrabajador) {

	
	 alertify.confirm('Habilitar Usuario', '¿Esta seguro de Habilitar el Usuario', 
		function(){ habilitarUsua(idTrabajador) 
	}, function(){ alertify.error('Se cancelo')});
	
}

function detalles(idTrabajador) {

	
	 var doc="informacionUsuario.php?idTrabajador="+idTrabajador;
         window.location=doc;
	
}

</script>
<?php

require_once "../conexion/conexion.php";

$salida = "";
$query = "SELECT * FROM usuario ORDER BY idTrabajador";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM usuario WHERE idTrabajador LIKE '%".$q."%' OR usuario LIKE '%".$q."%' OR tipo LIKE '%"
	.$q."%' OR correo LIKE '%".$q."%' ";

}

$resultado = $conexion->query($query);

if ($resultado ->num_rows > 0)  {


	$salida = "<div id='main-container' > <table class='table'>
				<thead>
				<tr class='tr'>
					<th class='th'>ID Usuario</th>
					<th class='th'>Usuario</th>
					<th class='th'>Tipo de Cargo</th>
					<th class='th'>Email</th>
					
					<th class='th'>Estado</th>
					<th class='th'>Información</th>
				</tr>
			</thead>
			<tbody style='cursor: pointer;'>";

	while($mostrar = $resultado->fetch_assoc() ){

	if($mostrar['EstadoUsuario']=='0'){	

		$salida.="
			<tr class='tr' id='Habilitado' onclick='seleccionar(this.1)'>
				<td class='td' align='center' id='column'>".$mostrar['idTrabajador']."</td>
				<td class='td'>".$mostrar['usuario']."</td>
				<td class='td'>".$mostrar['tipo']."</td>
				<td class='td'>".$mostrar['correo']."</td>
				

				<td class='td' >				
					<button href='#' onclick='habilitado(".$mostrar['idTrabajador'].")' class='btn-estado'><span class='glyphicon glyphicon-eye-close'></span> Habilitar</button>		
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



