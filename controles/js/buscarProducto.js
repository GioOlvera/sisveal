  $(buscar_datosProd());

function buscar_datosProd(consulta){
  $.ajax({
    url: '../../modelo/producto/buscarProducto.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#productoDATOS").html(respuesta);
    
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#buscadorProducto', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datosProd(valor);
  }else {
    buscar_datosProd();
  }
});
