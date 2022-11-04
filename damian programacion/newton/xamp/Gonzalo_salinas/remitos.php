<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<style type="text/css">
	h2{
		margin-left: 30%; 
	}
	form{
		margin-left: 30%;
		margin-top: 25px;
	}
	input{
		margin: 5px;
	}
</style>

<body>
	<h2>consulta cliente</h2>
	<form action="remitos.php" method="post">
		nro de factura <input type="text" name="nrofactura"><br>
		cliente <input type="text" name="cliente"><br>
		articulo <input type="text" name="articulo"><br>
		cantidad de producto <input type="text" name="canprod"><br>
		total <input type="text" name="total"><br>
		<input type="submit" name="calcular" value="calcular">
	</form>

	<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'facturas';

	$conexion = mysqli_connect($host,$user,$pass,$base);

	if(isset($_POST['calcular'])){

		$nrofac = $_POST['nrofactura'];
		$cliente = $_POST['cliente'];
		$articulo = $_POST['articulo'];
		$cantprod = $_POST['canprod'];
		$total = $_POST['total'];

		$calcular = mysqli_query($conexion, "INSERT INTO remitos(nrofactura,cliente,articulo,cantprod,total) VALUES('$nrofac','$cliente','$articulo','$cantprod','$total')");
			if($calcular == true){
				echo "GUARDADO CON EXITO";
			   }

	}

	?>

</body>
</html>