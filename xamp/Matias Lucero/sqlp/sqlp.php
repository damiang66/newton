<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "pruebas2";

    //conect a host
    $conexion = mysqli_connect ($host,$user,$pass);
    //conect a la db
    $conexion_db = mysqli_select_db ($conexion,$bd) or die(mysqli_error());
    //query
    $sql = mysqli_query($conexion,"SELECT * FROM usuarios WHERE marca='LG' OR marca='SAMSUNG' ORDER BY nombre ASC;");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado de usuarios</title>
</head>
<body>
   <div class="container">
       <label class="h1">Listado de Usuarios</label>
   <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Sexo</th>
        <th scope="col">Nivel</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Marca</th>
        <th scope="col">Compañia</th>
        <th scope="col">Saldo</th>
        <th scope="col">Activo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
	<!-- codigo PHP aqui -->
    <?php 
    while($consulta = mysqli_fetch_array($sql)){
        echo "
        <tr> 
        <td>" . $consulta["id"] . "</td> 
        <td>" . $consulta["usuario"] . "</td>
        <td>" . $consulta["nombre"] . "</td>
        <td>" . $consulta["sexo"] . "</td>
        <td>" . $consulta["nivel"] . "</td>
        <td>" . $consulta["email"] . "</td>
        <td>" . $consulta["telefono"] . "</td>
        <td>" . $consulta["marca"] . "</td>
        <td>" . $consulta["compañia"] . "</td>
        <td>" . $consulta["saldo"] . "</td>
        <td>" . $consulta["activo"] . "</td>
        
        </tr>";
        
    };
?>
        

    </tbody>
    </table>
   </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>