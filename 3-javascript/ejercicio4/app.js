/*
TRABAJO PRÁCTICO: 5

1. Escribir el código de una función a la que se pasa como parámetro un número
entero y devuelve como resultado una cadena de texto que indica si el número
es par o impar. Mostrar por pantalla el resultado devuelto por la función.

2. Realizar un programa que una vez que solicita dos números por teclado, los
pasa a una función donde se calcula la resta de éstos. La función devolverá
dicho resultado, pero en el caso de que salga negativo, deberá cambiarle el
signo antes de devolverlo e informar por que el número efectivamente es
negativo. Imprimir el resultado en la función principal.
3. Un empleado de una clínica tiene que calcular distintos valores del coseguro
de acuerdo a su obra social según los siguientes datos:
a. OSEP debe pagar solo un 30% del coseguro.
b. OSDE debe pagar un recargo del 40% del coseguro.
c. PAMI debe pagar el valor del coseguro menos el 25%.
d. MEDICUS debe pagar el valor del coseguro más 15%.
El valor del coseguro depende de la localidad de residencia:
a. Maipú: $350
b. Dorrego: $450
c. Junín: $ 500
Realizar un programa que realice estos cálculos en base a los datos ingresados por
teclado.
*/
let opcion = prompt("menu\n1-Indicar si el numero es par o no\n2-Realizar una resta\n3-Programa clinica")
switch (opcion) {
    case "1":
        let numero = prompt("ingrese un numero")
        numero = parseInt(numero);
        let resultado = verificarSiEsPar(numero);
        alert(resultado)
        break;
    case "2":
        let primero = parseInt(prompt("ingrese el primer numero"));
        let segundo = parseInt(prompt("ingrese el segundo numero"));
        let resulado = restar(primero, segundo);
        alert("el resultado de la resta es " + resulado);
        break;
    case "3":
        let localidad = prompt("ingrese su localidad");
        let obraSocial = prompt("ingrese su obra Social");
        localidad = localidad.toLowerCase();
        obraSocial = obraSocial.toUpperCase();
        // alert(obraSocial);
        // alert(localidad);
       let coseguro= calcularCoseguro(localidad, obraSocial);
       if (coseguro==null){
        alert("ingrese los datos correctamente")
       }else{
        alert("lo que tiene que pagar es "+ coseguro);
       }
        break;
    default:
        alert("ingrese los datos correctamente");

}
function verificarSiEsPar(n) {
    let resultado;
    if (n % 2 == 0) {
        resultado = "el numero es par"
    } else {
        resultado = "el numero es impar"
    }
    return resultado;

}
function restar(n, n1) {
    let resultado = n - n1;
    if (resultado < 0) {
        alert("el resultado es negativo se le cambiara el signo");
        resultado = resultado * -1;

    }
    return resultado;
}
function calcularCoseguro(l, o) {
    let coseguro;
    let verificar = false;
    //let descuento;

    if (l == "maipu") {
        coseguro = 350;
        verificar = true;
    }
    if (l == "dorrego") {
        coseguro = 450;
        verificar = true;
    }
    if (l == "junin") {
        coseguro = 500;
        verificar = true;
    }
    if (verificar) {
        if (o == "OSEP") {
            osep=coseguro*30/100
            coseguro =osep;
        }
        if (o == "OSDE") {
            let osde=coseguro*40/100;
            coseguro+=osde;
        }
        if (o == "PAMI") {
            let pami=coseguro*25/100;
            coseguro = coseguro -pami;
        }
        if (o=="MEDICUS"){
            let medicus=coseguro*15/100
            coseguro=coseguro+medicus;
        }
        return coseguro;


    }

}