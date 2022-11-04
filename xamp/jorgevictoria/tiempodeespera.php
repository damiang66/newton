<?php

$_SESSION['tiemout'] = time();

$inactividad = 100;

if (isset($_SESSION['tiemout'])) {

	$sessionTTL = (time() - $_SESSION['tiemout']);
	if($sessionTTL > $inactividad){

		session_destroy();
		echo "<script>alert('sesion cerrada');

	window.location.href='clasesesiones.php';</script>";
	}
}