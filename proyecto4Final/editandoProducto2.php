<?php	
	include("./conexion.php");

	$n=$_POST["nom"];
	$p=$_POST["precio"];

	$consulta="UPDATE productos SET precio='$p' WHERE nombre ='$n'";
	if($conexion->query($consulta)==true) {
	header("Location:administrador.php");
	} else {
	header("Location:editarProducto.php");
	}
?>