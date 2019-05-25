<?php

require_once "../conexion/conexion.php";

$clvProducto=$_POST['clvProducto'];
 
$sql="DELETE from producto where clvProducto='$clvProducto'";
echo $result=mysqli_query($conexion,$sql);

?>