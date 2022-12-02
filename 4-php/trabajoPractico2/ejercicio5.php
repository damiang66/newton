<?php
$nombre=[];
$nombre[0]="camila";
$nombre[1]="damian";
$nombre[2]="josefina";
$nombre[3]="francesca";
$nombre[4]="clarisa";

echo "con un for tradicinal";
echo "</br>";
for($i=0;$i<5;$i++){
    echo $nombre[$i];
    echo "</br>";
}
echo "con un while ";
echo "</br>";
$c=0;
$d=0;
while($c<5){
    echo $nombre[$c];
    echo "</br>";
    $c++;
}
echo "con un Do while ";
echo "</br>";
do{
    echo $nombre[$d];
    echo "</br>";
    $d++;
}while($d<5);
echo "con un Foreach ";
echo "</br>";
foreach($nombre as $aux){
    echo $aux;
    echo "</br>";

}
?>