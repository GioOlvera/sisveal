<?php

require_once "../conexion/conexion.php";

 $nombreCliente=$_POST['nombreCliente'];
 $apCliente=$_POST['apCliente'];
 $amCliente=$_POST['amCliente'];
 $telefonoCliente=$_POST['telefonoCliente'];
 $estadoCliente='1';

 $cp=$_POST['cp'];
 $estado=$_POST['cbxestado'];
 $municipio=$_POST['cbxmunicipio'];
 $localidad=$_POST['cbxlocalidad'];
 $calle=$_POST['calle'];
 $no_exterior=$_POST['no_exterior'];
 $no_interior=$_POST['no_interior'];


  	if ($nombreCliente == "" || $apCliente == "" || $amCliente == "" || $telefonoCliente == "" || $cp == "" || $estado == "" || 
  		$municipio == "" || $localidad == "" || $calle == "" || $no_exterior == "" || $no_interior == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO cliente(nombreCliente, apCliente, amCliente, telefonoCliente, estadoCliente) values ('$nombreCliente','$apCliente','$amCliente','$telefonoCliente','$estadoCliente')";
  	echo $resultado=mysqli_query($conexion,$inserta);


  	$inserta2="INSERT INTO direccioncliente(cp, estado, municipio, localidad, calle, no_exterior, no_interior) values ('$cp','$estado','$municipio','$localidad','$calle','$no_exterior','$no_interior')";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  
	}

   mysqli_close($conexion);

?>