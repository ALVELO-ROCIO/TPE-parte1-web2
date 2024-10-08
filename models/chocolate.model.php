<?php
require_once('./config.php');

class ChocoModel {

    private $bd;

    public function __construct(){
         try {
            $this->bd = new PDO("mysql:host=" . HOST . ";dbname=" . BD . ";charset=utf8", USER, PASS);
        } catch (PDOException $e) {
            die("Error de coneccion");
        }

    }

    //Función que pide a la DB todas las tareas
    public function getChocolates(){
        $sql = "select * from chocolates";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $chocolates = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $chocolates;
    }
} 