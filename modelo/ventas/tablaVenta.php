<div class="row">
<div class="col-sm-12">

<script type="text/javascript">

     
 function Jugador(id, nombre, cantidad, precio) {
  this.id = id;
  this.nombre = nombre;
  this.cantidad = cantidad;
  this.precio = precio;   
}

var producto = [];
var yoto;

var lista = document.getElementById('listado');

function c2rearVenta() {

    var nombre = document.getElementById("producto");
    var cantidad = document.getElementById("cantidad");
    var precio = document.getElementById("precio");
  //var obtenerN = document.getElementById("nombre").value;
  //var obtenerE = parseInt(document.getElementById("edad").value)
  var jug = new Jugador(producto.length + 1, obtenerN, obtenerE, 0);
  producto.push(jug);
  mostrarListado();
}

function mostrarListado(){
  lista.innerHTML='';
  for(var i=0; i<producto.length; i++){
    
      lista.innerHTML = lista.innerHTML +
          '<tr width="20">' +         
            
              '<td width="50"><input type="hidden" readonly="readonly" id="id" name="id[]" value="'  + producto[i].id + '"><label>' + producto[i].id + '</label></td>' +
              '<td width="50"><input type="hidden" readonly="readonly" id="nombre" name="nombre[]" value="' + producto[i].nombre + '"><label>' + producto[i].nombre + '</label> </td>' +
              '<td width="50"><input type="hidden" readonly="readonly" id="cantidad" name="cantidad[]" value="' + producto[i].cantidad + '"><label>' + producto[i].cantidad + '</label> </td>' +
              '<td width="50"><input type="hidden" readonly="readonly" id="precio" name="precio[]" value="' + producto[i].precio + '"><label>' + producto[i].precio + '</label> </td>' +

              '<td width="50"><button  href="#" onclick="eliminar(' + producto[i].id + ')">Elimina</button></td>' +
            
          '</tr>';

         
  }
yoto = producto.length;
document.getElementById("test").value = yoto;

 // document.getElementById('listado').innerText = lista;
}

function sumarDinero(){
  var dinero = parseInt(document.getElementById('dinero').value);
  var id = parseInt(document.getElementById('jugadorid').value);
  var act = document.getElementById('actualizar').value;
  if (!(isNaN(dinero) || isNaN(id))){
    for (var i=0; i<producto.length; i++){
      if (producto[i].id==id){
        producto[i].dinero+= dinero;
        producto[i].name= act;
      }
    }
    mostrarListado();
  }
  
}

function eliminar(i){
  var pos = i;
  producto.splice(pos-1, 1);  
  mostrarListado();
}

</script>
</div>

</div>