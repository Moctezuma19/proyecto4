<html>
  <head>
    <meta charset='UTF-8'>
    <title>Registro Miembro</title>
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
    <h1>Registro de Miembro</h1>
    <b>Todos los campos son obligatorios</b>
    <form method="POST" action="miembroRegistrado.php"/>
    <table>
      <tr>
	<td>Nombre:  </td>
	<td><input type="text" name="nombre" /></td>
      </tr>
      <tr>
	<td>Apellido:  </td>
	<td><input type="text" name="apellido" /></td>
      </tr>
      <tr>
	<td>ID (10 caractéres alfanuméricos)</td>
	<td><input type="text" name="id"/></td>
      </tr>
      <tr>
	<td> </td>
	<td><input type="submit" value="REGISTRAR" /></td>
      </tr>
    </table>
  </body>
</html>
