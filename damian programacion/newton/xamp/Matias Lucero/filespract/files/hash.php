<?php
$contraseña="admin123";
$contraseñaingresada="admin123";
$hash=password_hash($contraseñaingresada,PASSWORD_DEFAULT);
$resultado=password_verify($contraseña,$contraseñaingresada);
var_dump ($resultado)


?>