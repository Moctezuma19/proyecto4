<?php 

	include ("conexion.php");

	$id = $_POST["id"];
	$fecha = $_POST["fecha"];

	$contenido = false;

	$contiene = "SELECT id FROM miembros";
	$resultado = $conexion -> query($contiene);
	while ($row = $resultado -> fetch_assoc()) {
		$usuario = $row["id"];
		if ($usuario == $id) {
			$contenido = true;
			break;
		}
	}

	if ($contenido) {
		$consulta = "INSERT INTO reservacion(id, fecha) VALUES('$id', '$fecha')";

		if ($conexion -> query($consulta) == true) {
			echo "Reservacion registrada";
		} else {
			echo "Error al registrar reservacion";
		}
	} else {
		echo "El ID no esta registrado.";
	}

?>