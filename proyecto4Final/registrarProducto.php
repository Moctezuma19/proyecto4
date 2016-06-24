<html>
  <head>
    <meta charset='UTF-8'>
    <title>Registro de Producto</title>
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
    <h1>Registro de Producto</h1>
    <form method="POST" action="registrandoProducto.php"/>
    <table>
      <tr>
	<td>Nombre :</td>
	<td><input type="text" name="nombre"/></td>
      </tr>
       <tr>
	<td>Precio :</td>
	<td><input type="number" name="precio"/></td>
      </tr>
      <tr>
	<td> </td>
	<td><input type="submit" value="REGISTRAR" /></td>
      </tr>
    </table>
  </body>
</html>
