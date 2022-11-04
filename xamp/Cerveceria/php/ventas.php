<?php
include_once("conexion.php");
if ($_POST) {
    $nombre = $_POST["usuario"];
    $apellido = $_POST["apellido"];
    $domicilio = $_POST["dni"];
    $telefono = $_POST["mesa"];
    validar();
  }

function validar(){
    
    $errores=[];
    if ($_POST["usuario"] == "" || $_POST["usuario"] == null) {
        $errores+= ["error1"=> "Falta el Nombre"];
    }
    if ($_POST["apellido"] == "" || $_POST["apellido"] == null) {
        $errores+= ["error2"=> "Falta el Apellido"];
    }
    if ($_POST["dni"] == "" || $_POST["dni"] == null) {
        $errores+= ["error4"=> "Falta el N° de DNI"];
    }
    if ($_POST["mesa"] == "" || $_POST["mesa"] == null) {
        $errores+= ["error5"=> "Falta el N° de Mesa"];
    }
    
    if($errores == null ) {
        session_start();
        $_SESSION = $_POST;
        header("Location:exito.php");exit;
    
    }else{
    foreach($errores as $error => $descripcion){
    
            echo $descripcion . "<br>";
        }
    }  
}
$conectar = conn();
$sql= "INSERT INTO `registro_socios` (`usuario`, `apellido`, `dni`, `mesa`)
 VALUES ('$nombre', '$apellido', '$dni', '$mesa')";
$resul = mysqli_query($conectar , $sql)or trigger_error ("Query Failed! SQL-Error".mysqli_error($conectar), E_USER_ERROR);
echo "$sql";

// $sql="INSERT INTO 'registro_ventas'
// VALUE (null,'".$_POST["usuario"]."','".$_POST["apellido"]."', '".$_POST["dni"]."','".$_POST["mesa"]."')";
// $resultado= mysqli_query($conn,$sql) or die('Error en mi query ');
// mysqli_close($conn);



?>

