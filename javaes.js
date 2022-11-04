window.juegoNro=[];// var global
window.puntaje=0;
user="";


window.onload=function(){
   // document.getElementById("img-inicio").classList.remove('d-none');
   // crearJuego();
   
   if (user=="") {
    document.getElementById("dashboard").classList.add("d-none");
    document.getElementById("login").classList.remove("d-none");
       
   }else{
    document.getElementById("dashboard").classList.remove("d-none");
    document.getElementById("login").classList.add("d-none");
   }
}

/* ELEGIR JUEGO*/
 
 function elegirJuego($nombreJuego){
    switch ($nombreJuego) {
        case "numeros-nombres":
            $games=[
                {"title":"UNO",
                "url":"img/numeros/nombres/1.png"},
                {"title":"DOS",
                "url":"img/numeros/nombres/2.png"},
                {"title":"TRES",
                "url":"img/numeros/nombres/3.png"},
                {"title":"CUATRO",
                "url":"img/numeros/nombres/4.png"},
                {"title":"CINCO",
                "url":"img/numeros/nombres/5.png"},
                {"title":"SEIS",
                "url":"img/numeros/nombres/6.png"},
                {"title":"SIETE",
                "url":"img/numeros/nombres/7.png"},
                {"title":"OCHO",
                "url":"img/numeros/nombres/8.png"},
                {"title":"NUEVE",
                "url":"img/numeros/nombres/9.png"},
                {"title":"DIEZ",
                "url":"img/numeros/nombres/10.png"}
            ];
            document.getElementById("titulo").classList.add('d-none');
            document.getElementById("labelTexto").innerHTML = "¿CÓMO SE LLAMA ESTE NUMERO? ESCRIBE EN LETRAS";
            break;
        case "numeros-cantidades":
            $games=[
                {"title":"UNA",
                "url":"img/numeros/cantidades/1.png"},
                {"title":"DOS",
                "url":"img/numeros/cantidades/2.png"},
                {"title":"TRES",
                "url":"img/numeros/cantidades/3.png"},
                {"title":"CUATRO",
                "url":"img/numeros/cantidades/4.png"},
                {"title":"CINCO",
                "url":"img/numeros/cantidades/5.png"},
                {"title":"SEIS",
                "url":"img/numeros/cantidades/6.png"},
                {"title":"SIETE",
                "url":"img/numeros/cantidades/7.png"},
                {"title":"OCHO",
                "url":"img/numeros/cantidades/8.png"},
                {"title":"NUEVE",
                "url":"img/numeros/cantidades/9.png"},
            ];
            document.getElementById("titulo").classList.add('d-none');
            document.getElementById("labelTexto").innerHTML = "¿CUÁNTAS FIGURAS HAY? ESCRIBE EN LETRAS";
            break;
        case "frutas-nombres":
            $games=[
                {"title":"MANZANA",
                "url":"img/frutas/1.jfif"},
                {"title":"FRUTILLA",
                "url":"img/frutas/2.jfif"},
                {"title":"BANANA",
                "url":"img/frutas/3.jfif"},
                {"title":"NARANJA",
                "url":"img/frutas/4.jfif"},
                {"title":"SANDIA",
                "url":"img/frutas/5.jfif"},
                {"title":"ANANA",
                "url":"img/6.jfif"}  
            ];
            document.getElementById("titulo").classList.add('d-none');
            document.getElementById("labelTexto").innerHTML = "¿CÓMO SE LLAMA ESTA FRUTA?";
            break;
        
        
        default:

            break;
    }
    crearJuego();
 }  


/* CREAR JUEGO*/
function crearJuego(){

    document.getElementById("area-juego").classList.remove('d-none');
    document.getElementById("btn-comenzar").classList.add('d-none');
    document.getElementById("img-inicio").classList.add('d-none');    
    $nextBtn= document.getElementById("nextBtn");
    document.getElementById("texto").value = "";
    document.getElementById("texto").classList.remove('d-none');
    document.getElementById("labelTexto").classList.remove('d-none');
    $user=document.getElementById('user').value;
    document.getElementById("userName").innerHTML = $user;
    $finished=false;

    cambiarNombre();
    console.log($user);
    if (!$nextBtn.classList.contains("d-none")) {
        $nextBtn.classList.add("d-none");
    }

    if (juegoNro.length == 0) {
        $nivel=Math.floor(Math.random() * $games.length);
        juegoNro.push($nivel);
        $nuevaImg = $games[$nivel].url;
        $nuevoTitulo = $games[$nivel].title;

    }else if (juegoNro.length < $games.length) {

        for($i=0; $i < $games.length; $i++) {

            $nivel=Math.floor(Math.random() * $games.length);

            if (!juegoNro.includes($nivel)) {
                $nuevaImg = $games[$nivel].url;
                $nuevoTitulo = $games[$nivel].title;
                juegoNro.push($nivel);

                break;
            }
        }
        
    } else if (juegoNro.length == $games.length) {
        /*img felitaciones */
        $finished = true;
        
    }


    $img = document.getElementById("cardImg");    
    $titulo= document.getElementById("titulo");
    $palabra = document.getElementById("palabra");

    
    $img.innerHTML = '<img src="' + $nuevaImg + '" class="card-img-top w-50" id="imgJuego">';
    $titulo.innerHTML = $nuevoTitulo;
    $palabra.value = $nuevoTitulo;

    if ($finished) {
        $img.innerHTML = '<img src="img/youwin.jpg" class="card-img-top" id="imgJuego">';
        document.getElementById("card-body").classList.add("d-none");
        document.getElementById("puntajeFinal").classList.remove("d-none");
        document.getElementById("puntajeFinal").innerHTML = "Tu puntaje final es de: "+ puntaje;
        /* agragar boton  */
    }
}
 /* VALIDAR PALABRA */
function validar(){
    $palabra = document.getElementById("palabra").value;
    $palabraIngresada= document.getElementById("texto").value;
    $valorBoton=document.getElementById("validar");
    $button = document.querySelector(".button");
    $sonido = document.getElementById("sonidos");
    $puntaje = document.getElementById("puntaje").value;

    if($palabra.toUpperCase() == $palabraIngresada.toUpperCase()){
        $valorBoton.value="EXCELENTE";
        $dNone= document.getElementById("nextBtn"); // SELECCIONA LA FLECHA
        $dNone.classList.remove('d-none'); //AGRAGA LA FLECHA
        $button.disabled = true; // DESHABILITA EL BOTON EN CASO QUE DIGA EXCELENTE
        $sonido.innerHTML = '<audio src="sounds/bien.ogg" autoplay=""></audio>'; 
        puntaje = puntaje+100;
        document.getElementById("puntaje").innerHTML = puntaje;
        document.getElementById("texto").classList.add('d-none');
        document.getElementById("labelTexto").classList.add('d-none');

    }else{
        
        $valorBoton.value="INTENTA DE NUEVO";
        $button.disabled = false;
        $sonido.innerHTML= '<audio src="sounds/error.ogg" autoplay=""></audio>';
        puntaje = puntaje-100;
        document.getElementById("puntaje").innerHTML = puntaje;
        document.getElementById("texto").classList.remove('d-none');
        document.getElementById("labelTexto").classList.remove('d-none');
        document.getElementById("btn-comenzar").classList.remove('d-none');
                
    }


}

/*CAMBIAR NOMBRE DE BOTON */
function cambiarNombre(){
    $button = document.querySelector(".button");

    $valorBoton=document.getElementById("validar");
    if( $valorBoton.value="INTENTA DE NUEVO"){
        $valorBoton.value="VALIDAR";
        $button.disabled = false;
        
    
    }else{
        
        $valorBoton.value="INTENTA DE NUEVO";
        $button.disabled = false;
    }
}


    // funcion que permite escibir solo texto
    //https://www.youtube.com/watch?v=AVcHrMzpa74

    function sololetras(elemento){
        key=elemento.keyCode || elemento.wich;

        teclado = String.fromCharCode(key).toLocaleLowerCase();

        letras ="abcdefghijklmnopqrstuvwxyz ";

        especiales ="8-37-38-45-164"; //son codigos ASCII

        tecladoEspecial = false;

        for(var i in especiales){
            if( key==especiales[i]){
                tecladoEspecial=true;
                break;
            }
        }
        // verifica si el caracter esta dentro del string

        if (letras.indexOf(teclado)==-1 && !teclado.tecladoEspecial) {
            return false;
        }
      
    }
/* VALIDAR USER ADMIN */

function admin(){
    
    $usuario="javier@correo.com";
    $contra="3584";
    

    $usua=document.getElementById('user').value;
    $pass=document.getElementById('pass').value;


    if ($usua==$usuario && $pass==$contra) {
        
        
        document.getElementById("dashboard").classList.remove("d-none");
        document.getElementById("login").classList.add("d-none");
        user=$usua;
        alert(user);

    }else{
        console.log("Los datos ingresados son incorrectos");
    }

}