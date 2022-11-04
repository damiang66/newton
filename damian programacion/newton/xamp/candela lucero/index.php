<?php


include("funciones.php");
//require//

$local=[
    "LH"=> "LAS HERAS",
    "CAPITAL"=> "CAPITAL"
    
];
$usuario="";
$correo="";
$edad="";

if($_POST){
    $usuario=$_POST["$usuario"];
    $correo=$_POST["$correo"];
    $edad=$_POST["$edad"];
    validar();






};

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
        <form action="formulario.php" method="POST">
            <label for="">NOMBRE</label>
            <input type="text" name="usuario">


            <label for="">EMAIL</label>
            <input type="email" name="correo">

            <label for="">EDAD</label>
            <input type="number" name="edad" value="<?php echo $edad ?>">

            <label for="">Seleccione una localidad</label>
            <select name="localidad" id="">
            <?php foreach ($local as $valor => $depto){?>
                <?php if($_POST["localidad"] == $valor){ ?>
                <option value="<?= $valor ?>"selected> <?=  $depto ?></option>
            <?php }else{ ?>
                 <option value="<?= $valor ?>"> <?=  $depto ?></option>
            <?php } ?>
            <?php } ?>
            
            

            </select>
            

            <button type="submit">ENVIAR</button>






        </form>



















</body>
</html>