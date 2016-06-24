<html>
  <head>
    <meta charset = "UTF-8"/>
    <title> </title>
  </head>
  <body>
  
    <?php
       
       header("Content-type:application/vnd.ms-excel;charset=utf-8");
       header("Content-Disposition:attachment; filename=inventario.xls");
       header("Pragma:no-cache");
       
       include("./conexion.php");
              
       $salida="<table>";
       $salida.="<tr>";
       $salida.="<td>Nombre de Producto</td>";
       $salida.="<td>Precio </td>";
       $salida.="</tr>";
       $consulta="SELECT * FROM productos";
       $resultado=$conexion->query($consulta);
    while($row=$resultado->fetch_assoc()) {
    $nombre=$row["nombre"];
    $precio=$row["precio"];
    $salida.="<tr>";
      $salida.="<td>".$nombre."</td>";
      $salida.="<td>".$precio."</td>";
      $salida.="</td>";
$salida.="</tr>";
}

$salida.="</table>";

echo $salida;	

?>
</body>
</html>
