<html>
  <head>
    <title>Cafetería</title>
    <meta charset='UTF-8'>
    <style>
      body {
      background-image: url("imagenes/taza.jpg");
      background-repeat:repeat;
      }
      #menu {
      width: 110%;
      margin-left: -33px;
      font-family: Arial;
      font-size: 20px;
      margin-top: -23px;
      }
      ul {
      list-style: none;
      text-align:center;
      }
      
      .lista > li{
      display: inline-block;
      }
      
      .lista li a {
      background-color : black;
      color:white;
      text-decoration: none;
      padding: 20px 44px;
      display: block;
      }
      
      .lista li a:hover{
      background-color: yellow;
      }

      .lista li:hover ul {
      display: block;
      }

      #titulo {
      font-family : Arial; 
      }
      table {
      border:solid black 4px;
      background: brown;
      }
      td {
      border:solid black 4px;
      }
      tr {
      border:solid black 4px;
      }
    </style>
  </head>
  <?php
    echo "<body>";
    echo "<center>";
      echo "<h1 id = 'titulo'>CAFETERÍA</h1>";
    echo "</center>";
    echo "<div id = 'menu'>";
     echo "<ul class='lista'>";
      echo "<li><a href=''>Inicio</a></li>";
      echo "<li><a href='administrador.php'>Administrador</a></li>";
      echo "<li><a href='empleado.php'>Empleado</a></li>";
      echo "<li><a href='comprar.php'>Comprar</a></li>";
     echo "</ul>";
    echo "</div>";
    echo "<h2>Cafés</h2>";
    echo "<table id = 'tabla1'>";
    echo "<tr>";
    echo "<td>Americano</td>";
    echo "<td>$16</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Espresso</td>";
    echo "<td>$14</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Capuccino</td>";
    echo "<td>$20</td>";
    echo "</tr>";
    echo "</table>";
    echo "<h2>Bebidas Calientes</h2>";
    echo "<table id>";
    echo "<tr>";
    echo "<td>Chocolate</td>";
    echo "<td>$20</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Té de limón</td>";
    echo "<td>$10</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Té de canela</td>";
    echo "<td>$11</td>";
    echo "</tr>";
    echo "</table>";
    echo "<h2>Bebidas Frías</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Refresco</td>";
    echo "<td>$15</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Té Helado</td>";
    echo "<td>$12</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Licuado de Fresa</td>";
    echo "<td>$17</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Licuado de Guayaba</td>";
    echo "<td>$15</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Licuado de Plátano</td>";
    echo "<td>$15</td>";
    echo "</tr>";
    echo "</table>";
    echo "<h2>Pasteles</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Pastel de Limón</td>";
    echo "<td>$33</td>";
    echo "</tr>";
    echo "<td>Pastel de Elote</td>";
    echo "<td>$30</td>";
    echo "</tr>";
    echo "<td>Pastel Imposible</td>";
    echo "<td>$40</td>";
    echo "</tr>";
    echo "</table>";
    echo "<h2>Crepas</h2>";
    echo "<table>";
    echo "<td>Crepas de Tortilla de Harina</td>";
    echo "<td>$11</td>";
    echo "</tr>";
    echo "<td>Crepas de Tortilla de Maíz</td>";
    echo "<td>$15</td>";
    echo "</tr>";
    echo "</table>";
    echo "<h2>Ubicación</h2>";
    echo "<p>Col. Industrial Vallejo, Av.Montevideo No.1090 esquina con Av.Lázaro Cárdenas, Del. Gustavo A. Madero, Ciudad de México</p>";
    echo "</body>";
    echo "</html>";
     ?>
