<?php

function validar(){
    $errores=[];
if($_POST["usuario"] == NULL);
    $errores += ["Debe completar este campo"];


if($_POST["correo"] == NULL);
    echo "Debe completar este campo";

if($_POST["edad"] < 18 || $_POST["edad"] == NULL);
    echo "Debe ser mayor de edad";
    





}










?>