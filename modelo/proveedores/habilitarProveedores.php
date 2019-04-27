<?php
require_once "../conexion/conexion.php";

 $idProveedor=$_POST['idProveedor'];
 $estadoProveedor='1';

$resultD="UPDATE proveedor SET estadoProveedor='$estadoProveedor' where idProveedor='$idProveedor'";
echo $result=mysqli_query($conexion,$resultD);

?>