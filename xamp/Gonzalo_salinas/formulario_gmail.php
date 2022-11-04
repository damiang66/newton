<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>formulario_gmail</title>
</head>
<body>
	<?php
	$conex=mysqli_connect("localhost","root","");
	$base=mysqli_select_db($conex,"pasteleria_pagina");
	if ($conex==true) {
  		echo "conexion establecida"."<br>";
  	 }else{
  		echo "error al conectar";
     }

    $datos="INSERT INTO mensajes (nombre,apellido,email,consulta)"
	?>
	<form>
		<input type="text" name="nombre" placeholder="Nombre"><br>
		
		<input type="email" name="gmail" placeholder="Gmail"><br>
		<input type="text" name="consulta" placeholder="Consulta"><br>
	</form>
</body>
</html>