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
	  }

  	})

})

/*=============================================
EDITAR CLIENTE
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
         $("#nuevoProducto1").val(respuesta["producto1"]);
         $("#nuevoProducto2").val(respuesta["producto2"]);
         $("#nuevoProducto3").val(respuesta["producto3"]);
         $("#nuevoProducto4").val(respuesta["producto4"]);
         $("#nuevoProducto5").val(respuesta["producto5"]);

         $("#nuevoPrecio1").val(respuesta["producto1"]);
         $("#nuevoPrecio2").val(respuesta["producto2"]);
         $("#nuevoPrecio3").val(respuesta["producto3"]);
         $("#nuevoPrecio4").val(respuesta["producto4"]);
         $("#nuevoPrecio5").val(respuesta["producto5"]);
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