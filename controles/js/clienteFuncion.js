function agregardatos(nombreCliente,apCliente,amCliente,telefonoCliente,
	cp,cbxestado,cbxmunicipio,cbxlocalidad,calle,no_exterior,no_interior){

	cadena="nombreCliente=" + nombreCliente + 
	"&apCliente=" + apCliente + 
	"&amCliente=" + amCliente +
	"&telefonoCliente=" + telefonoCliente +	
	"&cp=" + cp +
	"&cbxestado=" + cbxestado +
	"&cbxmunicipio=" + cbxmunicipio +
	"&cbxlocalidad=" + cbxlocalidad + 
	"&calle=" + calle +
	"&no_exterior=" + no_exterior +
	"&no_interior=" + no_interior;

	$.ajax({
		type:"POST",
		url:"../../modelo/clientes/agregarCliente.php",
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


function deshabilitarCliente(idCliente){

 cadena="idCliente=" + idCliente;

 $.ajax({
type:"POST",
url:"../../modelo/clientes/deshabilitarCliente.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro deshabilitado con exito");
		$('#datos').load('../../modelo/clientes/tablaClientesH.php');
		}else{
			alertify.error("Registro no deshabilitado");		
		}

	}
});
 
}


function actualizarCliente(idClienteE,nombreClienteE,apClienteE,amClienteE,telefonoClienteE){

    cadena="idClienteE=" + idClienteE +
    "&nombreClienteE=" + nombreClienteE + 
	"&apClienteE=" + apClienteE + 
	"&amClienteE=" + amClienteE +
	"&telefonoClienteE=" + telefonoClienteE;

    $.ajax({
		type:"POST",
		url:"../../modelo/clientes/actualizarCliente.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.success("Datos Guardados con exito");
				$('#myformularioE')[0].reset();
				$('#datos').load('../../modelo/clientes/tablaClientesH.php');
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	});
}

/*

function agregaform(salida){
	d=salida.split('||');

$('#idClienteE').val(d[0]);
$('#nombreClienteE').val(d[1]);


}*/

function eliminarCliente(idCliente){

 cadena="idCliente=" + idCliente;

 $.ajax({
type:"POST",
url:"../../modelo/clientes/eliminarClientes.php",
data:cadena,
success: function(r){
	if (r==1) {		
		alertify.error("Registro no eliminado");	
		}else{
		alertify.success("Registro eliminado con exito");
		$('#datos').load('../../modelo/clientes/tablaClientesH.php');
		}

	}
});
}


function habilitarCliente(idCliente){

 cadena="idCliente=" + idCliente;

 $.ajax({
type:"POST",
url:"../../modelo/clientes/habilitarCliente.php",
data:cadena,
success: function(r){
	if (r==1) {				
		alertify.success("Registro deshabilitado con exito");
		$('#datosD').load('../../modelo/clientes/tablaClientesD.php');
		}else{
			alertify.error("Registro no deshabilitado");		
		}

	}
});
}