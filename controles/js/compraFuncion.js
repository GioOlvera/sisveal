//TABLA COMPRA
/*jQuery(document).on('submit','#myformularioCompD',function(event){
	event.preventDefault();
	jQuery.ajax({
		url: '../../modelo/almacen/agregarCompraDesc.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		success: function(r){
			/*if (!r==1) {				
				alertify.success("Datos Guardados con exito");
				$('#myformularioCompD')[0].reset();
				$('#myformularioComp')[0].reset();
			}else{
				alertify.error("Datos no Guardados");	
			}

		}
	})
	.done(function(respuesta){
		//console.log(respuesta);
		if (!respuesta.error) {
			alertify.success("Datos Guardados con exito");
			$('#myformularioCompD')[0].reset();
			$('#myformularioComp')[0].reset();
			//alert('Los datos ingresaron con éxito!');
		}else{
			alertify.error("Datos no Guardados");
			//alert('Los datos NO se han ingresado');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
		//alertify.success("Datos no Guardados");
	})

});*/

function compra(idProveedorRP,fecha){

	cadena="idProveedorRP=" + idProveedorRP + 
	"&fecha=" + fecha;

	$.ajax({
		type:"POST",
		url:"../../modelo/almacen/agregarCompraProd.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.error("Datos no Guardados");
				
			}else{
				alertify.success("Datos Guardados con exito");
				//window.location.load("Location: ../../modelo/descripcionCompra.php");
				//var pagina="../../vistas/almacen/descripcionCompra.php";
				//function redireccionar(){window.location.href=pagina;} 
				//setTimeout ("redireccionar()", 1000);
			}

		}
	});
}

//AGREGAR DESCRIPCIÓN DE COMPRA//////////
function descCompra(idUltimo,buscadorProducto,kl_pza,cajas,kdcc){ 
	cadena="idUltimo=" + idUltimo +
	"&buscadorProducto=" + buscadorProducto +
	"&kl_pza=" + kl_pza +
	"&cajas=" + cajas +
	"&kdcc=" + kdcc;

	$.ajax({
		type:"POST",
		url:"../../modelo/almacen/agregarCompraDesc.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.error("Datos no Guardados");
			}else{					
				alertify.success("Datos Guardados con exito");
			}

		}
	});
}


//ACTUALIZAR TOTAL//////////
function totalA(idUltimo,costPedido){

	cadena="idUltimo=" + idUltimo +
	"&costPedido=" + costPedido;

	$.ajax({
		type:"POST",
		url:"../../modelo/almacen/agregarCompraProd.php",
		data:cadena,
		success: function(r){
			if (r==1) {				
				//$('#tabla').load('interfaces/tabla.php');
				alertify.error("Datos no Guardados");
			}else{					
				alertify.success("Datos Guardados con exito");
			}

		}
	});
}

//BLOQUEAR LETAS
onload = function(){ 
  var precio = document.querySelectorAll('#kl_pza')[0];
  var cajas = document.querySelectorAll('#cajas')[0];
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


//RADIO BUTTON
function aceptar()
{
	document.getElementById("buscadorProveedor").disabled=true;
	document.getElementById("fecha").disabled=true;
	document.getElementById("aceptar").disabled=true;
}


/*
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
*/
