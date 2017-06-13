<?php
require_once('views/viewText.php');
require_once('models/modelText.php');

class ControllerText{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new ViewText();
    $this->modelo = new ModelText();
  }

  function mostrarTexto($ubicacion){
    $discos = $this->modelo->GetDiscografia();
    $texto = $this->modelo->GetTexto($ubicacion);
    if ($ubicacion == 'home'){
      $this->vista->mostrarTextoHome($texto, $discos);
    }else{
      $this->vista->mostrarTextoBiografia($texto, $discos);
    }
  }
}
?>
