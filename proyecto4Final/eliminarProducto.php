<html>
  <head>
    <title>Quitar Producto</title>
    <meta charset="utf-8" />
    <style>
      body {
      background-image: url("imagenes/taza.jpg");
      background-repeat:repeat;
      }
    </style>
  </head>
  <body>
    <b>Elige un producto</b>		
    <form method="POST" action="eliminandoProducto.php">
      <?php
	 include("./conexion.php");
	 echo "<select name='producto'>";
	 $consulta="SELECT * FROM productos";
	 $resultado=$conexion->query($consulta);
      while($row=$resultado->fetch_assoc()) {
      $nombre=$row["nombre"];
      echo "<option value='$nombre'>$nombre </option>";
      }
      echo "</select>";
?>
      <input type="submit" value="Eliminar" />
    </form>
  </body>
</html>
