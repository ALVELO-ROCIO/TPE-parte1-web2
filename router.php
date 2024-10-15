<?php
    require_once 'controllers/chocolates.controller.php';
<<<<<<< HEAD
    require_once 'controllers/usuario.controller.php';
=======
    require_once 'controllers/combos.controller.php';
>>>>>>> 91f8bf31c9b143a911666c9f6893716ea34151cd

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (empty($_GET['action'])) {
    $_GET['action']="home";  // 
}

// parsea la accion 
$action = $_GET['action'];
$params = explode('/', $action); // genera un arreglo
    
switch ($params[0]) {
    case 'home':
        $controller = new ChocolatesController();
        $controller->mostrarChocolates();
        break;
    case 'chocolates':
        $controller = new ChocolatesController();
        $controller->mostrarChocolates();
        break;
    case 'combosporchocolate'://HAY QUE MODIFICAR ESTE NOMBRE
        $controller = new ChocolatesController();
        $controller->mostrarCombosPorChocolate($params[1]);
        break;
<<<<<<< HEAD
    case 'login':
        $controller = new UsuarioController();
        $controller->mostrarFormularioLogin();
        break;
=======
    case 'combos':
        if(isset($params[1])){
            $controller = new CombosController();
            $controller->mostrarCombo($params[1]);
        }
        else {
            $controller = new CombosController();
            $controller->mostrarCombos();
        }
    break;

    
    //case 'ver detalles':
        //$controller = new ChocolatesController();
        //$controller->getVerDetalles($params[1]);
        //break;
>>>>>>> 91f8bf31c9b143a911666c9f6893716ea34151cd
    default:
        echo "404 not found";
        break;
}


