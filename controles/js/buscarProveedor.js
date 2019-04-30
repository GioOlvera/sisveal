  $(buscar_datos());

function buscar_datos(consulta){
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
    buscar_datos(valor);
  }else {
    buscar_datos();
  }
});
  function enviar(idProveedor) {
  d=idProveedor;
  
  $('#idProveedorRP').val(d);

}
