<?php

require_once "../conexion/conexion.php";


 $idCliente=$_POST['idCliente'];
 

$sql="DELETE from cliente where idCliente='$idCliente'";
echo $result=mysqli_query($conexion,$sql);

$sql2="DELETE from direccioncliente where idCliente='$idCliente'";
echo $result2=mysqli_query($conexion,$sql2);


?>