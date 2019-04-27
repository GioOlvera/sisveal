<?php

	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "proyecto";
$conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);
mysqli_query($conexion,"SET NAMES 'utf8'");
mysqli_set_charset($conexion,'utf8');  
if(!$conexion){
	echo 'no conecta';
}else{
	//echo 'CONECTADO';
}

?>