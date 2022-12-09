<?php

require_once "conexion.php";
 
class ModeloProductos{
 
	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductos($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE PRODUCTO
	=============================================*/
	static public function mdlIngresarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_categoria, codigo, descripcion, imagen, stock, stockMax, stockMin, proveedor1, proveedor2, proveedor3, proveedor4, proveedor5, precio1, precio2, precio3, precio4, precio5, precio_compra, precio_venta) VALUES (:id_categoria, :codigo, :descripcion, :imagen, :stock, :stockMax, :stockMin, :proveedor1, :proveedor2, :proveedor3, :proveedor4, :proveedor5, :precio1, :precio2, :precio3, :precio4, :precio5, :precio_compra, :precio_venta)");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":stockMax", $datos["stockMax"], PDO::PARAM_STR);
		$stmt->bindParam(":stockMin", $datos["stockMin"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor1", $datos["proveedor1"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor2", $datos["proveedor2"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor3", $datos["proveedor3"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor4", $datos["proveedor4"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor5", $datos["proveedor5"], PDO::PARAM_STR);
		$stmt->bindParam(":precio1", $datos["precio1"], PDO::PARAM_STR);
		$stmt->bindParam(":precio2", $datos["precio2"], PDO::PARAM_STR);
		$stmt->bindParam(":precio3", $datos["precio3"], PDO::PARAM_STR);
		$stmt->bindParam(":precio4", $datos["precio4"], PDO::PARAM_STR);
		$stmt->bindParam(":precio5", $datos["precio5"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/
	static public function mdlEditarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_categoria = :id_categoria, descripcion = :descripcion, imagen = :imagen, stock = :stock, stockMax = :stockMax, stockMin = :stockMin, proveedor1 = :proveedor1, proveedor2 = :proveedor2, proveedor3 = :proveedor3, proveedor4 = :proveedor4, proveedor5 = :proveedor5, precio1 = :precio1, precio2 = :precio2, precio3 = :precio3, precio4 = :precio4, precio5 = :precio5, precio_compra = :precio_compra, precio_venta = :precio_venta WHERE codigo = :codigo");

		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":stockMax", $datos["stockMax"], PDO::PARAM_STR);
		$stmt->bindParam(":stockMin", $datos["stockMin"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor1", $datos["proveedor1"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor2", $datos["proveedor2"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor3", $datos["proveedor3"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor4", $datos["proveedor4"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor5", $datos["proveedor5"], PDO::PARAM_STR);
		$stmt->bindParam(":precio1", $datos["precio1"], PDO::PARAM_STR);
		$stmt->bindParam(":precio2", $datos["precio2"], PDO::PARAM_STR);
		$stmt->bindParam(":precio3", $datos["precio3"], PDO::PARAM_STR);
		$stmt->bindParam(":precio4", $datos["precio4"], PDO::PARAM_STR);
		$stmt->bindParam(":precio5", $datos["precio5"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function mdlEliminarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR PRODUCTO
	=============================================*/

	static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	static public function mdlMostrarSumaVentas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT SUM(ventas) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
	}


}