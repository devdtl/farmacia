<?php

require_once "../controladores/proveedores.controlador.php";
require_once "../modelos/proveedores.modelo.php";

 
require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";


class AjaxProveedor{

	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/	

	public $idProveedor;

	public function ajaxEditarProveedor(){

		$item = "id";
		$valor = $this->idProveedor;

		$respuesta = ControladorProveedores::ctrMostrarProveedores($item, $valor);

		echo json_encode($respuesta);


	}
 
}

/*=============================================
EDITAR PROVEEDOR
=============================================*/	

if(isset($_POST["idProveedor"])){

	$proveedor = new AjaxProveedor();
	$proveedor -> idProveedor = $_POST["idProveedor"];
	$proveedor -> ajaxEditarProveedor();

}