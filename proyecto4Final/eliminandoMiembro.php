<?php

	include ("conexion.php");

	$id = $_POST["id"];

	$verifica = "SELECT id FROM reservacion WHERE id = '$id'";
	$resultado = $conexion -> query($verifica);
	$row = $resultado -> fetch_assoc();

	if ($id == $row["id"]) {

		$consulta = "DELETE FROM miembros WHERE id = '$id'";

		if ($conexion -> query($consulta) == true) {
			echo "Miembro eliminado.";
		} else {
			echo "Error al eliminar persona.";
		}

	} else {
		echo "El ID no se encuentra registrado.";
	}

?>