<?php

require_once "../controladores/proveedores.controlador.php";
require_once "../modelos/proveedores.modelo.php";

class AjaxProducto1{

	/*=============================================
	EDITAR PROVEEDOR
	=============================================*/	

	public $id_producto;

	public function ajaxMostrarProducto1(){

		$item = "id";
		$valor = $this->idProveedor;

		$respuesta = ControladorProveedores::ctrMostrarProducto($item, $valor);

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