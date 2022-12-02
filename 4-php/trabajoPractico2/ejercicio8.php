<?php
$mascotas=[
"tipo"=>"perro",
"edad"=>"5",
"altura"=>10,
"nombre"=>"Neron"
];
foreach ($mascotas as $aux => $valor) {

    echo $aux.": ".$valor."<br>";
    
    }
$mascotas=[
"tipo"=>"gato",
"edad"=>"1",
"altura"=>2,
"nombre"=>"Bosnia"
];
foreach ($mascotas as $aux => $valor) {

    echo $aux.": ".$valor."<br>";
    
    }
$mascotas=[
    "tipo"=>"perro",
    "edad"=>"5",
    "altura"=>10,
    "nombre"=>"Ketma"
    ];
foreach ($mascotas as $aux => $valor) {

    echo $aux.": ".$valor."<br>";
    
    }

/*
$nombre=[];
$nombre["mascota1"]=["perro",20,10,"neron"];
$nombre["mascota2"]=["gato",1,5,"Bosnia"];
$nombre["mascota3"]=["gato",2,8,"Ketma"];
//var_export($nombre);

foreach ($nombre as $mascota => $valor) {

echo $mascota,$valor;


}

/*
for comun
echo "mascota1";
echo "</br>";
for ($i=0; $i < 4; $i++) { 
    echo $nombre["mascota1"][$i],",";
   
}
echo "</br>";
echo "mascota2";
echo "</br>";
for ($i=0; $i < 4; $i++) { 
    echo $nombre["mascota2"][$i],",";
   
}
echo "</br>";
echo "mascota3";
echo "</br>";
for ($i=0; $i < 4; $i++) { 
    echo $nombre["mascota3"][$i],",";
    
}
echo "</br>";
*/
?>