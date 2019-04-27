<?php
require_once "conexion/conexion.php";

session_start();
$_SESSION['usuario'] = "SELECT usuario FROM usuario='$Usuario'";
header("InicioPrincipal.php: ");
header("ClientesPrincipal-Registro.php: ");
header("ClientesPrincipal-Habilitados.php: ");
header("ClientesPrincipal-Deshabilitados.php: ");

header("ProveedoresPrincipales-RegFisico.php: ");
header("ProveedoresPrincipales-RegMoral.php: ");
header("ProveedoresPrincipales-HabFisico.php: ");
header("ProveedoresPrincipales-HabMoral.php: ");

header("TrabajadoresPrincipales-Registro.php: ");
header("TrabajadoresPrincipales-Habilitados.php: ");
header("TrabajadoresPrincipales-Deshabilitados.php: ");

header("UsuarioPrincipal-Registro.php: ");



session_unset();//libera todas las variables de sesion
session_destroy();//destruye toda la informacion registrada se una sesion
header("Location: ../index.html");

if(($_SESSION["clave"])!=''){

}else {
	header("Location: ../index.html");
}
?>