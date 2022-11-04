<?

include_once ("funciones.php")
$nombre="";
$email="";
$contraseña="";
if ($_REQUES) {
    $nombre=$_REQUEST["user"];
    $email=$_REQUEST ["email"];
    $contraseña=$_REQUEST ["password"];
    validar ();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="login.php" method="POST">
<input type="user" name="user"  value ="<?= $nombre ?>">
<input type="email" name="email"  value ="<?= $email ?>">
<input type="password" name="password"  value ="<?= $contraseña ?>">
</form>
<button onclick="validar()" >Enviar</button>


</body>
</html>