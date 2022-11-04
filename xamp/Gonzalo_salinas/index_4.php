<!DOCTYPE html>
<html>
<head>
	<title>registro-pagina</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body{
		text-align: center;
		margin: 0px;
		padding: 100px;
		background-color:F3F5DE;
		font-family: 'Josefin Sans', sans-serif;
	}
	h2{
		margin-top: 25px;
	}
	form{
		border-radius: 5px;
		width: 600px;
		height: 350px;
		background-color: lightblue;
		margin: auto;
		padding: 20px;
		text-align: center;	
	}
	input{
		margin: 30px;
		font-size: 25px;
	}
</style>
<body>
	<form method="post">
		<h2>Registrate</h2>
		<input type="text" name="name" placeholder="Nombre"><br>
		<input type="email" name="email" placeholder="Email"><br>
		<input type="submit" name="register">
	</form>
	<?php
	include("registrar.php")
	?>
</body>
</html>