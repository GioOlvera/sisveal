<html> 
<head> 
<title>Reloj con Javascript</title> 
<script language="JavaScript"> 
function startTime() {
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
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
  

    //fecha
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    //var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    //var curMonth = months[today.getMonth()];
    var curMonth = today.getMonth()+1;
    var curYear = today.getFullYear();

    curDay = ceros(curDay);
    curMonth = ceros(curMonth);

    var date = curDay+"/"+curMonth+"/"+curYear;
    
    document.getElementById("date").value = date;

    if (curMonth >= 8 && min >= 11 && curMonth <= 8 && min <= 11 && sec < 1) {

        if (hr >= 8 && min >= 9 && hr <= 8 && min <= 9 && sec < 1) {
           //document.getElementById("saludo").innerHTML = "buenos días";
    	   notify();
        }else{
    	   false;
        }

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
</head> 

<body onload="startTime()"> 

<h1>Vemos aquí el reloj funcionando...</h1> 

<form name="form_reloj"> 
<div id="clockdate" align="center">
  <div class="clockdate-wrapper">
    <h3 id="clock"></h3>
    <input type="text" id="date" name=""> 
    <div id="saludo"></div>

    <section id="contSaludo"></section>
  </div>
</div>
</form> 

</body> 

</html> 