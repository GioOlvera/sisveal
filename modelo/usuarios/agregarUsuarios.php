<?php 

require_once "../conexion/conexion.php";

$idTrabajador = $_POST['idTrabajador'];	
$cargo = $_POST['cargo'];
$correoE = $_POST['correoE'];	
$usuario = $_POST['usuario'];	
$password = md5($_POST['password']);
$Habilitado = "1";

if ($idTrabajador == "" || $cargo == "" || $correoE == "" || $usuario == "" || $password == "") { 
	echo "campos obligatorios";
}else{
	//consulta para insertar ddatos
	$insertar = "INSERT INTO usuario(idTrabajador, usuario, clave, tipo, correo, EstadoUsuario) VALUES ('$idTrabajador', '$usuario', '$password', '$cargo', '$correoE', '$Habilitado')";
	echo $resultado = mysqli_query($conexion, $insertar);
}

mysqli_close($conexion);

?>