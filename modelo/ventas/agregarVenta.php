<?php

require_once "../conexion/conexion.php";

 $idCliente=$_POST['idCliente'];
 $nombreCliente=$_POST['nombreCliente'];
 $fecha=$_POST['fecha'];
 $total=0;

$idUltimo=$_POST['idUltimo'];
$totalAct=$_POST['total'];

 
  	if ($nombreCliente == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO venta(idCliente, nombreComp, fecha, Total) values ('$idCliente','$nombreCliente','$fecha','$total')";
  	echo $resultado=mysqli_query($conexion,$inserta); 	

	   	//recibo el último id
	   	//$ultimo_id = mysql_insert_id(); 

	}

	
	$actTotal=$conexion->query("UPDATE venta SET Total='$totalAct' WHERE idVenta='$idUltimo'"); 
	

   mysqli_close($conexion);

?>