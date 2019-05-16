  $(buscar_datosEst());

function buscar_datosEst(consulta){
  $.ajax({
    url: '../../modelo/direccion/Estado.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#EstadoDATOS").html(respuesta);
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#txt-buscador', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datosEst(valor);
  }else {
    buscar_datosEst();
  }
});

