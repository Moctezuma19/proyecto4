<?php
	
	include("../conexion.php");

	$n=$_POST["nombre"];
	$p=$_POST["precio"];

	$consulta="UPDATE consola SET nombre='$n', precio='$p' WHERE nombre ='$name'";
	if($conexion->query($consulta)==true) {
	header("Location:administrador.php");
	} else {
	header("Location:editarProducto.php");
	}
?>