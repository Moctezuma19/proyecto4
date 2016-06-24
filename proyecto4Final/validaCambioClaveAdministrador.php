<?php

	include("conexion.php");

	$clave_anterior = $_POST["anterior"];
	$clave_nueva = $_POST["nueva"];

	$consulta = "SELECT password FROM administrador";
	$resultado = $conexion -> query($consulta);
	$row = $resultado -> fetch_assoc();

	if ($row["password"] == $clave_anterior) {
		$cambio = "UPDATE administrador SET password = '$clave_nueva' WHERE password = '$clave_anterior'";
		if ($conexion -> query($cambio) == true) {
			echo "Se ha modificado la clave de acceso.";
			echo "<html>";
			echo "<body>";
			echo "<p>";
			echo "<a href = 'administrador.php'>Ir a Administrador</a>";
			echo "</p>";
			echo "<p>";
			echo "<a href = 'index.php'>Volver a la página principal</a>";
			echo "</p>";
     		echo "</body>";
     		echo "</html>";
		} else {
			echo "Ha ocurrio un error al modificar la clave de acceso.";
		}
	} else {
		echo "La clave es incorrecta.";
	}

?>