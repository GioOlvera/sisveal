<?php

require_once "../conexion/conexion.php";

 $nombreProv=$_POST['nombreProv'];
 $emailProv=$_POST['emailProv'];
 $rfcProv=$_POST['rfcProv'];
 $telefonoProv=$_POST['telefonoProv'];
 $estadoProveedor='1';

 $cp=$_POST['cp'];
 $estado=$_POST['cbxestado'];
 $municipio=$_POST['cbxmunicipio'];
 $localidad=$_POST['cbxlocalidad'];
 $calle=$_POST['calle'];
 $no_exterior=$_POST['no_exterior'];
 $no_interior=$_POST['no_interior'];


  	if ($nombreProv == "" || $emailProv == "" || $rfcProv == "" || $telefonoProv == "" || $cp == "" || $estado == "" || 
  		$municipio == "" || $localidad == "" || $calle == "" || $no_exterior == "" || $no_interior == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO proveedor(nombreProveedor, email, RFC, telefono, estadoProveedor) values ('$nombreProv','$emailProv','$rfcProv','$telefonoProv','$estadoProveedor')";
  	echo $resultado=mysqli_query($conexion,$inserta);


  	$inserta2="INSERT INTO direccionproveedor(cp, estado, municipio, localidad, calle, no_exterior, no_interior) values ('$cp','$estado','$municipio','$localidad','$calle','$no_exterior','$no_interior')";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  
	}

   mysqli_close($conexion);

?>