<?php
header("Content-Type: text/html;charset=utf-8");
require_once "../conexion/conexioncp.php";

$salida = "";

$query = "SELECT DISTINCT * FROM codigopostal GROUP BY Estado";

if(isset($_POST['consulta'])){
  $q = $link->real_escape_string($_POST['consulta']);
  $query = "SELECT DISTINCT CodigoPostal, Estado FROM codigopostal WHERE CodigoPostal LIKE '%".$q."%' GROUP BY Estado";
}


$query = utf8_decode($query);
$resultado = $link->query($query);


if ($resultado ->num_rows > 0)  {

  $salida = "
        
        <select  class='estado-list' id='cbxestado'>
            <option value='1'>Selecciona el Estado</option>";
           
           while($mostrar = $resultado->fetch_assoc()){
            $salida.="

            <option value='".$mostrar["Estado"]."'>".$mostrar["Estado"]."</option>";
            
           }
    $salida.="
          </select>";    
  
  } else {
    $salida.="NO SE ENCUENTRA EL ESTADO";


}

echo $salida;
$link->close();


?>

