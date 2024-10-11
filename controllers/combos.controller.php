<? 

require_once 'models/combos.model.php';
require_once 'views/combos.views.php';


class CombosController {

    private $modelCombos;
    private $viewCombos;

    public function __construct() {
        $this->modelCombos = new CombosModel();
        $this->viewCombos = new CombosView();
    }
    
    
    public function mostrarTodos(){
        //1. Pedirselo a la base de  datps ----> Modelo --> CombosModel.php
        $Combos = $this->modelCombos->traerTodos(); //arreglo de Combos
        //2. Una vez q lo tengo, enviarselos a la vista --> CombosView.php
        $this->viewCombos->mostrarTodos($Combos);
    }


    public function mostrarPorId(){
        
    }
}