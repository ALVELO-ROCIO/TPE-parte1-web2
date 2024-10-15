<?php 
require_once('./config.php');

class CombosModel {
    private $bd;
 

    public function __construct(){ //es lo que conecta y consulta a la BD
    
        try {
            $this->bd = new PDO("mysql:host=" . HOST . ";dbname=" . BD . ";charset=utf8", USER, PASS);
        } catch (PDOException $e) {
            die("Error de coneccion");

        }
    }

    public function getCombos(){
        $sql = "select * from combos";//seleccioname todo de la tabla combos asterisco todo.
        $query = $this->bd->prepare($sql);
        $query->execute();
        $combos = $query->fetchAll(PDO::FETCH_OBJ);//muchos combos trae todos
        return $combos;
    }

    public function getById($id){
        $sql = "SELECT * FROM combos JOIN chocolate ON combos.FK_CHOCOLATE=chocolate.ID where combos.ID = ?";//seleccioname todo de la tabla combos asterisco todo.
        $query = $this->bd->prepare($sql);
        $query->execute([$id]);
        $filadelatabla = $query->fetch(PDO::FETCH_OBJ);//muchos combos trae todos
        return $filadelatabla;
    }
    public function traerTodos(){
        //devuelve todos los productos 
    
        //public function getVerDetalles($combos){
        //$sql = "select * from combos where FK_CHOCOLATE = $combos";
        //$query = $this->bd->prepare($sql);
        //$query->execute();
    //$detalles = $query->fetchAll(PDO::FETCH_OBJ);
        //return $detalles;
    //}
    
}

public function prueba() {
    $query=$this->bd->prepare('select * from combos '); //donde vuelvo a definir bd?
    $query->execute([3]);
    $combos =$query->fetchAll(PDO::FETCH_OBJ);//Selecciono algunos objetos
    //echo '<p>'.$combo.'</p>';
    return var_dump($combos);
}
}