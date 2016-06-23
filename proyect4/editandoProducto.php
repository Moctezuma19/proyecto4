<html>
  <head>
    <title>Editando Producto</title>
    <meta charset="utf-8" />
    <style>
    body {
    background-image:url(imagenes/taza.jpg);
    background-repeat:repeat;
    }
    </style>
  </head>  
  <body>
    <?php 
       include("./conexion.php");
       $name=$_POST["producto"];
       $consulta="SELECT * FROM productos WHERE nombre='$name'";
       $resultado=$conexion->query($consulta);
    
    while($row=$resultado->fetch_assoc()) {
    $nombre=$row["nombre"];
    $precio=$row["precio"];	
    }
    ?>
    
    <b> Proporciona la siguiente información para editar una consola </b>
    <form method="POST" action="editandoProducto2.php" enctype="multipart/form-data" >
      <table>
	<tr>
	  <td>Nombre de Producto </td>
	  <?php
	     echo "<td><input type='text' name='nom' value='$nombre' readonly /></td>";
	     ?>
	</tr>
	<tr>
	  <td>Precio </td>
	  <td>$<input type="number" name="precio" maxlength="4" size="5"
		      value="<?php echo $precio; ?>"
		      /> </td>
	</tr>
	<tr>
	  <td> </td>
	  <td><input type="submit" value="Aceptar" /></td>
	</tr>
      </table>
    </form>    
  </body>
</html>
