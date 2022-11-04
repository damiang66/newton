

<form action="formulario.php"method="post">
	<input type="text" name="libro">
	<input type="text" name="editorial">
	<input type="text" name="cantidad">
	<input type="file" name="imagen">
	<input type="submit" name="enviar">
</form>

<?php
$host="localhost";
$user="root";
$pass="";
$bd="axelfigueroa";
$conexion=mysqli_connect($host,$user,$pass,$bd);
$conexionbd=mysqli_select_db($conexion,$bd)or die(mysqli_error());



$libro= $_POST['libro'];
$editorial= $_POST['editorial'];
$cantidad= $_POST['cantidad'];
$img=$_POST['imagen'];
$consulta=mysqli_query($conexion,"INSERT INTO libro(nombreLibro,editorial,contDisponible,imagen) VALUES('$libro','$editorial','$cantidad','$img')");


if (isset($_POST['enviar'])) {


if ($insertar1 == true){
	echo "<script> alert ('datos cargados con exito')</script>";
}else{
	echo "<script> alert('error en la consulta sql')</script>";
	sqli_error();
}



}

?>