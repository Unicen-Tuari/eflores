<?php
  require_once('libs/Smarty.class.php');

class ViewContacto{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarContacto($discos){
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('contacto.tpl');
  }
}
?>
