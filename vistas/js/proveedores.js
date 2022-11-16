$(".btnMostrarProducto").click(function () {
  var id_producto = $(this).attr("id_producto");
  var datos = new FormData();
  datos.append("id_producto", id_producto)

 
  $.ajax({
    url: "ajax/proveedores.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

$("#mostrarProducto1").val(respuesta["producto1"]);
 
      }

})
}) 