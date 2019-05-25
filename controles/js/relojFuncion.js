$(buscar_reloj());

function buscar_reloj(consulta){
	$.ajax({
		url: '../../modelo/reloj/reloj.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#mostrarReloj").html(respuesta);
	})
	.fail(function(){
		consulta.log("error");
	})
}
/*
$(document).on('keyup', '#txt-buscador', function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_reloj(valor);
	}else {
		buscar_reloj();
	}
});*/