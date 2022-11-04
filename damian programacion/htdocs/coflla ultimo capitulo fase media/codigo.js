//cofla ultimo capitulo aprobados y desaprobados
let aprobados = document.querySelector(".aprobados");
const mostrarAprobados = async ()=>{
    
   let  peticion = await axios("informacion.txt");
    //let resultado = await peticion.json();
    aprobados.textContent= peticion.data.aprobados

}
document.getElementById("bnt-aprobados").addEventListener("click",mostrarAprobados);