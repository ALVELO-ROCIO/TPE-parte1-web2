<?php
require_once ('./libs/Smarty.class.php');//libreria

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



    public function mostrarTodos($combos){
        $this->smarty->assign('combos',$combos);
        $this->smarty->display('mostrarCombos.tpl');

    }
    public function mostrarCombo ($combo) {
        $this->smarty->assign('combo',$combo);
        $this->smarty->display('mostrarCombo.tpl'); 
    }

    //function VerDetalles($combos){

        //$this->getSmarty()->assign("combos", $combos);
        //$this->getSmarty()->display('VerDetalles.tpl');
    //} 
}