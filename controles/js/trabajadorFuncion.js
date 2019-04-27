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

function deshabilitarProv(idTrabajadors){

 cadena="idTrabajadors=" + idTrabajadors;

 $.ajax({
type:"POST",
url:"../../modelo/proveedores/deshabilitarProveedores.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro deshabilitado con exito");
		$('#datos').load('../../modelo/proveedores/tablaProveedoresH.php');
		}else{
			alertify.error("Registro no deshabilitado");		
		}

	}
});
}




function eliminarProv(idProveedor){

 cadena="idProveedor=" + idProveedor;

 $.ajax({
type:"POST",
url:"../../modelo/proveedores/eliminarProveedores.php",
data:cadena,
success: function(r){
	if (r==1) {		
		alertify.error("Registro no eliminado");	
		}else{
		alertify.success("Registro eliminado con exito");
		$('#datos').load('../../modelo/proveedores/tablaProveedoresH.php');
		}

	}
});
}

function habilitarProv(idProveedor){

 cadena="idProveedor=" + idProveedor;

 $.ajax({
type:"POST",
url:"../../modelo/proveedores/habilitarProveedores.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro Habilitado con exito");
		$('#datosD').load('../../modelo/proveedores/tablaProveedoresD.php');
		}else{
			alertify.error("Registro no Habilitado");		
		}

	}
});
}