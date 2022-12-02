<?php
$numero=[];
$c=0;
for ($i=0; $i <10 ; $i++) { 
    $numero[$i]=rand(1,10);
}
for ($j=0; $j <10 ; $j++) { 
    echo $numero[$j];
    echo "</br>";
    if ($numero[$j]%2==0){
     $c++;   
    // $i=10;
    }

}
echo "la cantidad de numeros pares es ", $c;
?>