//mostramos los datos que tenemos en un txt
let peticion;
let datos;
let respuesta;
if (window.XMLHttpRequest){
    peticion = new XMLHttpRequest();// creo una nueva peticion y pregunto si puedo usar este tipo de 

}else {
    peticion = new ActiveXObject("Microsoft.XMLHTTP");// creo una nueva peticion

}

  peticion.addEventListener("load",()=>{

    if (peticion.status > 200) respuesta=peticion.response;
    else respuesta =  "lo siento la clarisa es una puta"
console.log(JSON.parse(respuesta))
   
});
peticion.open("POST","https://reqres.in/api/users");
peticion.setRequestHeader("content-type","application/json;charset=UTF8");
peticion.send(JSON.stringify({
 "nombre": "morfeo",
 "trabajo": "lider"
}));

// peticion.open("GET","informacion.txt");// acceso al lugar donde quiero sacar la informacion
// peticion.send();//envio la peticion





