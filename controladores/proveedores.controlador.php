<?php

class ControladorProveedores{
 
	/*=============================================
	CREAR Proveedores
	=============================================*/

	static public function ctrCrearProveedor(){

		if(isset($_POST["nuevoProveedor"])){

			if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"])
			){

			   	$tabla = "proveedores";

			   	$datos = array("nombre"=>$_POST["nuevoProveedor"],
					           "email"=>$_POST["nuevoEmail"],
					           "telefono"=>$_POST["nuevoTelefono"],
							   "telefono2"=>$_POST["nuevoTelefono2"],
							   "telefono3"=>$_POST["nuevoTelefono3"],
							   "producto1"=>$_POST["producto1"],
							   "producto2"=>$_POST["producto2"],
							   "producto3"=>$_POST["producto3"],
							   "producto4"=>$_POST["producto4"],
							   "producto5"=>$_POST["producto5"],
							   "precio1"=>$_POST["precio1"],
							   "precio2"=>$_POST["precio2"],
							   "precio3"=>$_POST["precio3"],
							   "precio4"=>$_POST["precio4"],
							   "precio5"=>$_POST["precio5"],
					          );
			   	$respuesta = ModeloProveedores::mdlAgregarProveedor($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Proveedor ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proveedores";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Proveedor no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proveedores";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	MOSTRAR PROVEEDORES
	=============================================*/

	static public function ctrMostrarProveedores($item, $valor){

		$tabla = "proveedores";

		$respuesta = ModeloProveedores::mdlMostrarProveedores($tabla, $item, $valor);

		return $respuesta;

	}

/*=============================================
	MOSTRAR producto
	=============================================*/

	static public function ctrMostrarProducto($item, $valor){
		

			$tabla ="prodprovs";
	
		$respuesta = ModeloProveedores::mdlMostrarProducto($tabla, $item, $valor);

		return $respuesta;

	}

	
	
	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/

	static public function ctrEditarProveedor(){

		if(isset($_POST["editarProveedor"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarProveedor"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"]) && 
			   preg_match('/^[()\-0-9 ]+$/', $_POST["editarTelefono"])){

			   	$tabla = "proveedores";

			   	$datos = array("id"=>$_POST["idProveedor"],
			   				   "nombre"=>$_POST["editarProveedor"],
					           "email"=>$_POST["editarEmail"],
					           "telefono"=>$_POST["editarTelefono"],
							   "telefono3"=>$_POST["editarTelefono2"],
							   "telefono2"=>$_POST["editarTelefono3"],
							   "producto1"=>$_POST["editarProducto1"],
							   "producto2"=>$_POST["editarProducto2"],
							   "producto3"=>$_POST["editarProducto3"],
							   "producto4"=>$_POST["editarProducto4"],
							   "producto5"=>$_POST["editarProducto5"],
							   "precio1"=>$_POST["editarPrecio1"],
							   "precio2"=>$_POST["editarPrecio2"],
							   "precio3"=>$_POST["editarPrecio3"],
							   "precio4"=>$_POST["editarPrecio4"],
							   "precio5"=>$_POST["editarPrecio5"],
					       );

			   	$respuesta = ModeloProveedores::mdlEditarProveedor($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El Proveedor ha sido cambiado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proveedores";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Proveedor no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proveedores";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR Proveedor
	=============================================*/

	static public function ctrEliminarProveedor(){

		if(isset($_GET["idProveedor"])){

			$tabla ="proveedores";
			$datos = $_GET["idProveedor"];

			$respuesta = ModeloProveedores::mdlEliminarProveedor($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El Proveedor ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then(function(result){
								if (result.value) {

								window.location = "proveedores";

								}
							})

				</script>';

			}		

		}

	}

}

