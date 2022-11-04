<?php

$con = mysqli_connect('localhost','root','','calzadosilvia');

if (isset($_POST['enviar'])) {

    $nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$mensaje = $_POST['message'];

    $guardar = "INSERT INTO contacto (nombre,apellido,email,telefono,mensaje)
    VALUES('$nombre','$apellido','$email','$telefono','$mensaje')"; 

    mysqli_query($con,$guardar);

    if($guardar==true){
        echo "<script> alert('Gracias por comunicarse con nosotros');
        window.location.href='index.html'</script>";
    }
}

?>