<?php
    /* $nro = 23;
     $nro1 = 34;

     echo $nro+$nro1;


include_once 'header.php';

echo "hago un archivo externo<br>";
include_once 'footer.php';*/



//funciones con parametros

/*$nro = 23;
$nro1 = 34;

function suma($valor1,$valor2){
	echo $valor1+$valor2;
}
suma($nro,$nro1)*/

?>
<!--form action="clase2.php" method="post">

	usuario: <input type="text" name="usuario"><br>

	contraseña: <input type="password" name="pass"><br>
	<input type="submit" name="enviar"-->
	
</form>

<?php
/*if (isset($_POST['enviar'])) {
//validacion usuarios
//usuario pre definido
	$user = 'admin';
	$pass = 123;
//usuario ingresado al form
	$usuario = $_POST['usuario'];
	$password = $_POST['pass'];

	if ($usuario == $user && $password == $pass) {
		//echo "<h2> BIENVENIDOS". $usuario."AL SISTEMA</h2>";
      header('location: inicio.php');
	}else{
		//echo "sus datos no coinciden, vuelva a intentarlo";
		header('location: clase2.php');
	}

}*/
//crear una funcion que me de como resultado el area de un triangulo

$altura = 10; 
$base = 7;

function area($valor1, $valor2){
	echo $valor1*$valor2/2;
}
area($base, $altura);







/* $p = $_POST['precio'];

 $i = $_POST['iva'];

 $costoiva = $p*$i/100;

$preciototal = $p + $costoiva;

echo $preciototal;
}*/
?>
