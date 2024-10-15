<?php
require_once('./config.php');

class ChocoModel {

    private $bd;
//es lo que conecta y consulta a la BD
    public function __construct(){ 
         try {
            $this->bd = new PDO("mysql:host=" . HOST . ";dbname=" . BD . ";charset=utf8", USER, PASS);
        } catch (PDOException $e) {
            die("Error de coneccion");

        }
 }

    //Función que pide a la DB todos los usuarios
    public function getUsuarios(){
        $sql = "select * from usuario"; 
        $query = $this->bd->prepare($sql);
        $query->execute();
    
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $usuarios;
    }

}