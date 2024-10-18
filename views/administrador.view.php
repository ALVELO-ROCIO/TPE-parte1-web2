<?php

require_once ('./libs/Smarty.class.php');

//
class AdminView{
    private $smarty;


    public function __construct(){
        // ininicializo smarty
        $this->smarty = new Smarty();

    }

    private function getSmarty(){
        //creo una funcion privada para asignarle variables a la vista y luego se dispare esa views
        return $this->smarty;

    }

    function mostrarFuncionesAdmin($administrador){
        $this->getSmarty()->assign("usuario", $administrador);
        $this->getSmarty()->display('mostrarFuncionesAdmin.tpl');
    }
}