class app {
    constructor (descargas,puntuacion,peso){
        this.descagas= descargas;
        this.puntuacion = puntuacion;
        this.peso = peso;
        this.iniciada = false;
        this.instalada = false;
    }
abrir (){
    if(this.iniciada==false){
        this.iniciada= true;
        alert ("la app esta prendida");

    } else {
        this.iniciada=false;
        alert ("la app esta apagada");
    }

}
instalar (){
    if(this.instalada==false){
        this.instalada= true;
        alert ("la app esta instalada");

    } else {
        this.instalada=false;
        alert ("la app esta desintalada");
    }

}
appinfo(){
    return `
    descargas: <b>${this.descagas}</b><br>
    Puntuacion: <b>${this.puntuacion}</b><br>
    Peso: <b>${this.peso}</b><br>

    `;
}
}
app1 = new app("10000","10","120mb");
app2 = new app("10","20","130mb")
document.write(`
${app1.appinfo()} <br>
${app2.appinfo()} <br>


`);
