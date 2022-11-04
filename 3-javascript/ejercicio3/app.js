let boton = document.getElementById("btn")
let a;
let link = document.getElementById("link");
window.onload= function(){
link.style.display="none";
}
boton.onclick = () => {
    // alert("me presiono")
  
    if (!a==1){
  
    let parrafo = document.createElement("p");
    let contenido = document.createTextNode("hola presionaste el boton");
    parrafo.appendChild(contenido);
    //let link = document.createElement("a");
    //document.body.innerHTML('<a>hola</a>');

    link.style.display="block";

    document.body.appendChild(parrafo);
       a=1; 
    }else{
        alert("esta accion ya se realizo");
    }
    
    }
       
    

   // document.body.appendChild(link);





