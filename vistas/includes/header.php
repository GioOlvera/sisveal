<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
	echo 'Uste no tiene Autorización';
	header("Location: ../../index.html");
	die();
}
?>

<link rel="stylesheet" href="../css/menuNotificaciones.css" >

<script language="JavaScript"> 
onload = function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("relojs").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
  

    //fecha
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    //var curMonth = months[today.getMonth()];
    var curMonth = today.getMonth()+1;
    var curYear = today.getFullYear();

    curDay = ceros(curDay);
    curMonth = ceros(curMonth);

    var date = curWeekDay+", "+curDay+"/"+curMonth+"/"+curYear;
    
    document.getElementById("fechaAct").innerHTML = date;

    //if (curMonth >= 8 && min >= 9 && curMonth <= 8 && min <= 11 && sec < 1) {

        if (hr >= 9 && min >= 47 && hr <= 9 && min <= 47 && sec < 1) {
           //document.getElementById("saludo").innerHTML = "buenos días";
    	   notify();
        }else{
    	   false;
        }

    /*
    }else{
        false;
    }

    /*if (hr >= 12 && min >= 1 && hr < 7 ) {
        document.getElementById("saludo").innerHTML = "buenas tardes";
    }
    if (hr >= 7 && min >= 1) {
    	document.getElementById("saludo").innerHTML = "buenas noches";
    }*/
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
function ceros(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
</script> 
<script src="../../controles/js/notif.js"></script>
<div id="cuadroMenu">
<header align="center" id="notificacion" style="background-color: teal;">		
    
	<ul id="notif" >
		<li><a>HORA/FECHA: <a id="relojs"></a> <a id="fechaAct"></a></a></li>
		<li><a style="background-color: lightseagreen;"><strong>SISTEMA DE VENTAS Y ALMACENAMIENTO</strong></a></li>
		<li><a><img class="icon" src="../img/Usuar.png" alt="usuario"> USUARIO: <?php echo $_SESSION['usuario']; ?></a></li>
		<li><a> | </a></li>
		<li><a><img class="icon" src="../img/escritura.png" alt="notificación"> NOTIFICACIONES</a></li>
		<li><a href="../includes/cerrarSesion.php"><img class="icon" src="../img/cerrar.png" alt="Salir del sistema" title="salir"> CERRAR SESIÓN</a></li>		
	</ul>			
    
</header>
</div>
<style type="text/css">
    div#cuadroMenu{
  width: 1400px;
  height: 58px;
  position: relative;
  background: teal;
}
</style>