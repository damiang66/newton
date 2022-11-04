<?php
session_start();

$_SESSION['usuario'] = "admin";

if ($_POST['usuario'] ==$_SESSION['usuario']) {
	header('location: cargarformulario.php');
	}else{
		header('location:noticias.php');
	}

?>