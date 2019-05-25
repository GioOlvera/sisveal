onload = function fechaVen() {
    var today = new Date();
    var hrs = today.getHours();
    var mint = today.getMinutes();
    var secs = today.getSeconds();
    ap = (hrs < 12) ? "AM" : "PM";
    hrs = (hrs == 0) ? 12 : hrs;
    hrs = (hrs > 12) ? hrs - 12 : hrs;
    //Add a zero in front of numbers<10
    hrs = checkTime(hrs);
    mint = checkTime(mint);
    secs = checkTime(secs);
   
    //fecha
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 
    'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    //var curWeekDay = days[today.getDay()];
    var curDay1 = today.getDate();
    var curMonth1 = today.getMonth()+1;
    var curYear1 = today.getFullYear();
    
    curDay1 = ceros(curDay1);
    curMonth1 = ceros(curMonth1);

    var date1 = curDay1+"/"+curMonth1+"/"+curYear1; 

    //document.getElementById("clock").value = hrs + ":" + mint + ":" + secs + " " + ap;
    document.getElementById("fechaDate").value = date1;
    //document.getElementById("date").innerHTML = date;
	//$('#fechaDate').val(date);

	
    /*	if (hr >= 8 && min >= 11 && hr <= 8 && min <= 11 && sec < 1) {
        	//document.getElementById("saludo").innerHTML = "buenos días";
    		notify();
    	}else{
    		false;
    	}
	*/
    /*if (hr >= 12 && min >= 1 && hr < 7 ) {
        document.getElementById("saludo").innerHTML = "buenas tardes";
    }
    if (hr >= 7 && min >= 1) {
    	document.getElementById("saludo").innerHTML = "buenas noches";
    }*/
    
    var time = setTimeout(function(){ fechaVen() }, 500);
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
/*
	function notify(){
		if (!("Notification" in window)) {
			alert("TU NAVEGADOR NO SOPORTA ");
		}else if (Notification.permission === "granted") {
			var notification = new Notification("PRIMERA NOTIFICACIÓN");
		}else if (Notification.permission !== "denied") {
			Notification.requestPermission(function(permission){
				if (Notification.permission === "granted") {
					var notification = new Notification("HOLA MUNDO !");
				}
			});
		}
	}*/