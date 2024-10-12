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

    //Función que pide a la DB todos los chocolates
    public function getChocolates(){
        $sql = "select * from chocolate"; 
        $query = $this->bd->prepare($sql);
        $query->execute();
    
        $chocolates = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $chocolates;
    }

    public function getCombosPorChocolate($chocolate){
        $sql = "select * from combos where FK_CHOCOLATE = $chocolate"; //hacer con join
        //SELECT * FROM chocolate JOIN combos ON chocolate.ID=combos.FK_CHOCOLATE WHERE chocolate.ID = ?;
        $query = $this->bd->prepare($sql);
        $query->execute(); //la variable chocolate debe pasarse como parametro al execute
    
        $combos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $combos;
    }
    //public function getVerDetalles($chocolate){
        //$sql = "select * from combos where FK_CHOCOLATE = $chocolate";
        //$query = $this->bd->prepare($sql);
        //$query->execute();
    
        //$detalles = $query->fetchAll(PDO::FETCH_OBJ);
    
        //return $detalles;
    }

