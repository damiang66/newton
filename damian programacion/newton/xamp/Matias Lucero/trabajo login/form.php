<?

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

?>