<?php

	include ("conexion.php");

	$id = $_POST["id"];

	$consulta = "DELETE FROM reservacion WHERE id = '$id'";

	if ($conexion -> query($consulta) == true) {
		echo "Reservacion cancelada";
	} else {
		echo "Error al cancelar la reservacion";
	}

?>