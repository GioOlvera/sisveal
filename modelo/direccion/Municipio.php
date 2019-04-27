<?php

header("Content-Type: text/html;charset=utf-8");
require_once "../conexion/conexioncp.php";

$salida2 = "";

$query = "SELECT DISTINCT * FROM codigopostal GROUP BY Municipio";

if(isset($_POST['consulta'])){
  $q = $link->real_escape_string($_POST['consulta']);
  $query = "SELECT DISTINCT CodigoPostal, Colonia, Municipio, Estado FROM codigopostal WHERE CodigoPostal LIKE '%".$q."%' GROUP BY Municipio";
}



$resultado2 = $link->query($query);


if ($resultado2 ->num_rows > 0)  {

  $salida2 = "
        
         <select class='municipio-list' id='cbxmunicipio'>
            <option value='1'>Selecciona el Municipio</option>";
           
           while($mostrar = $resultado2->fetch_assoc()){
            $salida2.="

            <option value='".$mostrar['Municipio']."'>".$mostrar["Municipio"]."</option>";
            
           }
    $salida2.="
          </select>";
  
  } else {
    $salida2.="NO SE ENCUENTRA EL MUNICIPIO";


}


echo $salida2;

$link->close();


?>

