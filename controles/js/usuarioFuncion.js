function agregardatosU(idTrabajador,cargo,correoE,usuario,password){

	cadena="idTrabajador=" + idTrabajador + 
	"&cargo=" + cargo +
	"&correoE=" + correoE + 
	"&usuario=" + usuario +
	"&password=" + password;

	$.ajax({
		type:"POST",
		url:"../../modelo/usuarios/agregarUsuarios.php",
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
url:"../../modelo/usuarios/deshabilitarUsuarios.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro deshabilitado con exito");
		$('#datos').load('../../modelo/usuarios/tablaUsuariosH.php');
		}else{
			alertify.error("Registro no deshabilitado");		
		}

	}
});
}




function eliminarProv(idTrabajadors){

 cadena="idTrabajadors=" + idTrabajadors;

 $.ajax({
type:"POST",
url:"../../modelo/usuarios/eliminarUsuarios.php",
data:cadena,
success: function(r){
	if (r==1) {		
		alertify.error("Registro no eliminado");	
		}else{
		alertify.success("Registro eliminado con exito");
		$('#datos').load('../../modelo/usuarios/tablaUsuariosH.php');
		}

	}
});
}

function habilitarProv(idTrabajadors){

 cadena="idTrabajadors=" + idTrabajadors;

 $.ajax({
type:"POST",
url:"../../modelo/usuarios/habilitarUsuarios.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro Habilitado con exito");
		$('#datosD').load('../../modelo/usuarios/tablaUsuariosD.php');
		}else{
			alertify.error("Registro no Habilitado");		
		}

	}
});
}