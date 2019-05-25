<?php

require_once "../conexion/conexion.php";
  
 $idProductoE=$_POST['idProductoE']; 
 $nombreProductoE=$_POST['nombreProductoE'];
 $descProductoE=$_POST['descProductoE'];
 $tipoCarneE=$_POST['tipoCarneE'];
 $unidadMedE=$_POST['unidadMedE'];
 $tiempCadE=$_POST['tiempCadE'];



  	if ($nombreProductoE == "" || $descProductoE == "" || $tipoCarneE == "" || $unidadMedE == "" || $tiempCadE == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="UPDATE producto SET nombre='$nombreProductoE', descripcion='$descProductoE', categoriaProd='$tipoCarneE', unidadMedida='$unidadMedE', tiempoCaducidad='$tiempCadE' WHERE clvProducto='$idProductoE'";
  	echo $resultado=mysqli_query($conexion,$inserta);

	}

   mysqli_close($conexion);

?>