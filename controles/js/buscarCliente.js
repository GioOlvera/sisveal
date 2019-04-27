  $(buscar_datos());

function buscar_datos(consulta){
  $.ajax({
    url: '../../modelo/ventas/buscadorCliente.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#clienteDATOS").html(respuesta);
    
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#buscadorCliente', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos(valor);
  }else {
    buscar_datos();
  }
});