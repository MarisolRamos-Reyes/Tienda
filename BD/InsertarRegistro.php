<!DOCTYPE html>
<html>
<body>
<form action="CalificarTabla.php" method="get">
<?php
$nombre=$_GET["nombre"];
$cantidad=$_GET["cantidad"];
$precio=$_GET["precio"];
require_once('config.php');
// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}
$datos = "INSERT INTO articulo (Nombre,Cantidad,Precio)
VALUES ('".$nombre."','".$cantidad."','".$precio."')";
$resultado = mysqli_query($conexion,$datos);
if(!$resultado)
{
  echo "Error: " . $sql . "<br>" . $conexion->error;
}
else
{
  echo "New record created successfully";
  header('Location: MostrarDatos.php');
}
mysqli_close($conexion);
?>
</from>
</body>
</html>