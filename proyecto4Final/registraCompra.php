<?php
 $c = $_POST["total"];
 $n = $_POST["id"];
 $fecha = date("d-m-Y");
 $consulta="INSERT INTO pagos (id, fecha, cantidad) VALUES ('$n','$fecha','$c')";
 if($conexion->query($consulta)==true){
 header("Location:comprar.php");
 } else {
 echo "No se pudo completar la accion";
 } 
?>