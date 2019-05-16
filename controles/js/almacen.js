$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: '../../modelo/almacen/mostrarTabla.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datosAlmacen").html(respuesta);
	})
	.fail(function(){
		consulta.log("error");
	})
}

$(document).on('keyup', '#txt-buscador', function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos(valor);
	}else {
		buscar_datos();
	}
});