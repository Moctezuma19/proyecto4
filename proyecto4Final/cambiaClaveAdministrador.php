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
  <h1>Cambiar clave de Administrador</h1>
  <form method="POST" action="validaCambioClaveAdministrador.php"/>
  <table>
  <tr>
  <td>Clave anterior</td>
  <td><input type="password" name="anterior"/></td>
  </tr>
  <tr>
  <td>Nueva clave</td>
  <td><input type="password" name="nueva"/></td>
  </tr>
  <tr>
  <td> </td>
  <td><input type="submit" value="ACEPTAR" /></td>
  </tr>
  </table>
</html>