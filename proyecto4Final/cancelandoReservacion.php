<?php

	include ("conexion.php");

	$id = $_POST["id"];

	$verifica = "SELECT id FROM reservacion WHERE id = '$id'";
	$resultado = $conexion -> query($verifica);
	$row = $resultado -> fetch_assoc();

	if ($id == $row["id"]) {

		$consulta = "DELETE FROM reservacion WHERE id = '$id'";

		if ($conexion -> query($consulta) == true) {
			echo "Reservacion cancelada";
		} else {
			echo "Error al cancelar la reservacion";
		}

	} else {
		echo "El ID no se encuentra registrado o no tiene reservaciones.";
	}

?>