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

function deshabilitarUsua(idTrabajador){

 cadena="idTrabajador=" + idTrabajador;

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


function actualizarUsuario(idTrabajadorU,usuarioU,emailU,password){ 

    cadena="idTrabajadorU=" + idTrabajadorU +
    "&usuarioU=" + usuarioU + 
    "&emailU=" + emailU + 
	"&password=" + password;

    $.ajax({
		type:"POST",
		url:"../../modelo/usuarios/actualizarUsuario.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				//$('#myformularioT')[0].reset();
				$('#datos').load('../../modelo/usuarios/tablaUsuariosH.php');
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	});
}


function eliminarUsuario(idTrabajador){

 cadena="idTrabajador=" + idTrabajador;

 $.ajax({
type:"POST",
url:"../../modelo/usuarios/eliminarUsuario.php",
data:cadena,
success: function(r){
	if (r==1) {	
		alertify.success("Registro eliminado con exito");
		$('#datos').load('../../modelo/usuarios/tablaUsuariosH.php');			
		}else{
		alertify.error("Registro no eliminado");
		}

	}
});
}

function habilitarUsua(idTrabajador){

 cadena="idTrabajador=" + idTrabajador;

 $.ajax({
type:"POST",
url:"../../modelo/usuarios/habilitarUsuario.php",
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