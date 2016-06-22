<html>

  <head>
    <title>Empleado</title>
    <meta charset = 'UTF-8'>
    <style>
      body {
      background-image: url("imagenes/taza.jpg");
      background-repeat:repeat;
      }
      table {
      border:solid black 2px;
      background-color: CYAN;
      width : 30%;
      height : 70%;
      }
    </style>
  </head>
  <?php
    echo "<body>";
    echo "<center>";
    echo "<h1>Empleado</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<td><a href = 'registrarMiembro.php' >Registrar Miembro</a></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><a href = 'registrarReservacion.php' >Registrar Reservacion</a></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><a href = 'verReservacion.php' >Ver Reservaciones</a></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><a href = 'cancelarReservacion.php' >Cancelar Reservaciones</a></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><a href = 'registrarVenta.php' >Registrar venta</a></td>";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
    echo "<a href = 'index.php'>Volver a la página principal</a>";
    echo "</body>";
    echo "</html>";
  ?>
  
</html