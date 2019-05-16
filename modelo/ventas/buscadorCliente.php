<script type="text/javascript">
$(function(){
    $('#buscadorCliente').change(function(){
        var abc = $("#browsers option[value='" + $('#buscadorCliente').val() + "']").attr('data-id');
        $('#idClienteV').val(abc);
    });
});
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

            <option value='".$mostrar["nombreCliente"]."' data-id='".$mostrar['idCliente']."'>".$mostrar['nombreCliente']." ".$mostrar['apCliente']." ".$mostrar['amCliente']."</option>";

            /*$query2 = "SELECT * FROM direccioncliente ORDER BY idCliente";
          $query2 = "SELECT idCliente, cp, estado, municipio, localidad, calle, no_exterior, no_interior FROM direccioncliente WHERE idCliente LIKE '%".$mostrar['idCliente']."%'";*/
           }
    $salida.="
          </datalist>";   

  } else {
    $salida.="<label class='error'> NO SE ENCUENTRA EL REGISTRO </label>";

}

echo $salida;
$conexion->close();


?>