<?php
$numero=rand(0,1);
$contador=0;
$total=0;
while($contador<5){
    $total++;
    echo $numero;
    echo"</br>";
    if ($numero==1){
        $contador++;
    }
     $numero=rand(0,1);   
}
echo "la cantidad de veces que entro en el bucle fue ", $total;
?>