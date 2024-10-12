<? 
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
        $sql = "select * from combos";
        $query = $this->bd->prepare($sql);
        $query->execute();
    
        $combos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $combos;
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
}