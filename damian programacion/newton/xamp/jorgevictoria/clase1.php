<?php

//$nombre ="Noelia";
//$edad = 32;
//$altura = 1.57;

//echo $nombre;
//echo "<br>";
//echo "edad:".$edad."<br>";
//echo "altura:".$altura;

//$dias=["Lunes","Martes","Miercoles","Jueves","Viernes"];

//echo $dias[3];

//var_dump($dias);

$Personas=["Nombre" => "Noelia",
			"Apellidos" => ["Pineda","Garro"],
			"Edad"=> 32];

			echo $Personas["Apellidos"][0];

			$Personas["Edad"]="32";

var_dump($Personas);



?>