<?php

require_once "../conexion/conexion.php";


    $cadena = '20/05/2019';

    list($palabra1, $palabra2, $palabra3) = explode('/', $cadena);

    echo $palabra1 . '<br>';

    echo $palabra2 . '<br>';

    echo $palabra3 . '<br>';

$dias = 7;

    $contador = $palabra1+$dias;
    //$messs = palabra1-
   //$limite = 30;
$ttt = 0;
$yyy = 0;
$resta = 0;
   //for($i = 0; $i <= $contador; $i++) { 

		if ($contador>=28){ 
      		$ttt=$palabra2+1;
        	//echo 'contador '.$contador . '<br />';
        	$palabra1=0;

        	//$yyy=$i-$palabra1;
     	}else if($contador>=1){
     		$ttt=$palabra2;
     	} 	
     
    //$palabra1++;
     	   	
	//} 
	echo 'dias '.$palabra1. '<br />';
    echo 'mes '.$ttt . '<br />';


/*
   while($palabra1 < $contador){

      if ($palabra1<28) {
      	$ttt=$palabra2+1;
        //echo $contador . '<br />';
        $palabra1=0;
     }
      
      $contador++;
      $palabra1++;
       
   }
*/



$idUltimo=$_POST['idUltimo'];
$buscadorProducto=$_POST['buscadorProducto'];
$idProductoR=$_POST['idProductoR'];
$kl_pza=$_POST['kl_pza'];
$cajas=$_POST['cajas'];
$kdcc=$_POST['kdcc'];

$productobd = "SELECT * FROM producto ORDER BY clvProducto";

$productobd = mysql_query("SELECT clvProducto, nombre, categoriaProd, unidadMedida, tiempoCaducidad FROM producto 
WHERE clvProducto = '$idProductoR'");
//$resultadoProd = $conexion->query($productobd);

while($mostrarProd=mysql_fetch_array($productobd)){	

if($mostrarProd['clvProducto']==$idProductoR){			

		if ($buscadorProducto == "" || $kl_pza == "" || $cajas == "" || $kd7cc == "") {
			echo "campos obligatorios";
		}else{

			$inserta="INSERT INTO desccompra(clvCompra, producto, kl_pza, cajas, klxCaja) values ('$idUltimo','$buscadorProducto','$kl_pza', '$cajas', '$kdcc')";
			echo $resultado=mysqli_query($conexion,$inserta); 	

	   	//recibo el último id
	   	//$ultimo_id = mysql_insert_id(); 

		}
	}	

}


   mysqli_close($conexion);

?>