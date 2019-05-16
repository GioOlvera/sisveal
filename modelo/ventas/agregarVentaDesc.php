<?php

require_once "../conexion/conexion.php";
 
 $idV=$_POST['idV'];
 $idList=$_POST['idList'];
 $nombreProd=$_POST['nombreProd'];
 $cantidad=$_POST['cantidad'];
 $precio=$_POST['precio'];
 $subTot=$_POST['subTot'];


/*
  	if ($cliente == "" || $nombreComp == "" || $producto == "" || $cantidad == "" || $precio == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO venta(idCliente, nombreCliente, nombreComp, producto, cantidad, precio) values ('$nombreCliente','$nombreComp','$producto','$cantidad','$precio')";
  	echo $resultado=mysqli_query($conexion,$inserta);

	}
*/

	$inserta="INSERT INTO ventadesc(IdVenta, idLista, producto, cantidad, precio, subTotal) values ";

  	for ($i = 0; $i < count($idList); $i++){
  		$inserta.="('".$idV[$i]."', '".$idList[$i]."', '".$nombreProd[$i]."', '".$cantidad[$i]."', '".$precio[$i]."', '".$subTot[$i]."'),";
  	}
	

	$inserta_final = substr($inserta, 0, -1);
  	$inserta_final.=";";

	if($conexion->query($inserta_final)):
		echo json_encode(array('error' => false));	
	else:
		echo json_encode(array('error' => true));
		
	endif;

   mysqli_close($conexion);

?>