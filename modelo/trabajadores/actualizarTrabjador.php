<?php

require_once "../conexion/conexion.php";
  
 $idTrabajadorT=$_POST['idTrabajadorT']; 
 $cargo=$_POST['cargo'];
 $telefonoA=$_POST['telefonoA'];
 $edadA=$_POST['edadA'];
 $telefonoP=$_POST['telefonoP'];

 /*$cp=$_POST['cp'];
 $estado=$_POST['cbxestado'];
 $municipio=$_POST['cbxmunicipio'];
 $localidad=$_POST['cbxlocalidad'];
 $calle=$_POST['calle'];
 $no_exterior=$_POST['no_exterior'];
 $no_interior=$_POST['no_interior'];*/


  	if ($cargo == "" || $telefonoA == "" || $edadA == "" ) {
  		echo "campos obligatorios";
  	}else{

  	$inserta="UPDATE trabajador SET cargoTrabajador='$cargo', telefonoTrabajador='$telefonoA', edadTrabajador='$edadA' WHERE idTrabajador='$idTrabajadorT'";
  	echo $resultado=mysqli_query($conexion,$inserta);

    /*
  	$inserta2="UPDATE direccioncliente SET cp='$cp', estado='$estado', municipio='$municipio', localidad='$localidad', calle='$calle', no_exterior='$no_exterior', no_interior='$no_interior' WHERE idCliente='$idClienteE'";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  */
	}

   mysqli_close($conexion);

?>