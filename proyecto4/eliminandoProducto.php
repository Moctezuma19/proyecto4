<?php	
	include("./conexion.php");

	$nom=$_POST["producto"];
	$consulta="DELETE FROM productos WHERE nombre ='$nom'";
	if($conexion->query($consulta)==true) {
	header("Location:administrador.php");
	} else {
	echo "No se pudo eliminar el producto.";
	//header("Location:eliminarProducto.php");
	}
?>