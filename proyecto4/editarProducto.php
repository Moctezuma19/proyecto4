<html>
  <head>
    <title>Edición de Producto</title>
    <meta charset="utf-8" />
    <style>
      body {
      background-image: url("imagenes/taza.jpg");
      background-repeat:repeat;
      }
    </style>
  </head>
  <body>
    <b>Edita una producto</b>		
    <form method="POST" action="editandoProducto.php">
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
      <input type="submit" value="Editar" />
    </form>
  </body>
</html>

