function agregarProducto(idProveedorRP,nombreProducto,descProducto,tipoCarne,unidadMed,tiempCad
  /*,precioC,precioV,unidadesC,unidadesK*/){

	cadena="idProveedorRP=" + idProveedorRP +  
	"&nombreProducto=" + nombreProducto +
	"&descProducto=" + descProducto +
	"&tipoCarne=" + tipoCarne +
	"&unidadMed=" + unidadMed +
	"&tiempCad=" + tiempCad;

	$.ajax({
		type:"POST",
		url:"../../modelo/producto/agregarProducto.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				$('#myformularioProd')[0].reset();
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	});
}

//BLOQUEAR LETAS
onload = function(){ 
  var unidadesC = document.querySelectorAll('#unidadesC')[0];
  var unidadesK = document.querySelectorAll('#unidadesK')[0];
  var precio = document.querySelectorAll('#precioC')[0];
  var cajas = document.querySelectorAll('#precioV')[0];

  unidadesC.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  unidadesC.onpaste = function(e){
     e.preventDefault();
  }
  unidadesK.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  unidadesK.onpaste = function(e){
     e.preventDefault();
  }
  precio.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  precio.onpaste = function(e){
     e.preventDefault();
  }
  cajas.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  cajas.onpaste = function(e){
     e.preventDefault();
  }
}


function actualizarProducto(idProductoE,nombreProductoE,descProductoE,tipoCarneE,unidadMedE,tiempCadE){

  cadena="idProductoE=" + idProductoE +  
  "&nombreProductoE=" + nombreProductoE +
  "&descProductoE=" + descProductoE +
  "&tipoCarneE=" + tipoCarneE +
  "&unidadMedE=" + unidadMedE +
  "&tiempCadE=" + tiempCadE;

  $.ajax({
    type:"POST",
    url:"../../modelo/producto/actualizarProducto.php",
    data:cadena,
    success: function(r){
      if (r==1) {       
        //$('#tabla').load('interfaces/tabla.php');
        alertify.success("Datos Guardados con exito");
        $('#myformularioProdE')[0].reset();
      }else{
        alertify.error("Datos no Guardados"); 
      }

    }
  });
}

function eliminarProducto(clvProducto){

 cadena="clvProducto=" + clvProducto;

 $.ajax({
type:"POST",
url:"../../modelo/producto/eliminarProducto.php",
data:cadena,
success: function(r){
  if (r==1) {   
    alertify.error("Registro no eliminado");  
    }else{
    alertify.success("Registro eliminado con exito");
    $('#datosProducto').load('../../modelo/producto/tablaProducto.php');
    }

  }
});
}