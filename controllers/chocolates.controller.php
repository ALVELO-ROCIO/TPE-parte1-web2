<?php

require_once 'models/chocolate.model.php';
//require_once 'views/chocolate.view.php';


class ChocolatesController {

    private $model;
    private $view;

    public function __construct(){
        $this->model = new ChocoModel();
        //$this->view = new ChocoView();
    }

    public function mostrarChocolates(){
        //Pedir al modelo todos los chocolaes
        $chocolates =  $this->model->getChocolates();

        //Pasarle a la vista las tareas
        //$this->view->mostrarTareas($tareas);
        var_dump($chocolates);
    }
}    