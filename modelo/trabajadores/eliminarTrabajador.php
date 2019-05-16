<?php
require_once "../conexion/conexion.php";

 $idTrabajador=$_POST['idTrabajador'];
 

$sql="DELETE from trabajador where idTrabajador='$idTrabajador'";
echo $result=mysqli_query($conexion,$sql);

$sql2="DELETE from direcciontrabajador where idTrabajador='$idTrabajador'";
echo $result2=mysqli_query($conexion,$sql2);


?>