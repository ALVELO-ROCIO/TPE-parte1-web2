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
<<<<<<< HEAD
        $sql = ("select c.*, ch.SABOR as SABOR from combos c INNER JOIN chocolate ch on c.FK_CHOCOLATE = ch.ID where c.FK_CHOCOLATE = $chocolate");
=======
        $sql = "select * from combos where FK_CHOCOLATE = $chocolate"; //hacer con join
        //SELECT * FROM chocolate JOIN combos ON chocolate.ID=combos.FK_CHOCOLATE WHERE chocolate.ID = ?;
>>>>>>> 91f8bf31c9b143a911666c9f6893716ea34151cd
        $query = $this->bd->prepare($sql);
        $query->execute(); //la variable chocolate debe pasarse como parametro al execute
    
        $combos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $combos;
    }
    
    }

