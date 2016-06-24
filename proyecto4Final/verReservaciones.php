<html>
 	<head>
    	<title>Administrador</title>
    	<meta charset = 'UTF-8'>
    	<style>
	      body {
	      background-image: url("imagenes/taza.jpg");
	      background-repeat:repeat;
	      }
	      table {
	      border:solid black 2px;
	      background-color: CYAN;
	      width : 30%;
	      height : 80%;
	      }
	      td {
    	  text-align:center; 
    	  vertical-align:middle;
		  }	

	    </style>
	</head>


	<?php

		include("conexion.php");

		echo "<body>";
		echo "<center>";
		echo "<h1>Rervaciones</h1>";

		$consulta = "SELECT * FROM reservacion";
		$resultado = $conexion -> query($consulta);

		echo "<table>";
		echo "<tr><td>ID</td><td>FECHA</td></tr>";

		while ($row = $resultado -> fetch_assoc()) {
			echo "<tr><td>" . $row["id"] ."</td><td>" . $row["fecha"] . "</td></tr>";
		}

		echo "</table>";
		echo "</center>";
		echo "<p></p>";
    	echo "<a href = 'index.php'>Volver a la página 	principal</a>";
    	echo "</body>";
    	echo "</html>";

	?>

</html>