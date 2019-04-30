
//TABLA VENTA
jQuery(document).on('submit','#myformularioVenta',function(event){
	event.preventDefault();
	jQuery.ajax({
		url: '../../modelo/ventas/agregarVenta.php',
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
//TABLA VENTA//

function venta(buscadorCliente,fecha){

	cadena="cliente=" + cliente + 
	"&nombreComp=" + nombreComp + 
	"&producto=" + producto +
	"&cantidad=" + cantidad +
	"&fecha=" + fecha;

	$.ajax({
		type:"POST",
		url:"../../modelo/ventas/agregarVenta.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				$('#myformularioVenta')[0].reset();
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	});
}


//BUSCADOR DE CLIENTES
var buscador = $("#table").DataTable();

$("#input-search").keyup(function(){
    
    buscador.search($(this).val()).draw();
    
    if ($("#input-search").val() == ""){
        $(".content-search").fadeOut(300);
    }else{
        $(".content-search").fadeIn(300);
    }
})

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
function bloqueC()
{
	document.getElementById("buscadorCliente").disabled=true;
	document.getElementById("nuevo_cliente").disabled=true;
	document.getElementByName("nombreComp").disabled=true;
}
