onload = function fechaVen() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "AM" : "PM";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
   
    //fecha
    var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 
    'Noviembre', 'Diciembre'];
    var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    //var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = today.getMonth()+1;
    var curYear = today.getFullYear();
    
    curDay = ceros(curDay);
    curMonth = ceros(curMonth);

    var date = curDay+"/"+curMonth+"/"+curYear; 

    document.getElementById("clock").value = hr + ":" + min + ":" + sec + " " + ap;
    document.getElementById("fechaDate").value = date;
    document.getElementById("date").innerHTML = date;
	//$('#fechaDate').val(date);

	
    	if (hr >= 8 && min >= 11 && hr <= 8 && min <= 11 && sec < 1) {
        	//document.getElementById("saludo").innerHTML = "buenos días";
    		notify();
    	}else{
    		false;
    	}
	
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
	}