  $(buscar_datos3());

function buscar_datos3(consulta){
  $.ajax({
    url: '../../modelo/direccion/Localidad.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#LocalidadDATOS").html(respuesta);
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#txt-buscador', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos3(valor);
  }else {
    buscar_datos3();
  }
});

