<?
function validar () {

    $errores=[];
    if ($_POST("user") == "" || $_POST ("user") == NULL ) {
        $errores += ["error1"]=>"falta error"]; 
    }elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) {
        $errores += ["error2"=> "formato de email incorrecto"];
    } elseif ($_POST("password") == ""|| $_POST ("user") == NULL ))
    $errores += ["error3"]=>"Contraseña incorrecta"]; 
    else{
        $errores += ["error0"=>"OK"];
    }
    
    foreach($errores as $error => $descripcion){
       
        if ($descripcion=="OK") {
            session_start();
            $_SESSION = $_POST;
            header("Location:exito.php");
        }else{
            echo $descripcion;
        }
 
    }
}
function enviar (){ 

}
?>