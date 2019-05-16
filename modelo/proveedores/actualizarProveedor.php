<?php

require_once "../conexion/conexion.php";
  
 $idProveedorP=$_POST['idProveedorP']; 
 $nombreP=$_POST['nombreP'];
 $emailP=$_POST['emailP'];
 $rfcP=$_POST['rfcP'];
 $telefonoP=$_POST['telefonoP'];

 /*$cp=$_POST['cp'];
 $estado=$_POST['cbxestado'];
 $municipio=$_POST['cbxmunicipio'];
 $localidad=$_POST['cbxlocalidad'];
 $calle=$_POST['calle'];
 $no_exterior=$_POST['no_exterior'];
 $no_interior=$_POST['no_interior'];*/


  	if ($nombreP == "" || $emailP == "" || $rfcP == "" || $telefonoP == "" ) {
  		echo "campos obligatorios";
  	}else{

  	$inserta="UPDATE proveedor SET nombreProveedor='$nombreP', email='$emailP', RFC='$rfcP', telefono='$telefonoP' WHERE idProveedor='$idProveedorP'";
  	echo $resultado=mysqli_query($conexion,$inserta);

    /*
  	$inserta2="UPDATE direccioncliente SET cp='$cp', estado='$estado', municipio='$municipio', localidad='$localidad', calle='$calle', no_exterior='$no_exterior', no_interior='$no_interior' WHERE idCliente='$idClienteE'";
  	echo $resultado2=mysqli_query($conexion,$inserta2);
  */
	}

   mysqli_close($conexion);

?>