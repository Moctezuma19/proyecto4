<html>
<head>
<title>Comprando</title>
<meta charset = "UTF-8"/>
<style>
      body {
      background-image: url("imagenes/taza.jpg");
      background-repeat:repeat;
      }
</style>
</head>
<?php

	include("conexion.php");
	
	$id = $_POST["id"];
	/*
	$consulta = "SELECT * FROM miembros";
	$resultado = $conexion -> query($consulta);
	$esta = false;
	while($rw = $resultado -> fetch_assoc()){
	if(rw["id"] == $id){
	$esta = true;
	}
	}
	if($esta == false){
	header("Location:error.html");
	}
	*/

	$consulta2 = "SELECT * FROM productos";
	$resultado2 = $conexion -> query($consulta2);
	
	$total = 0;
	$cantidad_temp = 0;
	$j= 1;
	while($row = $resultado2 -> fetch_assoc()){
	$cantidad_temp = $row["precio"]*$_POST["$j"];
	$total = $total + $cantidad_temp;
	$j++;
	}

	echo "<body><form action = 'registraCompra.php' method = 'POST'/><table>";
	echo "<tr><td>ID</td><td><input type='text' name= 'id' value='$id' readonly/></td></tr>";
	echo "<tr><td>Total $</td><td><input type='number' name= 'id' value=".$total." readonly/></td></tr>";	      echo "<tr><td> </td><td><input type='submit' value='Pagar'/></td></tr>";
	echo "</table><a href='comprar.php'>Volver al menú de compra</a><p> </p><a href = 'index.php'>Volver a la página principal</a></body></html>"
?>