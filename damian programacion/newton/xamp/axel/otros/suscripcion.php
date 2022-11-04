<form action="suscripcion.php" method="post">
	<input type="text" name="Nombre">
	<input type="text" name="Apellido">
	<input type="text" name="Correo">
	<input type="submit" name="guardar">
</form>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$base = "blog";


$conexion = mysqli_connect($host,$user,$pass,$base)or die(mysqli_error());
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['Correo'];
$guardar = mysqli_query($conexion, "INSERT INTO suscripcio (Nombre,Apellido,Correo) VALUES ('$Nombre','$Apellido','$Correo')");

if (isset($_POST['guardar'])) {
}

?>