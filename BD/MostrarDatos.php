<!DOCTYPE html>
<html>
<body>
<center>
<form action="CalificarTabla.php" method="get">
<?php
require_once('config.php');
// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}
  $sql = "SELECT * FROM articulo";
  $resultado = mysqli_query($conexion, $sql);
echo "<table border='1'cellpadding='5'>";
echo "<tr><th>Id_Articulo</th><th>Nombre</th><th>Cantidad</th><th>Precio</th><th>Estatus</th></tr>";
while ($row = mysqli_fetch_array($resultado)) {
    echo "<tr><td style='text-align:center'>" . $row['Id_Articulo'] . "</td><td>" . $row['Nombre'] . "</td><td style='text-align:center'>" . $row['Cantidad'] . "</td><td style='text-align:center'>" . $row['Precio'] . "</td><td style='text-align:center'>" . $row['Estatus'] . "</td></tr>";
}
echo "</table>";
mysqli_close($conexion);
?>
</from>
</center>
</body>
</html>