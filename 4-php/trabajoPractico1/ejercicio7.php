<?php
$nota=10;
switch($nota){
    case 1:
    case 2:
    case 3:
        echo "desaprobado";
        break;
    case 4:
    case 5:
        echo "podria ser peor";
        break;
    case 6:
    case 7:
    case 8:
        echo "zafamos";
        break;
    case 9:
        echo "Muy Bien";
        break;
    case 10:
        echo "Excelente";
        break;
    default:
     echo "ingrese una nota valida";    

}
?>