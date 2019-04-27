  $(buscar_datos());

function buscar_datos(consulta){
  $.ajax({
    url: '../../modelo/usuarios/buscadorTrabNom.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta},
  })
  .done(function(respuesta){
    $("#nombreDATOS").html(respuesta);
    
  })
  .fail(function(){
    consulta.log("error");
  })
}

$(document).on('keyup', '#txt-buscadorTrabajador', function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos(valor);
  }else {
    buscar_datos();
  }
});

//////////////////////////////////////////7
//////////////////////////////////////////7
//////////////////////////////////////////7
  $(buscar_datos2());

function buscar_datos2(consulta2){
  $.ajax({
    url: '../../modelo/usuarios/buscadorTrabAp.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta2: consulta2},
  })
  .done(function(respuesta2){
    $("#apDatos").html(respuesta2);
  })
  .fail(function(){
    consulta2.log("error");
  })
}

$(document).on('keyup', '#txt-buscadorTrabajador', function(){
  var valor2 = $(this).val();
  if(valor2 != ""){
    buscar_datos2(valor2);
  }else {
    buscar_datos2();
  }
});

////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////

  $(buscar_datos3());

function buscar_datos3(consulta3){
  $.ajax({
    url: '../../modelo/usuarios/buscadorTrabAm.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta3: consulta3},
  })
  .done(function(respuesta3){
    $("#amDatos").html(respuesta3);
  })
  .fail(function(){
    consulta3.log("error");
  })
}

$(document).on('keyup', '#txt-buscadorTrabajador', function(){
  var valor3 = $(this).val();
  if(valor3 != ""){
    buscar_datos3(valor3);
  }else {
    buscar_datos3();
  }
});