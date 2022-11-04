<?php

$conexion = mysqli_connect("localhost", "root", "");
$base = mysqli_select_db($conexion, "pruebas");


//$id = $_GET['id'];
//echo $id;

$id = $_GET['id'];

$eliminar= mysqli_query($conexion, "DELETE FROM tblusuarios WHERE idx= '$id'");

//echo "borrado";

if ($eliminar == true) {
	echo "<script>alert('borrado')

	window.location.href='listadopruebas.php';

	</script>";
}

?>

<!--<a href="listadopruebas.php">volver</a>!-->