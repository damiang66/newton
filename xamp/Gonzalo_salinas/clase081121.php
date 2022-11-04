<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>

<body>
<!-- 
INCIO DE SESION
	<form action="clase081121.php" method="post">
		<input type="text" name="usuario" placeholder="Usuario">
		<input type="password" name="password" placeholder="Contraseña">
		<input type="submit" name="enviar">
	</form>  -->

<form action="clase081121.php" method="post">
		<input type="text" name="usuario" placeholder="PRECIO">
		<input type="text" name="password" placeholder="DESCUENTO">
		<input type="submit" name="enviar">
	</form> 

	<?php 	
	// CAPTURO LOS DATOS DEL FORMULARIO
			$art = $_POST['usuario'];
			$cant = $_POST['password'];

		suma($art,$cant);

		function suma($nro,$nro1){

			$iva = ($nro*0.21);
			$resultado = ($nro*$nro1)+$iva;

			if($resultado > 500){
				$descuento = 0.15;

				echo "El precio ".$nro."<br>";
				echo "el iva es: ".$iva."<br>";
				echo "cantidad: ".$nro1."<br>";
				echo "El total es: ".$resultado-($resultado*$descuento)."con descuento incluido";
			}else{
				echo "El precio ".$nro."<br>";
				echo "el iva es: ".$iva."<br>";
				echo "cantidad: ".$nro1."<br>";
				echo "El total es: ".$resultado;
			}
			
			
		}




		// for($x=1;$x<11;$x++){
		// 	$producto = $art * $x;
		// 	echo $art." * ".$x." = ".$producto."<br>";
		// }

		// $x=1;
		// while($x<11){
		// 	echo $art." * ".$x." = ".($x*$art)."<br>";
		// 	$x++;
		// }




			// OPERACIONES
		// $total = ($art * $cant);
		// // $resultado1 = ($nro1*45)+$nro2;

		// echo $total."<br>";
		// echo $resultado1."<br>";




		// //DATOS QUE PONGO DEFECTO
		// 	$usuario = "admin";
		// 	$contraseña = "admin";

		// if(isset($_POST['enviar'])){
		// 	if(($usuario == $art) && ($contraseña == $cant)){
		// 		// echo "BIENVENIDOS";
		// 		header("location: clase011121.php");
		// 	}else{
		// 		echo "DATOS INCORRECTOS";
		// 	}

		// }


		





		// echo "<h3>HOY VEMOS PHP</h3>
		// <p>VARIABLE</p>";

		// $nombre = "Ignacio";
		// $detalle = "quiere clase teorica";

		// echo "Nuestro compañero ".$nombre."<br>".$detalle;

	






	?>

	
</body>
</html>



