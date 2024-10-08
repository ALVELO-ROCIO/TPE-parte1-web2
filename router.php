<?php
    require_once 'controllers/chocolates.controller.php';

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
    default:
        echo "404 not found";
        break;
}