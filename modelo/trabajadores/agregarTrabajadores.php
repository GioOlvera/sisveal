<?php

require_once "../conexion/conexion.php";

 $nombreTrab=$_POST['nombreTrab'];
 $apTrab=$_POST['apTrab'];
 $amTrab=$_POST['amTrab'];
 $telefonoTrab=$_POST['telefonoTrab'];
 $edadTrab=$_POST['edadTrab'];
 $fechaTrab=$_POST['fechaTrab'];
 $cargo=$_POST['cargo'];
 $EstadoTrabajador='1';

 $cp=$_POST['cp'];
 $estado=$_POST['cbxestado'];
 $municipio=$_POST['cbxmunicipio'];
 $localidad=$_POST['cbxlocalidad'];
 $calle=$_POST['calle'];
 $no_exterior=$_POST['no_exterior'];
 $no_interior=$_POST['no_interior'];


  	if ($nombreTrab == "" || $apTrab == "" || $amTrab == "" || $telefonoTrab == "" || $edadTrab == "" || $fechaTrab == "" || $cargo == "" || $cargo == "Selecciona el Cargo" || $cp == "" || $estado == "" || $municipio == "" || $localidad == "" || $calle == "" || $no_exterior == "" || $no_interior == "") {
  		echo "campos obligatorios";
  	}else{

  	$inserta="INSERT INTO trabajador(nombreTrabajador, apTrabajador, amTrabajador, telefonoTrabajador, edadTrabajador, dateTrabajador, cargoTrabajador, EstadoTrabajador) values ('$nombreTrab','$apTrab','$amTrab','$telefonoTrab','$edadTrab','$fechaTrab','$cargo','$EstadoTrabajador')";
  	echo $resultado=mysqli_query($conexion,$inserta);


  	$inserta2="INSERT INTO direcciontrabajador(cp, estado, municipio, localidad, calle, no_exterior, no_interior) values ('$cp','$estado','$municipio','$localidad','$calle','$no_exterior','$no_interior')";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  
	}

   mysqli_close($conexion);

?>