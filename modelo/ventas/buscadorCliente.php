<script language="javascript">
  
var llenar = document.getElementById("buscadorCliente");
function llenar(idCliente) {

color.innerHTML=color.innerHTML=="nombre":"";

}
</script>
<?php

require_once "../conexion/conexion.php";

$salida = "";

$query = "SELECT * FROM cliente ORDER BY nombreCliente";
$espacio = "";
if(isset($_POST['consulta'])){
  $q = $conexion->real_escape_string($_POST['consulta']);
  $query = "SELECT idCliente, nombreCliente, apCliente, amCliente FROM cliente
  WHERE nombreCliente LIKE '%".$q."%' OR apCliente LIKE '%".$q."%' OR amCliente LIKE '%".$q."%'";
}

$resultado = $conexion->query($query);


if ($resultado ->num_rows > 0)  {



  while($mostrar = $resultado->fetch_assoc()){
    if(isset($_POST['consulta'])){
      
        $salida.="

      <div class='search' id='search'>
        <table class='search-table' id='searchTable'>
          <thead class='search-thead'>
            <tr class='search-tr'>
              <td class='search-td'></td>
            </tr>
          </thead>
          <tbody class='search-tbody'>
            <tr class='search-tr'>
              <td class='search-td'>
                <button onclick='llenar(".$mostrar['idCliente'].")' class='textoC' id='llenarD'>".$mostrar['nombreCliente']." ".$mostrar['apCliente']." ".$mostrar['amCliente']."</button>
              </td>              
            </tr>
          </tbody>
        </table>
      </div>

        ";
    }
  }  
  
} else { 
  $salida.="

  <div class='search' id='search'>
        <table class='search-table' id='searchTable'>
          <thead class='search-thead'>
            <tr class='search-tr'>
              <td class='search-td'></td>
            </tr>
          </thead>
          <tbody class='search-tbody'>
            <tr class='search-tr'>
              <td class='search-td'>
                <a class='textoC'>NO SE ENCUENTRA EL CLIENTE</a>
              </td>              
            </tr>
          </tbody>
        </table>
      </div>
            ";
}

echo $salida;
$conexion->close();

?>