<?php

//require_once 'models/usuario.model.php';
require_once 'views/usuario.view.php';


class UsuarioController {

    //private $model;
    private $view;

    public function __construct(){
        
        //$this->model = new UsuarioModel(); 
        $this->view = new UsuarioView();
    }

    public function mostrarFormularioLogin(){
        $this->view->mostrarFormulario();
    }
}