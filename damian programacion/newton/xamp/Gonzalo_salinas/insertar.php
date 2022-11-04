
<?php

 $conexion = mysqli_connect("localhost" , "root" , "" ,"biblioteca");

 $guardar = mysqli_query($conexion ,"INSERT INTO prestamos(idUsuario,idLibro,fentrega,fdevolucion) values(1,2,'2021-11-10','2021-11-26'); ");
 if ($guardar== true) {
 	echo "GUARDADO CON EXITO";
 }else{
 	echo "ERROR AL GUARDAR";
 }

 $mostrar = mysqli_query ($conexion, "SELECT * FROM prestamos JOIN usuario ON prestamos.idUsuario = usuario.idUsuario JOIN libros ON prestamos.idLibro = libros.idLibro");
 while ($mostrarDatos = mysqli_fetch_array($mostrar)) {
 	echo $mostrarDatos['nombre']."<br>";
 	echo $mostrarDatos['titulo']."<br>";
 	echo $mostrarDatos['fentrega']."<br>";
 	echo $mostrarDatos['fdevolucion']."<br>";
 }
?>
