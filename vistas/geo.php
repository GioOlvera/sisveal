<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
 <meta charset="utf-8"/>
 <title>Ubicación</title>
   <script type="text/javascript">
 
     function localizar()
      {
        navigator.geolocation.getCurrentPosition(ubicacion,error);

      }
 
     function ubicacion(posicion)
      {
        var contenedor = document.getElementById("mapa");
 
        var latitud = posicion.coords.latitude;
        var longitud = posicion.coords.longitude;
        var precision = posicion.coords.accuracy;
 
          alert("Lat="+latitud+" - Long="+longitud+" - Precision="+precision);
       }
 
      function error(error)
       {
         if(error.code == 0)
            alert("Error Desconocido");
         else if(error.code == 1)
             alert("No fue posible contactarte");
         else if(error.code == 2)
            alert("No hay una ubicacion disponible");
         else if(error.code == 3)
            alert("Tiempo agotado");
        else
            alert("Error Desconocido");
        }
    </script>
 
</head>
<body onload="localizar()">
<?php
	echo "<br><br>";
$latitude = "<script> document.write(latitud); </script>";
echo "MI latitude = ".$latitude." <br>";
$longitude = "<script> document.write(longitud); </script>";
echo "longitude = ".$longitude." <br>";
?>
  <button onClick="localizar()">Ver mi Ubicación </button>


<!--FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF-->
<script language='JavaScript'>
  var myVal = 'Ahora si.. El problema esta resuelto..!!';
  function getvariable(myVal) {

    //var variable = eval(val);
    //document.write(variable);
  }

  var miVariable = 1; 
</script>
<?php
function obtenervarjavascript($js_var_name) {
  $x = "<script language='JavaScript'> getvariable('" . $js_var_name . "'); </script>";
  return $x;
}
?>


<form name="form1">
  <?php
  $var1 = obtenervarjavascript("document.forms[0].name");
  $var2 = "<script language='JavaScript'> document.write(myVal) </script>";
  ?>
  <center><?php print "El nombre del formulario: " . $var1; ?></center><br>
  <center><?php print "JScript guardada: " . $var2; ?></center><br>

  <input type="button" name="" value="Prueba">

  <br>

  <?php
$datos = "<script>document.write(miVariable)</script>";
$datos2 = "<script>document.write(myVal);</script>";
echo "resultado: ".$datos2;
?>
</form>
<p></p>


 <body>
 

    </body>

 </body>
</html>