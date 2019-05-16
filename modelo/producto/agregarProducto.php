<?php

require_once "../conexion/conexion.php";
 
 $idProveedorRP=$_POST['idProveedorRP'];
 $nombreProducto=$_POST['nombreProducto'];
 $descProducto=$_POST['descProducto'];
 $tipoCarne=$_POST['tipoCarne'];
 $unidadMed=$_POST['unidadMed'];
 $tiempCad=$_POST['tiempCad'];
 $precioC=$_POST['precioC'];
 $precioV=$_POST['precioV'];
 $unidadesC=$_POST['unidadesC'];
 $unidadesK=$_POST['unidadesK'];


  	if ($nombreProducto == "" || $idProveedorRP == "" || $descProducto == "" || $tipoCarne == "1" || $unidadMed == "1" || $tiempCad == "1" || $precioC == "" || $precioV == "" || $unidadesC == "" || $unidadesK == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO producto(idProveedor, nombre, descripcion, categoriaProd, unidadMedida, tiempoCaducidad, precioProductoCom, precioProductoVen, unidadesCaja, kilosCaja) values ('$idProveedorRP', '$nombreProducto', '$descProducto', '$tipoCarne', '$unidadMed','$tiempCad', '$precioC', '$precioV', '$unidadesC', '$unidadesK')";
  	echo $resultado=mysqli_query($conexion,$inserta);
  
	}

   mysqli_close($conexion);

?>