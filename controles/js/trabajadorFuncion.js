function agregardatosT(nombreTrab,apTrab,amTrab,telefonoTrab,edadTrab,fechaTrab,cargo,
	cp,cbxestado,cbxmunicipio,cbxlocalidad,calle,no_exterior,no_interior){

	cadena="nombreTrab=" + nombreTrab + 
	"&apTrab=" + apTrab + 
	"&amTrab=" + amTrab +
	"&telefonoTrab=" + telefonoTrab +
	"&edadTrab=" + edadTrab +
	"&fechaTrab=" + fechaTrab +
	"&cargo=" + cargo +	
	"&cp=" + cp +
	"&cbxestado=" + cbxestado +
	"&cbxmunicipio=" + cbxmunicipio +
	"&cbxlocalidad=" + cbxlocalidad + 
	"&calle=" + calle +
	"&no_exterior=" + no_exterior +
	"&no_interior=" + no_interior;

	$.ajax({
		type:"POST",
		url:"../../modelo/trabajadores/agregarTrabajadores.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				$('#myformulario')[0].reset();
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	});
}

function deshabilitarTrab(idTrabajador){

 cadena="idTrabajador=" + idTrabajador;

 $.ajax({
type:"POST",
url:"../../modelo/trabajadores/deshabilitarTrabajador.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro deshabilitado con exito");
		$('#datos').load('../../modelo/trabajadores/tablaTrabajadoresH.php');
		}else{
			alertify.error("Registro no deshabilitado");		
		}

	}
});
}


function actualizarTrabajador(idTrabajadorT,cargo,telefonoA,edadA){ 

    cadena="idTrabajadorT=" + idTrabajadorT +
    "&cargo=" + cargo + 
	"&telefonoA=" + telefonoA + 
	"&edadA=" + edadA;

    $.ajax({
		type:"POST",
		url:"../../modelo/trabajadores/actualizarTrabjador.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				$('#myformularioT')[0].reset();
				$('#datos').load('../../modelo/trabajadores/tablaTrabajadoresH.php');
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	});
}


function eliminarTrab(idTrabajador){

 cadena="idTrabajador=" + idTrabajador;

 $.ajax({
type:"POST",
url:"../../modelo/trabajadores/eliminarTrabajador.php",
data:cadena,
success: function(r){
	if (r==1) {		
		alertify.error("Registro no eliminado");	
		}else{
		alertify.success("Registro eliminado con exito");
		$('#datos').load('../../modelo/trabajadores/tablaTrabajadoresH.php');
		}

	}
});
}

function habilitarTrab(idTrabajador){

 cadena="idTrabajador=" + idTrabajador;

 $.ajax({
type:"POST",
url:"../../modelo/trabajadores/habilitarTrabajador.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro Habilitado con exito");
		$('#datosD').load('../../modelo/trabajadores/tablaTrabajadoresD.php');
		}else{
			alertify.error("Registro no Habilitado");		
		}

	}
});
}