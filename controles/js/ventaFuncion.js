//TABLA VENTA
jQuery(document).on('submit','#myformularioVentaD',function(event){
	event.preventDefault();
	jQuery.ajax({
		url: '../../modelo/ventas/agregarVentaDesc.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		success: function(r){
			/*if (r==1) {				
				alertify.success("Datos Guardados con exito");
				$('#myformularioVenta')[0].reset();
			}else{
				alertify.error("Datos no Guardados");	
			}*/

		}
	})
	.done(function(respuesta){
		//console.log(respuesta);
		if (!respuesta.error) {
			alertify.success("Datos Guardados con exito");
			$('#myformularioVenta')[0].reset();
			$('#myformularioVentaD')[0].reset();
			//alert('Los datos ingresaron con éxito!');
		}else{
			alertify.error("Datos no Guardados");
			//alert('Los datos NO se han ingresado');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
		//alertify.success("Datos no Guardados");
	})
	.always(function(){
		console.log("complete");
		alertify.success("Datos Guardados con exito");
	})

});
//DATOS DE VENTA//

function venta(idCliente,nombreCliente,fecha){

	cadena="idCliente=" + idCliente +
	"&nombreCliente=" + nombreCliente +
	"&fecha=" + fecha;

	$.ajax({
		type:"POST",
		url:"../../modelo/ventas/agregarVenta.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito")
				//$('#myformularioVenta')[0].reset();
			}else{
				alertify.error("Datos no Guardados");;
			}

		}
	});
}
//ACTUALIZA TOTAL DE LA VENTA
function totalAV(total,idUltimo){

	cadena="total=" + total +
	"&idUltimo=" + idUltimo;

	$.ajax({
		type:"POST",
		url:"../../modelo/ventas/agregarVenta.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
			}else{					
				alertify.error("Datos no Guardados");
			}

		}
	});
}


//BLOQUEAR LETRAS
onload = function(){ 
  var precio = document.querySelectorAll('#precio')[0];
  var cajas = document.querySelectorAll('#cantidad')[0];
  precio.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  precio.onpaste = function(e){
     e.preventDefault();
  }
  cajas.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  cajas.onpaste = function(e){
     e.preventDefault();
  }
}

///FECHA
/*onload = function fechaVen() {
	
	var today = new Date();
	var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 
	'Noviembre', 'Diciembre'];
    //var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    //var curWeekDay = days[today.getDay()];
    var curDay = today.getDate();
    var curMonth = months[today.getMonth()]
    //var curMonth = today.getMonth();
    var curYear = today.getFullYear();
    curDay = ceros(curDay);
    curMonth = ceros(curMonth);
    var date = curDay+"/"+curMonth+"/"+curYear;
    document.getElementById("fechaDate").value = date;

    var time = setTimeout(function(){ fechaVen() }, 500);
}
function ceros(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}*/

//BUSCADOR DE CLIENTES


//RADIO BUTTON
function foraneo()
{
	document.getElementById("buscadorCliente").disabled=true;
	document.getElementById("nuevo_cliente").disabled=false;
	document.getElementByName("nombreComp").disabled=false;
}
function local()
{
	document.getElementById("buscadorCliente").disabled=false;
	document.getElementById("nuevo_cliente").disabled=true;
	document.getElementByName("nombreComp").disabled=true;
}
function aceptar()
{
	document.getElementById("buscadorCliente").disabled=true;
	document.getElementById("nuevo_cliente").disabled=true;
	document.getElementByName("nombreComp").disabled=true;
}



