<?php
$persona = [];
$persona["nombre"]="jon";
$persona["apellido"]="Snow";
$persona["edad"]=27;
$persona["hobbies"]=["netflix","futbol","programar"];
var_export($persona);
echo"";
$persona["hobbies"][3]="correr";
var_export($persona);
$persona["direccion"]="Winterfell";
var_export($persona);
//echo $persona["edad"];   
?>
