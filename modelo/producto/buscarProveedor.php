<script type="text/javascript">

$(function(){
    $('#buscadorProveedor').change(function(){
        var abc = $("#listaProv option[value='" + $('#buscadorProveedor').val() + "']").attr('data-id');
        $('#idProveedorRP').val(abc)
    });
});

</script>
<?php
header("Content-Type: text/html;charset=utf-8");
require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM proveedor ORDER BY idProveedor";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT idProveedor, nombreProveedor FROM proveedor WHERE nombreProveedor LIKE '%".$q."%'";

}


$query = utf8_decode($query);
$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {

  $salida = "
        
      
        <datalist  class='estado-list' id='listaProv'>";
           
           while($mostrar = $resultado->fetch_assoc()){
            $salida.="

            <option value='".$mostrar["nombreProveedor"]."' data-id='".$mostrar['idProveedor']."'>".$mostrar['idProveedor']."</option>";
            
           }
    $salida.="
          </datalist>";    
  
  } else {
    $salida.="<label class='error'> NO SE ENCUENTRA EL REGISTRO </label>";

}

echo $salida;
$conexion->close();


?>