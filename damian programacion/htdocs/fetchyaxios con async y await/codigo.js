//axios y flex con async y await
const mostrarNombre = async ()=>{
    let peticion= await fetch("informacion.txt");
    let resultado = await peticion.json();
    let htmlcode =`${resultado.nombre}<br>
    ${resultado.edad}`;// mostramos lo que esta en el txt en del div que creamos en el index.html
   document.querySelector(".respuesta").innerHTML = htmlcode;
}
document.getElementById("bnt-nombre").addEventListener("click",mostrarNombre);