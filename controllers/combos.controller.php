<?

require_once 'models/combos.model.php';
require_once 'views/combos.views.php';


class CombosController {

    private $model;
    private $view;

    public function __construct() {

        $this->model = new CombosModel();

        $this->view = new CombosView();
    }
    
    
    public function mostrarTodos(){
        //1. Pedirselo a la base de  datps ----> Modelo --> CombosModel.php
        $Combos = $this->CombosModel->traerTodos(); //arreglo de Combos
        //2. Una vez q lo tengo, enviarselos a la vista --> CombosView.php
        $this->CombosViews->mostrarTodos($Combos);
    }


    //public function mostrarPorId(){}

   // public function VerDetalles($Combos){
//$detalles =  $this->CombosModel->getVerDetalles($Combos);
 //$this->CombosViews->VerDetalles($detalles);
//}
}