<?php

require_once 'models/usuario.model.php';
require_once ('views/usuario.view.php');


class UsuarioController {

    //private $model;
    private $view;
    private $model;

    public function __construct(){
        
        $this->model = new UsuarioModel();


        $this->view = new UsuarioView();
    }

    public function mostrarFormularioDeLoggin() {
        
        $this->view->mostrarFormulario();
    }
    public function verificarInicioDeSesion() {
        $nombre_usuario = $_POST['usuario'];//recuperamos el usuario
        $contraseña_usuario = $_POST['contraseña'];

        $session =$this->verificar($nombre_usuario, $contraseña_usuario);

        if($session){
            header("Location: " . BASE_URL . 'paneldecontrol');
        }else{
            $this->view->mostrarFormulario();
        }
    }


    public function verificar($nombre, $contraseña){
        $admin = $this->model->getUsuario($nombre); //preg y trae si existe el usuario llamado admin y pregunta
        if($admin && ($admin->contraseña) && session_status() != PHP_SESSION_ACTIVE){
                session_start();
                $_SESSION['IS_LOGGED'] = true; 
            return true;
        }else{
            return false;
        }
    }
    public function mostrarPanelDeControl() {
        $this->view->mostrarPanelDeControl();
    }
    public function logout(){
         if (!empty($_SESSION)) { //si la sesion es vacia signfica que se cerro 
            $_SESSION = [];
            session_destroy();
            echo "La sesión se ha cerrado correctamente.";
            
        } else { //la variable sesion tiene algo activ adentro
            echo "La sesión sigue activa.";
        }
         //cierra la sesion
        // Limpia todas las variables de sesión
       
       

    }
}