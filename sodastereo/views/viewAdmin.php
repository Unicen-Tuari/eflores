<?php
  require_once('libs/Smarty.class.php');

class ViewAdmin{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarListas($discos, $canciones){
    $this->smarty->assign("admin", 'ADMIN');
    $this->smarty->assign("logout", 'LOGOUT');
    $this->smarty->assign("active", 'admin');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("canciones", $canciones);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('admin.tpl');
  }
}
?>
