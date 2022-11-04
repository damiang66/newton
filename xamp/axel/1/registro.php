<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'pizzeria';

$conection = mysqli_connect($host, $user, $pass);
$conexiondb = mysqli_select_db($conection,$bd) or die(mysqli_error());

if(isset($_POST['enviar'])){

$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];
$consulta = $_POST["consulta"];


$ingresar = mysqli_query($conection,"INSERT INTO consultas (nombre,mail,telefono,consulta) VALUES('$nombre','$mail', '$telefono', '$consulta')");

		if($ingresar==TRUE){
			echo "<script>alert('Datos ingresados correctamente')
			window.location.href='index.php';</script>";
		}

}


?>