<?php
$numeroRandom= rand(1,5);
if ($numeroRandom==3 || $numeroRandom==5){
    echo $numeroRandom;
}else{
    echo "el numero no esta en el rango ", $numeroRandom;
}
?>