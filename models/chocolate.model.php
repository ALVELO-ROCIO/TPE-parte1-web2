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
        $sql = "select * from combos where FK_CHOCOLATE = $chocolate"; //hacer con join;
         
        $sql = ("select c.*, ch.SABOR as SABOR from combos c INNER JOIN chocolate ch on c.FK_CHOCOLATE = ch.ID where c.FK_CHOCOLATE = $chocolate");

       
        //SELECT * FROM chocolate JOIN combos ON chocolate.ID=combos.FK_CHOCOLATE WHERE chocolate.ID = ?;
        $query = $this->bd->prepare($sql);
        $query->execute(); //la variable chocolate debe pasarse como parametro al execute
    
        $combos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $combos;
    }
     public function guardarChocolate($sabor, $relleno, $empaque){
        $sql = "INSERT INTO chocolate (SABOR, RELLENO, EMPAQUE) VALUES (?, ?, ?)"; 
        $query = $this->bd->prepare($sql);
        $query->execute([$sabor, $relleno, $empaque]);
     }

     //Función para traer un chocolate por id

public function GetByIdChocolate() { 
   $sql = "SELECT * FROM chocolate WHERE id = :id"; // Quizás quieras traer todos los datos del chocolate

   $query = $this->bd->prepare($sql);
    
    // Vinculamos el parámetro
   $query->bindParam(':id', $id, PDO::PARAM_INT);

    // Ejecutamos la consulta
   $query->execute();

    //Obtenemos el resultado
    $chocolate = $query->fetch(PDO::FETCH_ASSOC);

    return $chocolate;
}


public function guardarChocolateEditado($sabor, $relleno, $empaque){
        $sql = "UPDATE chocolate SET(SABOR, RELLENO, EMPAQUE) VALUES (?, ?, ?) WHERE id_chocolate"; 
        $query = $this->bd->prepare($sql);
        $query->execute([$sabor, $relleno, $empaque]);
    }

public function eliminarChocolatePorId($id) {
    $sql = "DELETE FROM chocolate WHERE id = ?";
    $query = $this->db->prepare($sql);
    return $query->execute([$id]); 
}
}