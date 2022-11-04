<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <form action="ejercicio5.php" method="Post">
        <label for="Edad">edad</label><input type="text" name="edad">
        <label for="Casado">casado</label><input type="text" name="casado" id="">
        <label for="Sexo">Sexo</label><input type="text" name="sexo" >
        <button type="submit">Validar</button>
    </form>
</head>
<body>
    
</body>
</html>
<?php
$edad=$_POST['edad'];
$casado=$_POST['casado'];
$sexo=$_POST['sexo'];
if($edad>17){
    echo "esta persona es mayor de edad";
}else{
    echo "esta persona es menor de edad";
}
echo "</br>";
if ($casado=="si"){
    echo "bienvenido";
}else{
    echo "usted no es cadado";
}





?>