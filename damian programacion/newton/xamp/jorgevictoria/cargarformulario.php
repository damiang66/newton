

<form action="cargarformulario.php" method="post">

>
	<input type="file" name="imagen" placeholder="Autor"><br>
	
	<input type="submit" name="enviar" value="guardar"><br>

</form>

<?php

	$con = mysqli_connect('localhost','root','','calzadosilvia');

	if (isset($_POST['enviar'])) {
		


		$imagen = "images/".$_POST['imagen'];

	

	$guardar = "INSERT INTO productos (imagenes)
		VALUES('$imagen')"; 

		mysqli_query($con,$guardar);

		if($guardar==true){
			echo "Guardado con exito";
		}
	}

	?>

