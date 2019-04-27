<?php

require_once "../conexion/conexion.php";

 $idProveedor=$_POST['idProveedor'];
 

$sql="DELETE from proveedor where idProveedor='$idProveedor'";
echo $result=mysqli_query($conexion,$sql);

$sql2="DELETE from direccionproveedor where idProveedor='$idProveedor'";
echo $result2=mysqli_query($conexion,$sql2);


?>