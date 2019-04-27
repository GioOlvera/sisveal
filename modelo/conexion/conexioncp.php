<?php

	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "codigopostal";
$link = mysqli_connect($servidor, $usuario, $password, $basededatos);
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_set_charset($link,'utf8');  
if(!$link){
	echo 'no conecta';
}else{
	echo ' ';
}

?>