<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CLINICA PRIVADA DE MENDOZA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!--CSS PERSONAL-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php 
 include 'menu.php'
?>

    <!-- NO BORRAR / MENU DEL SITIO -->

<!--    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="35" class="d-inline-block align-text-top"> CLINICA
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ESPECIALIDADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PLANES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asociarme.html">ASOCIARME</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>-->

    <!--COLOCA TU FORMULARIO AQUI-->

    <!--
        EL formulario debe contener 
        
        *DNI,
        *domicilio, 
        *un select para provincias (minino 5),
        *Telefono, 
        *Email,
        *Un select con 5 obras sociales,
        *estado civil (soltero, casado, divorciado, viudo),
        *cantidad de personas a cargo,
        *cantidad de hijos
        *checkbox con d??as de contacto,
        *checkbox con turnos de contacto (ma??ana, tarde, noche),
        *text area con enfermedades preexitentes,
        *input type file para cargar la foto del nuevo socio


     -->
    <form action="nuevo.html" method="POST">

        <label>Nombre y apellido</label> <input type="text" name="usuario"><br>
        <label>DNI</label> <input type="number" name="dni" placeholder="2099988"><br>

        <label>Domicilio:</label>
        <input type="text">

        <select name="provincias">
            <option value="" disabled selected>Elegi una provincia</option>
            <option value="MZA">Mendoza</option>
            <option value="SSJ">San Juan</option>
            <option value="SSL">San Luis</option>
            <option value="CAT">Catamarca</option>
        </select>
        <br>
        <label for="">Dias de contacto</label>
        <label for="">Lunes</label> <input type="checkbox" name="dias" value="lun">
        <label for="">Martes</label> <input type="checkbox" name="dias" value="mar">
        <BR></BR>

        <label for="">Estado civil</label>
        <input type="radio" name="estado-civil" value="s"><label for="">soltero</label>
        <input type="radio" name="estado-civil" value="C"><label for="">CASADO</label>

        <button>ENVIAR</button>
    </form>

    <!-- NO BORRAR-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>