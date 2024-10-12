<? 
require_once ('./libs/Smarty.class.php');

class CombosView {
    private $smarty;


    public function __construct(){
        // ininicializo smarty
        $this->smarty = new Smarty();

    }

    private function getSmarty(){
        //creo una funcion privada para asignarle variables a la vista y luego se dispare esa views
        return $this->smarty;

    }



    public function mostrarTodos(){}

    //function VerDetalles($combos){

        //$this->getSmarty()->assign("combos", $combos);
        //$this->getSmarty()->display('VerDetalles.tpl');
    //} 
}