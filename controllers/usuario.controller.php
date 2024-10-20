<?php

require_once 'models/usuario.model.php';
require_once ('views/usuario.view.php');
require_once ('models/chocolate.model.php');
require_once ('views/chocolates.view.php');
require_once ('models/combos.model.php');
require_once ('views/combos.views.php');





class UsuarioController {

    //private $model;
    private $view;
    private $model;
    private $chocolatemodel;
    private $chocolateview;
    private $combosview;
    private $combosmodel;

    public function __construct(){
        
        $this->model = new UsuarioModel();


        $this->view = new UsuarioView();

        $this->chocolatemodel = new ChocoModel();

        $this->chocolateview = new ChocoView();


        $this->combosmodel = new CombosModel();

        $this->combosview = new CombosView();
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
                $_SESSION['ID-USER'] = $admin->id_usuario;
                $_SESSION['USERNAME'] = $admin->nombre; 
            return true;
        }else{
            return false;
        }
    }
    public function mostrarPanelDeControl() {

        $chocolates=$this->chocolatemodel->getChocolates();
        $combos=$this->combosmodel-> getCombos();
        $this->view->mostrarPanelDeControl($chocolates,$combos);
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
    
    public function mostrarformnuevochocolate(){

        $this->chocolateview->mostrarformnuevochocolate();

    }

    public function agregarchocolate(){
        $sabor=$_POST['sabor'];
        $relleno=$_POST['relleno'];
        $empaque=$_POST['empaque'];

        $this->chocolatemodel->guardarChocolate($sabor, $relleno, $empaque);
        header("Location: " . BASE_URL . 'paneldecontrol');

    }
    public function mostrarformnuevocombo(){
      $chocolates=$this->chocolatemodel->getChocolates();
        $this->combosview->mostrarformnuevocombo($chocolates);
    }
    public function agregarcombo(){
        $nombre=$_POST['nombre'];
        $fk_chocolate=$_POST['fk_chocolate'];
         
         

        $this->combosmodel->guardarCombo($nombre, $fk_chocolate);
        header("Location: " . BASE_URL . 'paneldecontrol');

    }
    public function mostrarformeditarCombo($id){
       $chocolates=$this->chocolatemodel->getChocolates();
       $combo=$this->combosmodel->getComboById($id);
       
       $this->combosview->mostrarformeditarCombo($combo,$chocolates);
    }
    public function guardarComboEditado () {
        $id=$_POST['id']; //recupero el id desde el formulario una vez que seleccono el cmbo que quiero editar
        var_dump($id);
        $nombre=$_POST['nombre'];
        $fk_chocolate=$_POST['fk_chocolate'];
        var_dump("Vaaaa");
        $this->combosmodel->guardarComboEditado($id,$nombre, $fk_chocolate);
        header("Location: " . BASE_URL . 'paneldecontrol');
        die();
           
    }
    public function eliminarCombo($id){

       $this->combosmodel->eliminarCombo($id);
       header("Location: " . BASE_URL . 'paneldecontrol');

    }


}