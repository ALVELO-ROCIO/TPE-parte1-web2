<?php

require_once 'models/administrador.model.php';
require_once 'views/administrador.view.php';


class AdministradorController {

    private $model;
    private $view;

    public function __construct(){
        
        $this->model = new AdminModel(); //arreglo de chocolates
        
        $this->view = new AdminView();
    }

    public function mostrarFuncionesAdmin(){
        
        $administrador =  $this->model->getAdministrador(); //guardo en la variable lo que me trae el modelo de la bd

        
        $this->view->mostrarFuncionesAdmin($administrador);
    }


}