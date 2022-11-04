
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="body">
    <h1>Gestion de clientes</h1>
    <form action="ejercicio4.php" method="POST">
        <label for="">Nombre</label>    <input type="text" name ="usuario" required></br>
        <label for="">Contraseña</label>    <input type="text" name ="contraseña"required></br>
        
        <button type="submit" id="guardar">Guardar</button>
    </form>
</body>
</html>
<?php 
$nombre=$_POST['usuario'];
$pass=$_POST['contraseña'];
if($nombre=="Admin"&& $pass=="1234"){
    echo "Bienvenidos";
}else{
    echo "tiene un error en el login";
}
?>
