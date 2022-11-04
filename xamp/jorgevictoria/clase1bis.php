<?php


$Persona=["Nombre" => "Jon",
			"Apellido" => "Snow",
			"Edad"=> 27,
			"Hobbies"=> ["Netflix", "Futbol","Programar"]];
			


$Persona['Hobbies'][3]='Correr';
$Persona['Direccion']='Winterfell';
	// echo $Persona["Nombre"];
	// echo $Persona["Apellido"];
	// echo $Persona["Edad"];
	// echo $Persona["Hobbies"][3];
	// echo $Persona["Dirección"];

	var_dump($Persona);
	// var_dump($Persona['Hobbies']);
echo "<br>";
echo "<br>";
echo "<br>";
$Numero1=5;
$Numero2=10;

if($Numero1>$Numero2){
	echo "El Numero 1 es Mayor";
}else{
	echo "El Numero 2 es mayor";
}

echo "<br>";
echo "<br>";
echo "<br>";


?>