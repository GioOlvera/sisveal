<?php
session_start();
require ("conexion/conexion.php");
  //$conexion=conexion();
  // Obtengo los datos cargados en el formulario de login.
$usuario = $_POST['usuario'];
$clave =$_POST['clave'];

  // Consulta segura para evitar inyecciones SQL.
$sql = "SELECT usuario, clave, tipo FROM usuario WHERE usuario='$usuario' AND clave ='$clave'";
  //$resultado = $conn->query($sql);

$resultado = mysqli_query($conexion,$sql);
$filas=mysqli_num_rows($resultado);
  //la intruccion mysqli_num_rows Verificando si el usuario existe en la base de datos.
if($filas>0){

   	//echo 1;

  while($datos = $resultado->fetch_assoc() ){        

    if($datos['tipo']=='Gerente'){
    header("Location: ../vistas/InicioPrincipal.php");
    session_start();
    $_SESSION['usuario'] = $usuario;
    		//echo 1;
  }else

  if($datos['tipo']=='Administrador'){
    header("Location: ../index.html");
    session_start();
    $_SESSION['usuario'] = $usuario;
    		//echo 0;
  }else

  if($datos['tipo']=='Vendedor'){
   header("Location: ../index.html");
   session_start();
   $_SESSION['usuario'] = $usuario;
    			//echo 0;
 }
}

}else{
  header("Location: ../index.html");

}

$conexion->close();
?>

