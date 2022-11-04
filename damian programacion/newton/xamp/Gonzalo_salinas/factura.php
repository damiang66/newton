<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style type="text/css">
	form{
		margin: auto;
		width: 500px;
	}
</style>
<body>

	<form action="factura.php" method="post">
		INGRESE PRODUCTOS para guardar en la base de datos<br><br>
		Producto:<input type="text" name="producto"><br><br>
		Stock:<input type="text" name="stock"><br><br>
		Precio:<input type="text" name="precio"><br><br>
		<input type="submit" name="guardar" value="GUARDAR">
	</form>

	<?php

		$host = "localhost";
		$user = "root";
		$pass = "";
		$base = "facturas";

		$conexion = mysqli_connect($host,$user,$pass,$base);

		
		
		if(isset($_POST['guardar'])){

		$prod = $_POST['producto'];
		$stock = $_POST['stock'];
		$precio = $_POST['precio'];

		$guardar = mysqli_query($conexion,"INSERT INTO articulos(producto,stock,precio) VALUES('$prod','$stock','$precio')");

		if($guardar == true){
			echo "GUARDADO CON EXITO";
		   }
		$mostrar = mysqli_query($conexion,"SELECT * FROM articulos");
		while ($mostrardatos=mysqli_fetch_array($mostrar)) {

			echo $mostrardatos['producto']." - ".$mostrardatos['stock']." - ".$mostrardatos['precio']."<br>";
			# code...
		}
		}

		factura

		id_factura(int,autoincrementable,primary)
		nrofactura(int)
		cliente(varchar 50)
		cantprod(int)
		total(float)

		?>
	
</body>
</html>