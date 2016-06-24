<?php

	include("conexion.php");

	$clave = $_POST["key"];

	$consulta = "SELECT password FROM administrador WHERE password = '$clave'";
	$resultado = $conexion -> query($consulta);
	$row = $resultado -> fetch_assoc();
	if ($row["password"] == $clave) {
		header("Location: administrador.php");
	} else {
		echo "La clave de acceso es incorrecta.";
	}

?>