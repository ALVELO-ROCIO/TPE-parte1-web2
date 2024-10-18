<?php
require_once('./config.php');

class AdminModel {

    private $bd;
//es lo que conecta y consulta a la BD
    public function __construct(){ 
         try {
            $this->bd = new PDO("mysql:host=" . HOST . ";dbname=" . BD . ";charset=utf8", USER, PASS);
        } catch (PDOException $e) {
            die("Error de coneccion");

        }
 }
 
 public function getAdministrador($administrador){
    $sql = "SELECT * FROM usuarios WHERE nombre = ? AND contraseña = ?";
    $query = $this->bd->prepare($sql);
    $query->bindParam("ss", $nombre, $contraseña);//bindparam enlazo datos con las posiciones
    $query->execute();

    $administrador = $query->fetchAll(PDO::FETCH_OBJ);

    if ($administrador->num_rows > 0) {
        // El usuario y la contraseña coinciden, entonces es administrador
        echo "Bienvenido, $nombre";

        header("Location: mostrarFuncionesAdmin.php");
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
    }
}
public function mostrarFuncionesAdmin($administrador){
    $sql = ('SELECT * FROM usuario where ID=1')
    
      if ($_SESSION['rol'] == 'admin'){

         return ("mostrarFuncionesAdmin.php")
    }
       else {
      echo ("Acceso denegado. No tienes los permisos necesarios.");
    }
}
}