<script type="text/javascript">


$(function(){
    $('#buscadorProducto').change(function(){
        var abc2 = $("#listaProd option[value='" + $('#buscadorProducto').val() + "']").attr('data-id');
        $('#idDescripcionR').val(abc2)
    });
});

$(function(){
    $('#buscadorProducto').change(function(){
        var abc = $("#listaProd option[value='" + $('#buscadorProducto').val() + "']").attr('data-comics');
        $('#idProductoR').val(abc)
    });
});
</script>

<?php
header("Content-Type: text/html;charset=utf-8");
require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM producto ORDER BY clvProducto";

if(isset($_POST['consulta'])){
  $q = $conexion->real_escape_string($_POST['consulta']);
  $query = "SELECT clvProducto, nombre, descripcion FROM producto WHERE nombre LIKE '%".$q."%'";
}


$query = utf8_decode($query);
$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {

  $salida = "
            
        <datalist  class='estado-list' id='listaProd'>";
           
           while($mostrar = $resultado->fetch_assoc()){
            $salida.="

            <option value='".$mostrar["nombre"]."' data-id='".$mostrar['descripcion']."' data-comics='".$mostrar['clvProducto']."' >".$mostrar['clvProducto']."</option>";
           }
    $salida.="
          </datalist>";   

  } else {
    $salida.="<label class='error'> NO SE ENCUENTRA EL REGISTRO </label>";

}

echo $salida;
$conexion->close();


?>