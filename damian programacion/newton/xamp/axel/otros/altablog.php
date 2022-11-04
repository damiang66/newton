<form action="altablog.php" method="post">
	
<input type="text" name="titulo" placeholder="esciba titulo">
<textarea name="articulo" placeholder="esciba titulo"></textarea>
<input type="text" name="autor" placeholder="autor">
<input type="date" name="fecha">
<input type="file" name="imagenuno">
<input type="file" name="imagendos">
<input type="submit" name="guardar">


</form>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$base = "blog";


$conexion = mysqli_connect($host,$user,$pass,$base)or die(mysqli_error());


if (isset($_POST['guardar'])) {

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$articulo = $_POST['articulo'];
	$fecha = $_POST['fecha'];
	$imagenuno = $_POST['imagenuno'];
	$imagendos = $_POST['imagendos'];



	if(($titulo != "") && ($autor != "") && ($articulo != "") && ($imagenuno != "") && ($imagendos != "") && ($fecha != "")) {

		$insertar = "INSERT INTO noticia(titulo,autor,fechaPosteo,articulo,imagenuno,imagendos)
	            VALUES('$titulo','$autor','$fecha','articulo','$imagenuno','$imagendos')";

		$insertar1 = mysqli_query($conexion, $insertar);

			if ($insertar1 == true){
				echo "<script> alert('datos cargados con exito')</script>";
			}

	}else{
		echo "<script> alert('campos vacios')</script>";
		
	}
}

?>