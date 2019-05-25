$(buscar_prodTabla());

function buscar_prodTabla(consulta){
	$.ajax({
		url: '../../modelo/producto/tablaProducto.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datosProducto").html(respuesta);
	})
	.fail(function(){
		consulta.log("error");
	})
}

$(document).on('keyup', '#txt-buscador', function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_prodTabla(valor);
	}else {
		buscar_prodTabla();
	}
});