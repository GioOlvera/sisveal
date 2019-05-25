<?php

require_once "../conexion/conexion.php";
  
 $idTrabajadorU=$_POST['idTrabajadorU']; 
 $usuarioU=$_POST['usuarioU'];
 $password=md5($_POST['password']); 
 $emailU=$_POST['emailU'];


 /*$cp=$_POST['cp'];*/

  	if ($usuarioU == "" || $emailU == "" || $password == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="UPDATE usuario SET usuario='$usuarioU', clave='$password', correo='$emailU' WHERE idTrabajador='$idTrabajadorU'";
  	echo $resultado=mysqli_query($conexion,$inserta);

	}

   mysqli_close($conexion);

?>