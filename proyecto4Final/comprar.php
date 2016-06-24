<html>
  <head>	
    <meta charset = 'utf-8'/>
    <title>Compra</title>
    <style>
      body{
      background-image:url(imagenes/taza.jpg);
      background-repeat:repeat;
      }
    </style>
  </head>
  
  <?php
     $i = 1;
     include("conexion.php");
     $consulta = "SELECT * FROM productos";
     $resultado = $conexion -> query($consulta);
  echo "<body>";
    echo "<center>";
      echo "<h1>Compra</h1>";
      echo "<form action = 'comprando.php' method = 'POST'/>";
      echo "<table>";
	echo "<tr>";
	  echo "<td><b>ID (miembro)</b></td>";
	  echo "<td><input type = 'text' name = 'id'/></td>";
	  echo "</tr>";
	echo "<tr>";
	  echo "<td><b> Producto </b></td>";
	  echo "<td><b> Cantidad </b></td>";
	  echo "</tr>";
	while($row = $resultado -> fetch_assoc()){
	
	echo "<tr><td>".$row["nombre"]."</td><td><input type='number' name='$i' value = 0></td></tr>";
	$i ++;
	}
	echo "<tr>";
	  echo "<td> </td>";
	  echo "<td><input type = 'submit' value = 'comprar'/></td>";
	  echo "</tr>";
	echo "</table>";
      echo "</center>";
    echo "</body>";
  echo "</html>";

?>
  
