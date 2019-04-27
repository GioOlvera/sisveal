<?php

require_once "../conexion/conexion.php";

 $cliente=$_POST['cliente'];
 $nombreComp=$_POST['nombreComp'];
 $producto=$_POST['producto'];
 $cantidad=$_POST['cantidad'];
 $precio=$_POST['precio'];



  	if ($cliente == "" || $nombreComp == "" || $producto == "" || $cantidad == "" || $precio == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO venta(idCliente, nombreCliente, nombreComp, producto, cantidad, precio) values ('$nombreCliente','$nombreComp','$producto','$cantidad','$precio')";
  	echo $resultado=mysqli_query($conexion,$inserta);

	}

   mysqli_close($conexion);

?>