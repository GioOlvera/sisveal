<?php

require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM trabajador ORDER BY nombreTrabajador";

if(isset($_POST['consulta'])){
  $q = $conexion->real_escape_string($_POST['consulta']);
  $query = "SELECT idTrabajador, nombreTrabajador, cargoTrabajador, EstadoTrabajador FROM trabajador
  WHERE idTrabajador LIKE '%".$q."%'";
}

$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {

  $salida = "

  ";

  while($mostrar = $resultado->fetch_assoc()){
    if(isset($_POST['consulta'])){
      if($mostrar['EstadoTrabajador']=='1'){ 
        $salida.="

        <input type='text' class='txt-cliente' name=''  readonly='readonly' value=".$mostrar['nombreTrabajador'].">;


        <input type='hidden' class='txt-cliente' name='' id='cargo' value=".$mostrar['cargoTrabajador'].">";
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