<?php

	include("conexion.php");

	$user = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$id = $_POST["id"];

	$registra_id = true;
	$registra_name = true;

	$busca = "SELECT * FROM miembros";
	$resultado = $conexion -> query($busca);
	while ($row = $resultado -> fetch_assoc()) {
		if ($id == $row["id"]) {
			$registra_id = false;
		}
		if ($user == $row["nombre"] && $apellido == $row["apellido"]) {
			$registra_name = false;
		}
	}

	if ($registra_id && $registra_name) {
		$consulta = "INSERT INTO miembros(id, nombre, apellido) VALUES('$id', '$user', '$apellido')";
		if ($conexion -> query($consulta) == true) {
			echo "Miembro agregado";
		} else {
			echo "Ocurrio un error al registrar miembro";
		}
	} elseif (!$registra_id && !$registra_name) {
		echo "La informacion o miembro ya estan registrados. Verifique los datos.";
	} elseif (!$registra_id) {
		echo "El ID ya se encuentra apartado.";
	} elseif (!$registra_name) {
		echo "El nombre y apellido ya estan registrados bajo otro ID. Verifique los datos.";
	}

?>