//mostramos los datos que tenemos en un txt

 fetch("https://reqres.in/api/users",{
     method: "POST",
     body : JSON.stringify({
         "nombre" : "damian",
         "edad" : "39"
     }),
     headers: {"content-type":"application/json"}//segun el tipo de datos que mandemos

 } )



.then(res=>res.json())
.then(res=>console.log(res))
//console.log(peticion);


// peticion.open("GET","informacion.txt");// acceso al lugar donde quiero sacar la informacion
// peticion.send();//envio la peticion





