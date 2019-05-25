<?php

require_once "../conexion/conexion.php";

$idUltimo=$_POST['idUltimo'];
$buscadorProducto=$_POST['buscadorProducto'];
$kl_pza=$_POST['kl_pza'];
$cajas=$_POST['cajas'];
$kdcc=$_POST['kdcc'];


	if ($buscadorProducto == "" || $kl_pza == "" || $cajas == "" || $kdcc == "") {
		echo "campos obligatorios";
	}else{

		$inserta="INSERT INTO desccompra(clvCompra, producto, kl_pza, cajas, klxCaja) values ('$idUltimo','$buscadorProducto','$kl_pza', '$cajas', '$kdcc')";
		echo $resultado=mysqli_query($conexion,$inserta); 	

	}

   mysqli_close($conexion);

?>