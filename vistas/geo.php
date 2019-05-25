<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
 <meta charset="utf-8"/>
 <title>Desc</title>

 
</head>
<body>
<script type="text/javascript" src="../controles/js/jquery.js"></script>

<div id="fecha">2012-07-25 18:30:50</div>

<a href="#" id="see">Ver efecto</a>
<br>

<script type="text/javascript">
$(document).ready(function() {

    $('#see').click(function(){
        var element = $("#fecha").text().split(' ');
        var fecha = element[0].split('-');
        //var fecha1=fecha[2];
        //var tfecha1=fecha1+4;
        //document.getElementById("fecha2").innerHTML = fecha[2]+'/'+fecha[1]+'/'+fecha[0];

        document.getElementById("fecha2").innerHTML = fecha[0]+'/'+fecha[1]+'/'+fecha[2];
        //alert('Fecha formateada: '+fecha[2]+'/'+fecha[1]+'/'+fecha[0]);
        var tiempo = element[1].split(':');
        document.getElementById("hora").innerHTML = tiempo[0]+'h '+tiempo[1]+'min '+tiempo[2]+' seg';
        //alert('Tiempo formateado: '+tiempo[0]+'h '+tiempo[1]+'min '+tiempo[2]+' seg');
        return false;
    });
});
</script>

<?php
    $cadena = '2012-07-25';

    list($palabra1, $palabra2, $palabra3) = explode('-', $cadena);

    echo $palabra1 . '<br>';

    echo $palabra2 . '<br>';

    echo $palabra3 . '<br>';


   $contador = 1;
   $limite = 10;
   while($contador < $limite){
      if ($contador<5) {
        echo $contador . '<br />';
        $ttt=$contador-4;
      }
      
      $contador++;
      
   }echo 'hhhh'.$ttt . '<br />';
?>




<h3 id="fecha2"></h3>
<h3 id="hora"></h3>
    </body>

 </body>
</html>