function agregarProducto(idProveedorRP,nombreProducto,descProducto,tipoCarne,unidadMed,tiempCad,precioC,precioV,unidadesC,unidadesK){

	cadena="idProveedorRP=" + idProveedorRP +  
	"&nombreProducto=" + nombreProducto +
	"&descProducto=" + descProducto +
	"&tipoCarne=" + tipoCarne +
	"&unidadMed=" + unidadMed +
	"&tiempCad=" + tiempCad +	
	"&precioC=" + precioC +
	"&precioV=" + precioV +
	"&unidadesC=" + unidadesC +
	"&unidadesK=" + unidadesK;

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
