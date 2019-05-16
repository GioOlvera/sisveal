function agregardatosP(nombreProv,emailProv,rfcProv,telefonoProv,
	cp,cbxestado,cbxmunicipio,cbxlocalidad,calle,no_exterior,no_interior){

	cadena="nombreProv=" + nombreProv + 
	"&emailProv=" + emailProv + 
	"&rfcProv=" + rfcProv +
	"&telefonoProv=" + telefonoProv +	
	"&cp=" + cp +
	"&cbxestado=" + cbxestado +
	"&cbxmunicipio=" + cbxmunicipio +
	"&cbxlocalidad=" + cbxlocalidad + 
	"&calle=" + calle +
	"&no_exterior=" + no_exterior +
	"&no_interior=" + no_interior;

	$.ajax({
		type:"POST",
		url:"../../modelo/proveedores/agregarProveedor.php",
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

function deshabilitarProv(idProveedor){

 cadena="idProveedor=" + idProveedor;

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


function actualizarProveedor(idProveedorP,nombreP,emailP,rfcP,telefonoP){

    cadena="idProveedorP=" + idProveedorP +
    "&nombreP=" + nombreP + 
	"&emailP=" + emailP + 
	"&rfcP=" + rfcP +
	"&telefonoP=" + telefonoP;

    $.ajax({
		type:"POST",
		url:"../../modelo/proveedores/actualizarProveedor.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				$('#myformularioP')[0].reset();
				$('#datos').load('../../modelo/proveedores/tablaProveedoresH.php');
			}else{
				alertify.error("Datos no Guardados");	
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