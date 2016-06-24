<?php

	include("conexion.php");

	$clave = $_POST["clave"];
	$confirmacion = $_POST["confirmacion"];

	if ($confirmacion != $clave) {
		echo "La clave y su confirmacion no coinciden.";
	} else {

		$consulta = "INSERT INTO administrador(password) VALUES('$clave')";
		if ($conexion -> query($consulta) == true) {
			echo "Se ha configurado la clave de administrador.";
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
			echo "Ocurrio un error al configurar la clave de acceso.";
		}

	}

?>