<?php
 include("conexion.php");
 $nombre = $_POST["nombre"];
 $precio = $_POST["precio"];

 $consulta="INSERT INTO productos(nombre, precio) VALUES ('$nombre',$precio)";
 	if($conexion->query($consulta) == true) {
		header("Location:administrador.php");
	} else {
		header("Location:registroProducto.php");
	}

?>