<?php

require_once ('./libs/Smarty.class.php');

//
class UsuarioView{
    private $smarty;


    public function __construct(){
        // ininicializo smarty
        $this->smarty = new Smarty();

    }
    private function getSmarty(){
        //creo una funcion privada para asignarle variables a la vista y luego se dispare esa views
        return $this->smarty;

    }

    public function mostrarFormulario($usuarios){
        $this->getSmarty()->assign("usuario", $usuarios);
        $this->getSmarty()->display('mostrarFormulario.tpl');
    }

}