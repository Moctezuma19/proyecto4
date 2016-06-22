<?php

	include("conexion.php");

	$user = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$id = $_POST["id"];

	$consulta = "INSERT INTO miembros(id, nombre, apellido) VALUES('$id', '$user', '$apellido')";

	if ($conexion -> query($consulta) == true) {
		echo "Miembro agregado";
	} else {
		echo "Ocurrio un error al registrar miembro";
	}

?>