<?php
require_once "../conexion/conexion.php";

 $idCliente=$_POST['idCliente'];
 $estadoCliente='0';

$resultD="UPDATE cliente SET estadoCliente='$estadoCliente' where idCliente='$idCliente'";
echo $result=mysqli_query($conexion,$resultD);

?>