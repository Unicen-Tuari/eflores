<?php
require_once('views/viewContacto.php');
require_once('models/modelContacto.php');
require_once('models/modelDiscografia.php');

class ControllerContacto{
  private $vista;
  private $modelo;
  private $modelo_c;

  function __construct(){
    $this->vista = new ViewContacto();
    $this->modelo = new ModelContacto();
    $this->modelo_c = new ModelDiscografia();
  }

  function mostrarContacto(){
    $discos = $this->modelo_c->GetDiscografia();
    $this->vista->mostrarContacto($discos);
  }

  function insertarMensaje(){
    if ((isset($_POST["nombre"]) && (strlen(trim($_POST['nombre'])) > 0)) && (isset($_POST["email"]) && strlen(trim($_POST["email"])) > 0)){
      $nombre = $_POST["nombre"];
      $email = $_POST["email"];
      $mensaje = $_POST["mensaje"];
      $this->modelo->insertarMensaje($nombre, $email, $mensaje);
    }
    $this->vista->mostrarContacto();
  }
}
?>
