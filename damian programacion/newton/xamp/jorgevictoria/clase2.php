<?php

$nro=2;

for($x=1;$x<11;$x++){

	echo $nro*$x."<br>";

	echo $nro."por".$x."=".$nro*$x."<br>";
}



$x=1;
while ($x<11) {
	$res=$nro*$x;
	$x++;

	echo $res;
	// code...
}


$x=100;

while($x>85){
	
	$x--;

	echo $x."<br>";
}


$cotnador=0;
$a=1;
while ($a<=5) {
	$contador=$a*2;
	$a++;

	echo $contador."<br>";
	// code...
}

$veces=0;
$tiros=0;

while($veces<5){
	$cara=rand(0,1);
	$tiros++;
	if($cara==1){
		$veces++;
	}

}
echo "tiros".$tiros;
echo "veces".$veces."<br>";

$persona=["Juan","Pedro","Jorge","Facundo","Leonel"];

for($x=0;$x<count($persona);$x++){
	echo $persona[$x]."<br>";
}

?>