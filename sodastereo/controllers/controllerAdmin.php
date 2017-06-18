<?php
require_once('views/viewAdmin.php');
require_once('models/modelDiscografia.php');

class ControllerAdmin{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new ViewAdmin();
    $this->modelo = new ModelDiscografia();
  }

  function mostrarListas(){
    $discos = $this->modelo->GetDiscografia();
    $canciones = $this->modelo->GetCanciones();
    $this->vista->mostrarListas($discos, $canciones);
  }
}
?>
