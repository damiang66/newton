<?php
/*profe lo realice con 3 paises porque cuando lo copiaba del practico me salia esto  $europa = [&quot;Italia&quot;=&gt;&quot;Roma&quot;, &quot;Luxembourg&quot;=&gt;&quot;Luxembourg&quot;, &quot;Bélgica&quot;=&gt;&quot;Bruselas&quot;,
&quot;Dinamarca&quot;=&gt;&quot;Copenhagen&quot;, &quot;Finlandia&quot;=&gt;&quot;Helsinki&quot;, &quot;Francia&quot; =&gt;
&quot;Paris&quot;, &quot;Slovakia&quot;=&gt;&quot;Bratislava&quot;, &quot;Eslovenia&quot;=&gt;&quot;Ljubljana&quot;, &quot;Alemania&quot; =&gt; &quot;Berlin&quot;,
&quot;Grecia&quot; =&gt; &quot;Athenas&quot;, &quot;Irlanda&quot;=&gt;&quot;Dublin&quot;, &quot;Holanda&quot;=&gt;&quot;Amsterdam&quot;,
&quot;Portugal&quot;=&gt;&quot;Lisbon&quot;, &quot;España&quot;=&gt;&quot;Madrid&quot;, &quot;Suecia&quot;=&gt;&quot;Stockholm&quot;, &quot;Reino Unido&quot;=&gt;&quot;London&quot;,
&quot;Chipre&quot;=&gt;&quot;Nicosia&quot;, &quot;Lithuania&quot;=&gt;&quot;Vilnius&quot;, &quot;Republica Checa&quot;=&gt;&quot;Prague&quot;, &quot;Estonia&quot;=&gt;&quot;Tallin&quot;,
&quot;Hungría&quot;=&gt;&quot;Budapest&quot;, &quot;Latvia&quot;=&gt;&quot;Riga&quot;,
&quot;Malta&quot;=&gt;&quot;Valletta&quot;, &quot;Austria&quot; =&gt; &quot;Vienna&quot;, &quot;Polonia&quot;=&gt;&quot;Warsaw&quot;];
*/
//y era mucho para cambiar.jajjajaj
$europa=["Italia"=>"Roma","Belgica"=>"Bruselas","Francia"=>"Paris"];
foreach($europa as $pais =>$capital){
echo "EL pais: ".$pais." tiene su capital llamada ".$capital."</br>";
}
?>