<?php
require_once "../conexion/conexion.php";

 $idTrabajador=$_POST['idTrabajador'];
 

$sql="DELETE from usuario where idTrabajador='$idTrabajador'";
echo $result=mysqli_query($conexion,$sql);


?>