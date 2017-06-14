<?php
require_once('views/viewText.php');
require_once('models/modelText.php');
require_once('models/modelDiscografia.php');

class ControllerText{
  private $vista;
  private $modelo;
  private $modelo_c;

  function __construct(){
    $this->vista = new ViewText();
    $this->modelo = new ModelText();
    $this->modelo_c = new ModelDiscografia();
  }

  function mostrarTexto($ubicacion){
    $discos = $this->modelo_c->GetDiscografia();
    $texto = $this->modelo->GetTexto($ubicacion);
    if ($ubicacion == 'home'){
      $this->vista->mostrarTextoHome($texto, $discos);
    }else{
      $this->vista->mostrarTextoBiografia($texto, $discos);
    }
  }
}
?>
