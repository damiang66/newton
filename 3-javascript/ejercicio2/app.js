let opcion = prompt("menu \n 1-tabla de multiplicar\n 2-ingrese el numero del mes y dire que cantidad de dia tengo\n 3-ingrese numero de mes y te dire en que estacion estoy\n 4-compra un auto ford");
switch (opcion) {
    case "1":
        let numero = prompt("ingrese un numero para sacar la tabla de multiplicar")
        multiplicar(numero);
        break;
    case "2":
        let mes = prompt("ingrese un numero de mes");
        cantidadDeDia(mes);
        break;
    case "3":
        let estacion = prompt("ingrese un numero de mes")
        estacionDelAño(estacion);
        break;
    case "4":
         let auto= prompt("ingrese el auto a comprar");
         let precio = parseInt(prompt("ingrese el precio del auto"));
         auto=auto.toUpperCase();
         let total=descuento(auto,precio);   
         alert("el precio del auto es "+ total);
        break;

    default:
        alert("ingrese opcion valida");
        break;


}
function multiplicar(n) {
    for (let i = 0; i < 10; i++) {
        alert("la tabla de multiplicar del numero " + n + " es: " + i * n);
    }
}
function cantidadDeDia(mes) {
    if (mes > 0 && mes < 13) {
        switch (mes) {
            case "1":
            case "3":
            case "5":
            case "7":
            case "8":
            case "10":
            case "12":

                alert("este mes tiene 31 dias");
                break;
            case "2":
                alert("este mes tiene 28 dias");
                break;
            case "4":
            case "6":
            case "9":
            case "11":
                alert("este mes tiene 30 dias");
                break;

        }
    } else {
        alert("ingrese un mes valido")
    }
}
function estacionDelAño(mes) {
    if (mes > 0 && mes < 13) {
        switch (mes) {
            case "12":
            case "1":
            case "2":

                alert("Este mes se encuenta en la estacion de Verano");
                break;
            case "3":
            case "4":
            case "5":
                alert("Este mes se encuenta en la estacion de Otoño");
                break;
            case "6":
            case "7":
            case "8":
                alert("Este mes se encuenta en la estacion de Invierno");
                break;
            case "9":
            case "10":
            case "11":
                alert("Este mes se encuenta en la estacion de Primavera");
                break;
            default:
                alert("ingrese un mes valido");
                break;

        }
    } else {
        alert("ingrese un mes valido")
    }
}
function descuento(a,p){
    let total=p;
    parseInt(total);
    parseInt(p);
    alert(a);
    if (a=="FORD FIESTA"){
        total=total-p*0.05;
    }else if(a=="FORD FOCUS"){
        total=total-p*0.10;
    }else{
        total=p;
    }
    return total;
}