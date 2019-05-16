  $(buscar_datosP());

function buscar_datosP(consulta){
  $.ajax({
    url: '../../modelo/producto/buscarProveedor.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#proveedorDATOS").html(respuesta);
    
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#buscadorProveedor', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datosP(valor);
  }else {
    buscar_datosP();
  }
});
