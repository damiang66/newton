let opcion =prompt("menu \n 1-suma de dos numeros\n 2-el mayor de 2 numeros\n 3-numero divisible por 3\n 4-muestre numeros del 1 al 15\n 5-Elija el numero ");
switch (opcion){
    case "1":
        let numero1=prompt("ingrese el 1er numero");
        let numero2=prompt("ingrese el segundo numero");
        let suma=sumar(numero1,numero2);
        alert(suma);

        break;
    case "2":
        let compara1=prompt("ingrese el 1er numero");
        let compara2=prompt("ingrese el segundo numero");
        comparar(compara1,compara2);
        break;
    case "3":
        let divisible=prompt("ingrese un numero para saber si es divisible por 3")
        divisiblePor3(divisible);    
        break;
        case "4":
            for(let i=1;i<16;i++){
                alert(i);
            }
            break;
        case "5":
            let aleatorio=random(1,5);
            //alert(aleatorio);
            let adivina = prompt("ingrese un numero del 1 al 5 para ver si adivino el numero secreto")
            if(aleatorio==adivina){
                alert("el numero se adivino");
            }else{
                alert("el numero no se adivino");
            }
            
            break;    
    default:
        alert("ingrese opcion valida");  
        break;  


}
function sumar(n,n1){
    suma=parseInt(n)+parseInt(n1);
    return suma;
}
function comparar(n,n1){
    if (n>n1){
        alert(n);
    }else{
        alert(n1);
    }
}
function divisiblePor3(n){
    n=parseInt(n);
    if (n%3==0){
        alert("el numero es divisible por 3");
    }else{
        alert ("el numero no es divisble por 3");
    }
}
function random(min, max) {
    return Math.floor((Math.random() * (max - min + 1)) + min);
}