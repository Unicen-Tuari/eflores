<?php
require_once('views/viewDiscografia.php');
require_once('models/modelDiscografia.php');

class ControllerDiscografia{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new ViewDiscografia();
    $this->modelo = new ModelDiscografia();
  }

  function mostrarDiscografia(){
    $discos = $this->modelo->GetDiscografia();
    $canciones = $this->modelo->GetCanciones();
    $this->vista->mostrarDiscografia($discos, $canciones);
  }

  function mostrarDisco($id_disco){
    $disco = $this->modelo->GetDisco($id_disco);
    $canciones = $this->modelo->GetCancionesDisco($id_disco);
    $discos = $this->modelo->GetDiscografia();
    $this->vista->mostrarDisco($disco, $canciones, $discos);
  }

}
?>
