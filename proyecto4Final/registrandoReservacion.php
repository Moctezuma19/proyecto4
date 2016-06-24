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

	$date = "SELECT fecha FROM reservacion";
	$result = $conexion -> query($date);
	$cont = 0;
	while ($row = $result -> fetch_assoc()) {
		if ($row["fecha"] == $fecha) {
			$cont = $cont+1;
		}
	}

	if ($contenido && $cont < 5) {
		$consulta = "INSERT INTO reservacion(id, fecha) VALUES('$id', '$fecha')";

		if ($conexion -> query($consulta) == true) {
			echo "Reservacion registrada";
		} else {
			echo "Error al registrar reservacion";
		}
	}elseif (!$contenido) {
		echo "El ID no esta registrado.";
	} elseif ($cont >= 5) {
		echo "Las reservaciones para la fecha solicitada estan agotadas.";
	}

?>