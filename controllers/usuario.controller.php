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
        
        $nombre_usuario = $_POST["usuario"];//recuperamos el usuario
        $contraseña_usuario = $_POST["contraseña"];
        //1- verificar si en la base de datos existe un usuario con ese nombre
        //2- si existe el usuario, verificar si tiene la misma contraseña
        //3- si la contrasea coincide inicio la sesion
        if (session_status() != PHP_SESSION_ACTIVE){ //este codigo se usa si es que no hay una sesion activa abre una 
            session_start();
            //una vez que la sesion este iniciada se debe guardar datos del usuario que creemos que son necsarios
            //en este caso lo unico que vamos a guardar es si hay un usuario logueado
            $_SESSION['IS_LOGGED'] = true; 
            header("Location: " . BASE_URL . 'paneldecontrol'); //nos redirige a esa ruta
    }
        //4- si la contraseña es invalida redirigime al home
    }
    public function mostrarPanelDeControl() {
        $this->view->mostrarPanelDeControl();
    }
    public function logout(){
        if (session_status() != PHP_SESSION_ACTIVE){ //este codigo se usa si es que no hay una sesion activa abre una 
            session_start();
        }
        session_destroy(); //cierra la sesion
        // Limpia todas las variables de sesión
        $_SESSION = [];
        if (empty($_SESSION)) { //si la sesion es vacia signfica que se cerro
            echo "La sesión se ha cerrado correctamente.";
            
        } else { //la variable sesion tiene algo activ adentro
            echo "La sesión sigue activa.";
        }

    }
}