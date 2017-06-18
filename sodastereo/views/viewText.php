<?php
  require_once('libs/Smarty.class.php');

class ViewText{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarTextoHome($texto, $discos){
    $login = 'LOGIN';
    $logout = '';
    session_start();
    if (isset($_SESSION["logueado"])){
      $login = 'ADMIN';
      $logout = 'LOGOUT';
    }
    $this->smarty->assign("admin", $login);
    $this->smarty->assign("logout", $logout);
    $this->smarty->assign("active", 'home');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("texto", $texto);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('home.tpl');
  }

  function mostrarTextoBiografia($texto, $discos){
    $login = 'LOGIN';
    $logout = '';
    session_start();
    if (isset($_SESSION["logueado"])){
      $login = 'ADMIN';
      $logout = 'LOGOUT';
    }
    $this->smarty->assign("admin", $login);
    $this->smarty->assign("logout", $logout);
    $this->smarty->assign("active", 'biografia');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("texto", $texto);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('biografia.tpl');
  }
}
?>
