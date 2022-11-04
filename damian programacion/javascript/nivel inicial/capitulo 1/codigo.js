// compra de elado segun eleccion 
let dineroCliente1= prompt ("cuanto dinero tiene cliente 1");
//let dineroCliente2= prompt ("cuanto dinero tiene cliente 2");
//let dineroCliente3= prompt ("cuanto dinero tiene cliente 3");
let heladoAgua=1.5;
let heladoDeCrema=2;
let heladoCaro=3;
let vuelto;

if (dineroCliente1 >= heladoAgua && dineroCliente1<2){
 alert("comprate el helado de helado de Agua")
 
 vuelto=  dineroCliente1 - heladoAgua ;
 alert("su vuelto es" + vuelto);
}
else if (dineroCliente1>=heladoDeCrema && dineroCliente1 <3){
	alert("comprate el helado de crema");
	
 vuelto=  dineroCliente1 - heladoDeCrema ;

 alert("su vuelto es" + vuelto);
}
else if (dineroCliente1>=heladoCaro) {
	alert("comprate un helado caro");
	 
 vuelto=  dineroCliente1 - heladoCaro ;

 alert("su vuelto es" + vuelto);
}
else{
	alert("no te alcanza nada pobre");
	alert("toma lo poco que tenes"+ dineroCliente1)
}
// repetimos este proceso 	
	
	



	 