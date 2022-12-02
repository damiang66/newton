<?php
$ceu = [
    "Argentina"=>["Buenos Aires","Cordoba","Santa Fe",true],
    "Brasil"=>["Brasilia","Rio de Janeiro","Sao Pablo",true],
    "Colombia"=>["Cartagena","Bogota","Barranquilla",true]

];
foreach($ceu as $pais =>[$a,$b,$c]){
    echo "las ciudades de ".$pais." son "."</br>";
    echo "*".$a."</br>";
    echo "*".$b."</br>";
    echo "*".$c."</br>";

    }
?>