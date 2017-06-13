<?php
require_once('views/viewLogin.php');
require_once('models/modelLogin.php');

class ControllerLogin{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new ViewLogin();
    $this->modelo = new ModelLogin();
  }

  function mostrarLogin(){
    $this->vista->mostrarLogin();
  }

  function iniciarSesion(){
    if (isset($_POST["usuario"]) && strlen(trim($_POST["usuario"])) > 0){
      $id_usuario = $_POST["usuario"];
    }
    if (isset($_POST["password"]) && strlen(trim($_POST["password"])) > 0){
      $password = $_POST["password"];
    }
    $usuario = $this->modelo->GetUsuario($id_usuario);
    if (password_verify($password, $usuario["password"])){
      session_start();
      $_SESSION["logueado"] = true;
      header('Location: http://localhost/sodastereo/');
    }else{
      echo "Usuasio/Contraseña incorrecto/a";
    }
  }
}
?>
