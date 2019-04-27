function venta(buscadorCliente,producto,cantidad,precio,fecha){

	cadena="cliente=" + cliente + 
	"&nombreComp=" + nombreComp + 
	"&producto=" + producto +
	"&cantidad=" + cantidad +
	"&precio=" + precio;

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

//TABLA VENTA
/*
 $(mandar_datos());

function mandar_datos(consulta){
  $.ajax({
    url: '../../modelo/ventas/tablaVenta.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#").html(respuesta);
    
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#producto', function(){
  var valor = $(this).val();
  if(valor != ""){
    mandar_datos(valor);
  }else {
    mandar_datos();
  }

$(document).on('keyup', '#cantidad', function(){
  var valor = $(this).val();
  if(valor != ""){
    mandar_datos(valor);
  }else {
    mandar_datos();
  }

$(document).on('keyup', '#precio', function(){
  var valor = $(this).val();
  if(valor != ""){
    mandar_datos(valor);
  }else {
    mandar_datos();
  }
  
});

//TABLA VENTA//
*/



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
	document.getElementById("fecha").disabled=true;
	document.getElementById("nuevo_cliente").disabled=false;
	document.getElementById("nombreComp").disabled=false;
}
function local()
{
	document.getElementById("buscadorCliente").disabled=false;
	document.getElementById("fecha").disabled=false;
	document.getElementById("nuevo_cliente").disabled=true;
	document.getElementById("nombreComp").disabled=true;
}
function bloqueC()
{
	document.getElementById("buscadorCliente").disabled=true;
	document.getElementById("fecha").disabled=true;
	document.getElementById("nuevo_cliente").disabled=true;
	document.getElementById("nombreComp").disabled=true;
}
