/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarProveedor", function(){

	var idProveedor = $(this).attr("idProveedor");

	var datos = new FormData();
    datos.append("idProveedor", idProveedor);

    $.ajax({

      url:"ajax/proveedores.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false, 
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idProveedor").val(respuesta["id"]);
	       $("#editarProveedor").val(respuesta["nombre"])
	       $("#editarEmail").val(respuesta["email"]);
	       $("#editarTelefono").val(respuesta["telefono"]);
      
         $("#editarTelefono2").val(respuesta["telefono2"]);
         $("#editarTelefono3").val(respuesta["telefono3"]);
         $("#editarProducto1").val(respuesta["producto1"]);

         $("#editarProducto2").val(respuesta["producto2"]);

         $("#editarProducto3").val(respuesta["producto3"]);

         $("#editarProducto4").val(respuesta["producto4"]);

         $("#editarProducto5").val(respuesta["producto5"]);

         $("#editarPrecio1").val(respuesta["precio1"]);

         $("#editarPrecio2").val(respuesta["precio2"]);

         $("#editarPrecio3").val(respuesta["precio3"]);

         $("#editarPrecio4").val(respuesta["precio4"]);

         $("#editarPrecio5").val(respuesta["precio5"]);
	  } 

  	})

})


/*=============================================
mostrar productos
=============================================*/
$(".tablas").on("click", ".btnMostrarProducto", function(){

	var idProveedor = $(this).attr("idProveedor");

	var datos = new FormData();
    datos.append("idProveedor", idProveedor);

    $.ajax({

      url:"ajax/proveedores.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false, 
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idProveedor").val(respuesta["id"]);
	       $("#editarProveedor").val(respuesta["nombre"])
	       $("#editarEmail").val(respuesta["email"]);
         $("#editarTelefono").val(respuesta["telefono"]);

         $("#mostrarProducto1").val(respuesta["producto1"]);

         $("#mostrarProducto2").val(respuesta["producto2"]);

         $("#mostrarProducto3").val(respuesta["producto3"]);

         $("#mostrarProducto4").val(respuesta["producto4"]);

         $("#mostrarProducto5").val(respuesta["producto5"]);

         $("#mostrarPrecio1").val(respuesta["precio1"]);

         $("#mostrarPrecio2").val(respuesta["precio2"]);

         $("#mostrarPrecio3").val(respuesta["precio3"]);

         $("#mostrarPrecio4").val(respuesta["precio4"]);

         $("#mostrarPrecio5").val(respuesta["precio5"]);
	  } 

  	})

})
/*=============================================
ELIMINAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEliminarProveedor", function(){

	var idProveedor = $(this).attr("idProveedor");
	
	swal({
        title: '¿Está seguro de borrar el cliente?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar cliente!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=proveedores&idProveedor="+idProveedor;
        }

  })

})