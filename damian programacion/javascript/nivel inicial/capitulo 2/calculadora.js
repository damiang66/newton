const sumar = (num1,num2) => {
	return parseInt(num1) + parseInt(num2);
}
const restar = (num1,num2) => {
	return parseInt(num1) - parseInt(num2);
}
const multiplicar = (num1,num2) => {
	return parseInt(num1) * parseInt(num2);
}
const dividir = (num1,num2) => {
	return parseInt(num1) / parseInt(num2);
}
alert ("que operacion va a realizar");
let operacion = prompt("1:suma, 2:resta, 3:multiplicar, 4:dividir");
let num1= prompt("ingrese 1er valor");
let num2= prompt("ingrese 2do valor");
let resultado;
if (operacion == 1) {

resultado =	sumar(num1,num2);
alert ("tu resultado es " + resultado );
}
else if (operacion == 2){
	
resultado =	restar(num1,num2)
alert ("tu resultado es " + resultado );

}
else if (operacion == 3) {
resultado =	multiplicar(num1,num2);
alert ("tu resultado es " + resultado );

}
else if (operacion == 4){
	resultado = dividir(num1,num2);

	alert ("tu resultado es " + resultado );
}	
else  {
	alert (" ingresa bien el numero cara hormiga");
}



