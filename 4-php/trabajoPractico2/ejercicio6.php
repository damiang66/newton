<?php
$numero=[];
for ($i=0; $i <10 ; $i++) { 
    $numero[$i]=rand(0,10);
}
for ($j=0; $j <10 ; $j++) { 
    echo $numero[$j];
    echo "</br>";
    if ($numero[$j]==5){
        break;
    // $i=10;
    }

}
?>