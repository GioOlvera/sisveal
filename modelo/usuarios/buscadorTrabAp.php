<?php

require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM trabajador ORDER BY apTrabajador";

if(isset($_POST['consulta2'])){
	$q = $conexion->real_escape_string($_POST['consulta2']);
	$query = "SELECT idTrabajador, apTrabajador, EstadoTrabajador FROM trabajador
	WHERE idTrabajador LIKE '%".$q."%'";
}

$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {

	$salida = "
	
	";
	
	while($mostrar = $resultado->fetch_assoc()){
		if(isset($_POST['consulta2'])){
			if($mostrar['EstadoTrabajador']=='1'){ 
				$salida.="

				<input type='text' class='txt-cliente' name='' readonly='readonly' value=".$mostrar['apTrabajador'].">";
			}else{
				$salida.="EL TRABAJADOR ESTA DESHABILITADO";
			}
		}
	}

	$salida.="
	";    
	
} else {
	$salida.="NO SE ENCUENTRA EL TRABAJADOR :(";


}

echo $salida;
$conexion->close();


?>

