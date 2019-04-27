<?php

require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM trabajador ORDER BY amTrabajador";

if(isset($_POST['consulta3'])){
	$q = $conexion->real_escape_string($_POST['consulta3']);
	$query = "SELECT idTrabajador, amTrabajador, EstadoTrabajador FROM trabajador
	WHERE idTrabajador LIKE '%".$q."%'";
}

$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {

	$salida = "

	";

	while($mostrar = $resultado->fetch_assoc()){
		if(isset($_POST['consulta3'])){
			if($mostrar['EstadoTrabajador']=='1'){
				$salida.="

				<input type='text' class='txt-cliente' name='' readonly='readonly' value=".$mostrar['amTrabajador'].">";
			}else{
				$salida.="EL TRABAJADOR ESTA DESHABILITADO";
			}
		}
	}

	$salida.="
	";    

} else {
	$salida.="NO SE ENCUENTRA EL TRABAJADOR";

}

echo $salida;
$conexion->close();

?>