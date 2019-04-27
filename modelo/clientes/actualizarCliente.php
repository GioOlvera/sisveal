<?php

require_once "../conexion/conexion.php";
  
 $idClienteE=$_POST['idClienteE']; 
 $nombreClienteE=$_POST['nombreClienteE'];
 $apClienteE=$_POST['apClienteE'];
 $amClienteE=$_POST['amClienteE'];
 $telefonoClienteE=$_POST['telefonoClienteE'];

 /*$cp=$_POST['cp'];
 $estado=$_POST['cbxestado'];
 $municipio=$_POST['cbxmunicipio'];
 $localidad=$_POST['cbxlocalidad'];
 $calle=$_POST['calle'];
 $no_exterior=$_POST['no_exterior'];
 $no_interior=$_POST['no_interior'];*/


  	if ($nombreClienteE == "" || $apClienteE == "" || $amClienteE == "" || $telefonoClienteE == "" ) {
  		echo "campos obligatorios";
  	}else{

  	$inserta="UPDATE cliente SET nombreCliente='$nombreClienteE', apCliente='$apClienteE', amCliente='$amClienteE', telefonoCliente='$telefonoClienteE' WHERE idCliente='$idClienteE'";
  	echo $resultado=mysqli_query($conexion,$inserta);

    /*
  	$inserta2="UPDATE direccioncliente SET cp='$cp', estado='$estado', municipio='$municipio', localidad='$localidad', calle='$calle', no_exterior='$no_exterior', no_interior='$no_interior' WHERE idCliente='$idClienteE'";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  */
	}

   mysqli_close($conexion);

?>