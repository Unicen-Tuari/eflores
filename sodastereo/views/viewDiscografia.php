<?php
  require_once('libs/Smarty.class.php');

class ViewDiscografia{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarDiscografia($discos, $canciones){
    $login = 'LOGIN';
    $logout = '';
    session_start();
    if (isset($_SESSION["logueado"])){
      $login = 'ADMIN';
      $logout = 'LOGOUT';
    }
    $this->smarty->assign("admin", $login);
    $this->smarty->assign("logout", $logout);
    $this->smarty->assign("active", 'discografia');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("canciones", $canciones);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('discografia.tpl');
  }

  function mostrarDisco($disco, $canciones, $discos){
    $login = 'LOGIN';
    $logout = '';
    session_start();
    if (isset($_SESSION["logueado"])){
      $login = 'ADMIN';
      $logout = 'LOGOUT';
    }
    $this->smarty->assign("admin", $login);
    $this->smarty->assign("logout", $logout);
    $this->smarty->assign("active", 'discografia');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("disco", $disco);
    $this->smarty->assign("canciones", $canciones);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('disco.tpl');
  }
}
?>
