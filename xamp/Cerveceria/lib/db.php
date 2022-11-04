<?php

include_once('confi.php');

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;


                public function_construct {

                $this -> host   = HOST;
                $this -> db   =  DB;
                $this -> host   = USER;
                $this -> password   = PASSWORD;
                $this -> charset   = 'utf8mb4';

                }

                function connect(){
                    try{
                        $connection = "mysql:host=".$this->host."dbname"  . $this->db . "charset=" . $this->charset;
                        $optionas = [
                        PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES     =>false,
                        ];
                        $pdo = new PDO($connection,$this->user,$this->password);
                        return $pdo;
                    }catch(PDOException $e){
                        print_r('Error connection: ' . $e->getMessage());
                    }
    }


?>