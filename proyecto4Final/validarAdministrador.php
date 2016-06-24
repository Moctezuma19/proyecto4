<html>
  <head>
      <title>Administrador</title>
      <meta charset = 'UTF-8'>
      <style>
        body {
        background-image: url("imagenes/taza.jpg");
        background-repeat:repeat;
        }
      } 

      </style>
  </head>

  <?php

    echo "<body>";

    include("conexion.php");

    $consulta = "SELECT * FROM administrador";
    $resultado = $conexion -> query($consulta);
    $numero = $resultado -> num_rows;
    if ($numero == 0) {
      echo "<h1>Registrar Clave de Administrador</h1>";
      echo "<form method=\"POST\" action=\"registraAdministrador.php\"/>";
      echo "<table>";
      echo "<tr>";
      echo "<td>Clave</td>";
      echo "<td><input type=\"password\" name=\"clave\"/></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Confirmar clave</td>";
      echo "<td><input type=\"password\" name=\"confirmacion\"/></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> </td>";
      echo "<td><input type=\"submit\" value=\"REGISTRAR\" /></td>";
      echo "</tr>";
      echo "</table>";
    } else {
      echo "<h1>Ingresa Administrador</h1>";
      echo "<form method=\"POST\" action=\"ingresoAdministrador.php\"/>";
      echo "<table>";
      echo "<tr>";
      echo "<td>Clave</td>";
      echo "<td><input type=\"password\" name=\"key\"/></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> </td>";
      echo "<td><input type=\"submit\" value=\"INGRESAR\" /></td>";
      echo "</tr>";
      echo "</table>";
    }

  ?>
</html>