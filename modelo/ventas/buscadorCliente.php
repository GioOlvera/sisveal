<script type="text/javascript">
  function enviar(idCliente) {
  d=idCliente;
  
  $('#idClienteV').val(d);

}
</script>
<?php
header("Content-Type: text/html;charset=utf-8");
require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM cliente ORDER BY idCliente";

if(isset($_POST['consulta'])){
  $q = $conexion->real_escape_string($_POST['consulta']);
  $query = "SELECT idCliente, nombreCliente, apCliente, amCliente FROM cliente WHERE nombreCliente LIKE '%".$q."%' OR apCliente LIKE '%".$q."%' OR amCliente LIKE '%".$q."%'";
}


$query = utf8_decode($query);
$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {

  $salida = "
        
      
        <datalist  class='estado-list' id='browsers'>";
           
           while($mostrar = $resultado->fetch_assoc()){
            $salida.="

            <option value='".$mostrar["nombreCliente"]."' onclick='enviar(".$mostrar['idCliente'].")'>".$mostrar['nombreCliente']." ".$mostrar['apCliente']." ".$mostrar['amCliente']."</option>";
            
           }
    $salida.="
          </datalist>";    
  
  } else {
    $salida.="<label class='error'> NO SE ENCUENTRA EL REGISTRO </label>";

}

echo $salida;
$conexion->close();


?>