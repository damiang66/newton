<?php
$monto=600;
$porcentaje;
if($monto<100){
$porcentaje=0;
}
if ($monto>=100 && $monto<500){
    $porcentaje=10;
}
if ($monto>500){
    $porcentaje=15;
}
descuento($monto,$porcentaje);
function descuento($monto,$porcentaje){
    $conDescuento=$monto-$monto*$porcentaje/100;
    echo "<p> precio de lista: \$$monto</p>";
    echo "<p> Descuento: \$$porcentaje%</p>";
    echo "<p> Precio con descuento \$$conDescuento</p>";

} 
?>