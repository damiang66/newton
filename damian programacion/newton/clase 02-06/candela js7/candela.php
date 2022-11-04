<?php

function trabajo($sueldobasico, $antiguedad){

    if ($sueldobasico < 2200 && $antiguedad > 5){

        $nuevosueldo = $sueldobasico + ($sueldobasico * 0.3);
       
    } else {
        $nuevosueldo = $sueldobasico;
     
    } 
        echo "$nuevosueldo";
        
}
    trabajo(2300, 15);


?>
