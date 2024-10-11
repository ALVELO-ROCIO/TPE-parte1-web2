<?php

require_once 'models/chocolate.model.php';
require_once 'views/chocolates.view.php';


class ChocolatesController {

    private $model;
    private $view;

    public function __construct(){
        $this->model = new ChocoModel();
        $this->view = new ChocoView();
    }

    public function mostrarChocolates(){
        //Pedir al modelo todos los chocolaes
        $chocolates =  $this->model->getChocolates(); //guardo en la variable lo que me trae el modelo de la bd

        //Pasarle a la vista los chocolas
        $this->view->mostrarChocolates($chocolates);
        //var_dump($chocolates);
    }

    public function mostrarCombosPorChocolate($chocolate){
        $combos =  $this->model->getCombosPorChocolate($chocolate); //guardo en la variable lo que me trae el modelo de la bd de todos los combos  que pertenece a un chocolate
        
        //Pasarle a la vista los chocolas
        $this->view->mostrarCombosPorChocolate($combos);
        //var_dump($chocolates);
    }
}    
