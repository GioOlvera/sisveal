<?php
require_once "../conexion/conexion.php";

 $idTrabajador=$_POST['idTrabajador'];
 $EstadoUsuario='0';

$resultD="UPDATE usuario SET EstadoUsuario='$EstadoUsuario' where idTrabajador='$idTrabajador'";
echo $result=mysqli_query($conexion,$resultD);

?>