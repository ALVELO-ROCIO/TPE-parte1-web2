<?php

require_once 'models/usuario.model.php';
require_once ('views/usuario.view.php');
require_once ('models/chocolate.model.php');
require_once ('views/chocolates.view.php');





class UsuarioController {

    //private $model;
    private $view;
    private $model;
    private $chocolatemodel;
    private $chocolateview;

    public function __construct(){
        
        $this->model = new UsuarioModel();


        $this->view = new UsuarioView();

        $this->chocolatemodel = new ChocoModel();

        $this->chocolateview = new ChocoView();
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

        $this->view->mostrarPanelDeControl($chocolates);
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
  public function mostrarformeditarChocolate(){
    
        // Obtener el chocolate por su ID
        $chocolate = $this->chocolatemodel->GetByIdChocolate();
    
            // Mostrar el formulario para editar el chocolate si se encuentra
         $this->chocolateview->mostrarformeditarChocolate($chocolate);
        
    }
   public function editarChocolate(){
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        // Capturamos los datos de la solicitud PUT
        parse_str(file_get_contents("php://input"), $inputData);

        // Extraemos los datos necesarios de la entrada
        $sabor = isset($inputData['sabor']) ? $inputData['sabor'] : null;
        $relleno = isset($inputData['relleno']) ? $inputData['relleno'] : null;
        $empaque = isset($inputData['empaque']) ? $inputData['empaque'] : null;

        // Validamos que todos los datos necesarios estén presentes
        if ($sabor !== null && $relleno !== null && $empaque !== null) {
            // Llamamos al modelo para guardar los datos editados
            $resultado = $this->chocolatemodel->guardarChocolateEditado($sabor, $relleno, $empaque);
           
            if ($resultado) {
                // Redirigimos al usuario a la página de control
                header("Location: " . BASE_URL . 'paneldecontrol');
                exit; // Aseguramos que no se ejecute código adicional
            } else {
                // Manejo de error si la operación de guardado falla
                echo "Error al guardar los cambios. Intente de nuevo.";
            }
        //$this->chocolatemodel->guardarChocolateEditado($sabor, $relleno, $empaque);
        //header("Location: " . BASE_URL . 'paneldecontrol');
        //$this->view->mostrarChocolateEditadoGuardado($chocolate)
        }
   }
   }
}