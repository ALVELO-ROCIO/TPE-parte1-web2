<?php
    require_once 'controllers/chocolates.controller.php';
    require_once 'controllers/combos.controller.php';
    require_once 'controllers/usuario.controller.php';

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
    case 'loggin': //a chequear 
        $controller=new UsuarioController();
        $controller->mostrarFormularioDeLoggin();
        break;
    case 'Iniciarsesion':
        $controller=new UsuarioController();
        $controller->verificarInicioDeSesion();
        break;
    case 'paneldecontrol':
            $controller=new UsuarioController();
            $controller->mostrarPanelDeControl();
            break;
    case 'logout':
        $controller=new UsuarioController();
        $controller->logout();
        break;
    case 'formnuevochocolate':
        $controller=new UsuarioController();
        $controller->mostrarformnuevochocolate();
        break;
        case 'agregarchocolate':
            $controller=new UsuarioController();
            $controller->agregarchocolate();
            break;
        case 'formeditarchocolate':
            $controller=new UsuarioController();
            $controller->editarchocolate();
            break;
    default:
        echo "404 not found";
        break;
}



