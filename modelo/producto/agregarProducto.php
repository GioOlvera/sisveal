<?php

require_once "../conexion/conexion.php";
 
 $idProveedorRP=$_POST['idProveedorRP'];
 $nombreProducto=$_POST['nombreProducto'];
 $descProducto=$_POST['descProducto'];
 $tipoCarne=$_POST['tipoCarne'];
 $unidadMed=$_POST['unidadMed'];
 $tiempCad=$_POST['tiempCad'];



 $ExistenciaKP='0';
 $ExistenciaC='0';
 $CantidadLimite='0';
 $FechaEntrada='0';
 $PrecioUnitario='0';


  	if ($nombreProducto == "" || $idProveedorRP == "" || $descProducto == "" || $tipoCarne == "1" || $unidadMed == "1" || $tiempCad == "1" /*|| $precioC == "" || $precioV == "" || $unidadesC == "" || $unidadesK == ""*/) {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO producto(idProveedor, nombre, descripcion, categoriaProd, unidadMedida, tiempoCaducidad) values ('$idProveedorRP', '$nombreProducto', '$descProducto', '$tipoCarne', '$unidadMed','$tiempCad')";
  	echo $resultado=mysqli_query($conexion,$inserta);


  	$inserta2="INSERT INTO almacen(NombreProducto, idProveedores, Categoria, ExistenciaKP, ExistenciaC, CantidadLimite, FechaEntrada, PrecioUnitario) values ('$nombreProducto', '$idProveedorRP', '$tipoCarne', '$ExistenciaKP',
  	'$ExistenciaC', '$CantidadLimite', '$FechaEntrada', '$PrecioUnitario')";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  
	}

   mysqli_close($conexion);

?>