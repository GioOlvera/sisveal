<?php
header("Content-Type: text/html;charset=utf-8");
require_once "../conexion/conexioncp.php";

$salida3 = "";
$query = "SELECT DISTINCT * FROM codigopostal GROUP BY Colonia";

if(isset($_POST['consulta'])){
  $q = $link->real_escape_string($_POST['consulta']);
  $query = "SELECT DISTINCT CodigoPostal, Colonia, Municipio, Estado FROM codigopostal WHERE CodigoPostal LIKE '%".$q."%' GROUP BY Colonia";
}


$resultado3 = $link->query($query) or die();

if ($resultado3 ->num_rows > 0)  {

  $salida3 = "

        <select class='localidad-list' id='cbxlocalidad'>
            <option value='1'>Selecciona el Localidad</option>";
           
           while($mostrar = $resultado3->fetch_assoc()){
            $salida3.="

            <option value='".$mostrar['Colonia']."'>".$mostrar["Colonia"]."</option>";
            
           }
    $salida3.="
          </select>";
  
  } else {
    $salida3.="NO SE ENCUENTRA LA LOCALIDAD";


}


echo $salida3;
$link->close();


?>

