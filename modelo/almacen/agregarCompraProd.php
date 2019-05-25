<?php

require_once "../conexion/conexion.php";

 $idProveedorRP=$_POST['idProveedorRP'];
 $fecha=$_POST['fecha'];
 $total='0';

 $idUltimo=$_POST['idUltimo'];
 $costPedido=$_POST['costPedido'];

  	if ($idProveedorRP == "" || $fecha == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO compra(proveedor, fechaCompra, totalCompra) values ('$idProveedorRP','$fecha','$total')";
  	echo $resultado=mysqli_query($conexion,$inserta); 	

	   	//recibo el último id
	   	//$ultimo_id = mysql_insert_id(); 

	}

	$actTotal=$conexion->query("UPDATE compra SET totalCompra='$costPedido' WHERE clvCompra='$idUltimo'"); 


   mysqli_close($conexion);

?>