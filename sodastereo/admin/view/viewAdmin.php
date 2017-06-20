<?php
  require_once('libs/Smarty.class.php');

class ViewAdmin{
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarInicioAdmin($discos){
    $this->smarty->assign("admin", 'ADMIN');
    $this->smarty->assign("logout", 'LOGOUT');
    $this->smarty->assign("active", 'admin');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('admin.tpl');
  }

// ----- DISCOS -----
  function mostrarListaDiscos($discos){
    $this->smarty->assign("admin", 'ADMIN');
    $this->smarty->assign("logout", 'LOGOUT');
    $this->smarty->assign("active", 'admin');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('lista_discos.tpl');
  }

  function nuevoDisco(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('nuevo_disco.tpl');
  }

  function editarDisco($disco){
    $this->smarty->assign("disco", $disco);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('editar_disco.tpl');
  }

// ----- CANCIONES -----
  function mostrarListaCanciones($discos, $canciones){
    $this->smarty->assign("admin", 'ADMIN');
    $this->smarty->assign("logout", 'LOGOUT');
    $this->smarty->assign("active", 'admin');
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("canciones", $canciones);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('lista_canciones.tpl');
  }

  function nuevaCancion($discos){
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('nueva_cancion.tpl');
  }

  function editarCancion($discos, $cancion){
    $this->smarty->assign("discos", $discos);
    $this->smarty->assign("cancion", $cancion);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('editar_cancion.tpl');
  }
}
?>
