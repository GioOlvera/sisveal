<?php
require_once "../conexion/conexion.php";

 $idTrabajador=$_POST['idTrabajador'];
 $EstadoTrabajador='1';

$resultD="UPDATE trabajador SET EstadoTrabajador='$EstadoTrabajador' where idTrabajador='$idTrabajador'";
echo $result=mysqli_query($conexion,$resultD);

?>