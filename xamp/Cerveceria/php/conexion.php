<?php
// function conn(){
//     $hostname= "localhost"; 
//     $usuariodb = "root";
//     $passworddb = "";
//     $dbname= "registro_ventas";

//     //Generando la conexion con el servidor

//     $conectar = mysqli_connect($hostname, $usuariodb,$passworddb,$dbname);
//     return $conectar;

// }
    class conn{
       private $hostname= "localhost"; 
       private $database="cerveceria";
        private $username = "root";
         private $password = "";
        private $charsert= "utf8";
    
        function conectar(){
            try{$conexion = "mysqli:host=". $this->hostname. "; dbname=" . $this->database . ";charset =" . $this->charsert;
                    $options = [
                        PDO::ATTR_ERRMODE => PDO:: ATTR_ERRMODE,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ];
                    
                    $pdo = new PDO($conexion,$this->username,$this->password,$options);
                    return $pdo;
                }
                    catch (PDOException $e){
                    echo 'Error de conexion:' .  $e -> getMessage();
                    exit;
                     }
        }
    }
?>