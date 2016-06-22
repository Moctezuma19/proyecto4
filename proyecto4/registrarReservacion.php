<html>
  <head>
    <meta charset='UTF-8'>
    <title>Registro de Reservación</title>
    <style>
      body {
      background-image:url(imagenes/taza.jpg);
      background-repeat:repeat;
      font-family:Palatino;
      font-size: 18pt;
      }
    </style>
  </head>
  <body>
    <h1>Registro de Reservación</h1>
    <form method="POST" action="registrandoReservacion.php"/>
    <table>
      <tr>
	<td>ID</td>
	<td><input type="text" name="id"/></td>
      </tr>
      <tr>
  <td>Fecha (DD-MM-AAAA)</td>
  <td><input type="text" name="fecha"/></td>
      </tr>
      <tr>
	<td> </td>
	<td><input type="submit" value="REGISTRAR" /></td>
      </tr>
    </table>
  </body>
</html>
