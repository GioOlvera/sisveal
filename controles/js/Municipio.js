
  $(buscar_datos2());

function buscar_datos2(consulta){
  $.ajax({
    url: '../../modelo/direccion/Municipio.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#MunicipioDATOS").html(respuesta);
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#txt-buscador', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos2(valor);
  }else {
    buscar_datos2();
  }
});

