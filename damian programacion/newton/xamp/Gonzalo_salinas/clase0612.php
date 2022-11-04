<?php

 $con=mysqli_connect("localhost","root","");
 $basa=mysqli_select_db($con,"pruebas");
 // if ($con==true) {
 // 	echo "conexion establecida";
 // }else{
 // 	echo "error al conectar";
 // }
  $mostrar=mysqli_query($con,"SELECT nombre,telefono,usuario FROM tblusuarios");
  while ($mostrar_datos=mysqli_fetch_array($mostrar)) {
    echo $mostrar_datos['nombre'].",".$mostrar_datos['telefono'].",".$mostrar_datos['usuario']."<br>";
  }
  $actualizar=mysqli_query($con, "UPDATE tblusuarios SET usuario='HOLAFACHA' WHERE idx IN (3,6,9)");
    if ($actualizar == true) {
    	echo "Datos actualizados";
    }
?>