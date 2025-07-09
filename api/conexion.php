<?php

    $conexion = mysqli_connect("localhost", "root", "", "f1wf");

    class Conexion2 extends PDO {
        private $hostBd = 'localhost';
        private $nombreBD = 'f1wf';
        private $usuario = 'root';
        private $password = '';
    
        public function __construct(){
            try {
                parent::__construct("mysql:host=".$this->hostBd.";dbname=".$this->nombreBD.";charset=utf8", $this->usuario, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                exit;
            }
        }    
    }
?>