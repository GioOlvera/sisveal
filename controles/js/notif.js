/*var button = document.getElementById("button");
	button.addEventListener('click', function(){
		notify();
	});*/

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