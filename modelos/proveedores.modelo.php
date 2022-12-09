<?php

require_once "conexion.php";

class ModeloProveedores{

	/*=============================================
	CREAR CLIENTE
	=============================================*/

	static public function mdlAgregarProveedor($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, telefono, telefono2, telefono3, producto1, producto2, producto3, producto4, producto5, precio1, precio2, precio3, precio4, precio5) VALUES (:nombre, :email, :telefono, :telefono2, :telefono3, :producto1, :producto2, :producto3, :producto4, :producto5, :precio1, :precio2, :precio3, :precio4, :precio5)");
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono2", $datos["telefono2"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono3", $datos["telefono3"], PDO::PARAM_STR);
		$stmt->bindParam(":producto1", $datos["producto1"], PDO::PARAM_STR);
		$stmt->bindParam(":producto2", $datos["producto2"], PDO::PARAM_STR);
		$stmt->bindParam(":producto3", $datos["producto3"], PDO::PARAM_STR);
		$stmt->bindParam(":producto4", $datos["producto4"], PDO::PARAM_STR);
		$stmt->bindParam(":producto5", $datos["producto5"], PDO::PARAM_STR);
		$stmt->bindParam(":precio1", $datos["precio1"], PDO::PARAM_STR);
		$stmt->bindParam(":precio2", $datos["precio2"], PDO::PARAM_STR);
		$stmt->bindParam(":precio3", $datos["precio3"], PDO::PARAM_STR);
		$stmt->bindParam(":precio4", $datos["precio4"], PDO::PARAM_STR);
		$stmt->bindParam(":precio5", $datos["precio5"], PDO::PARAM_STR);
	


		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR PROVEEDORES
	=============================================*/

	static public function mdlMostrarProveedores($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
	/*=============================================
	MOSTRAR producto
	=============================================*/

	static public function mdlMostrarProducto($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
 
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where id_proveedor = 1");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
	
	/*=============================================
	EDITAR PROVEEDORES
	=============================================*/

	static public function mdlEditarProveedor($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
		nombre = :nombre,  email = :email, telefono = :telefono, telefono2 = :telefono2, telefono3 = :telefono3, producto1 = :producto1, producto2 = :producto2, producto3 = :producto3, producto4 = :producto4, producto5 = :producto5, precio1 = :precio1, precio2 = :precio2, precio3 = :precio3, precio4 = :precio4, precio5 = :precio5 WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono2", $datos["telefono2"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono3", $datos["telefono3"], PDO::PARAM_STR);
		$stmt->bindParam(":producto1", $datos["producto1"], PDO::PARAM_STR);
		$stmt->bindParam(":producto2", $datos["producto2"], PDO::PARAM_STR);
		$stmt->bindParam(":producto3", $datos["producto3"], PDO::PARAM_STR);
		$stmt->bindParam(":producto4", $datos["producto4"], PDO::PARAM_STR);
		$stmt->bindParam(":producto5", $datos["producto5"], PDO::PARAM_STR);
		$stmt->bindParam(":precio1", $datos["precio1"], PDO::PARAM_STR);
		$stmt->bindParam(":precio2", $datos["precio2"], PDO::PARAM_STR);
		$stmt->bindParam(":precio3", $datos["precio3"], PDO::PARAM_STR);
		$stmt->bindParam(":precio4", $datos["precio4"], PDO::PARAM_STR);
		$stmt->bindParam(":precio5", $datos["precio5"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR PROVEEDORES
	=============================================*/

	static public function mdlEliminarProveedor($tabla, $datos){

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
	ACTUALIZAR PROVEEDORES
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $valor){

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

}