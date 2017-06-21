<?php
require_once('../config/config_app.php');
require_once('controller/controllerAdmin.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  $arrayReturn[ConfigApp::$RESOURCE] = $arr_data[0];
  $arrayReturn[ConfigApp::$ACTION] = isset($arr_data[1]) ? $arr_data[1] : null;
  $arrayReturn[ConfigApp::$PARAMETERS] = isset($arr_data[2]) ? $arr_data[2] : null;
  return $arrayReturn;
}

session_start();
if (isset($_SESSION["logueado"])){
  if ($_GET[ConfigApp::$ACTION] == ''){
    $controller = new ControllerAdmin();
    $controller->mostrarInicioAdmin();
  }else{
    $datos = parseUrl($_GET[ConfigApp::$ACTION]);
    if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_DISC){
      $controller = new ControllerAdmin();
      switch ($datos[ConfigApp::$ACTION]){
        case ConfigApp::$ACTION_NEW:
          $controller->nuevoDisco();
          break;
        case ConfigApp::$ACTION_ADD:
          $controller->agregarDisco();
          break;
        case ConfigApp::$ACTION_DELETE:
          $controller->borrarDisco($datos[ConfigApp::$PARAMETERS]);
          break;
        case ConfigApp::$ACTION_EDIT:
          $controller->editarDisco($datos[ConfigApp::$PARAMETERS]);
          break;
        case ConfigApp::$ACTION_MODIF:
          $controller->modificarDisco($datos[ConfigApp::$PARAMETERS]);
          break;
        default:
          $controller->mostrarListaDiscos();
          break;
      }
    }else{
      if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_TEM){
        $controller = new ControllerAdmin();
        switch ($datos[ConfigApp::$ACTION]){
          case ConfigApp::$ACTION_NEW:
            $controller->nuevaCancion();
            break;
          case ConfigApp::$ACTION_ADD:
            $controller->agregarCancion();
            break;
          case ConfigApp::$ACTION_DELETE:
            $controller->borrarCancion($datos[ConfigApp::$PARAMETERS]);
            break;
          case ConfigApp::$ACTION_EDIT:
            $controller->editarCancion($datos[ConfigApp::$PARAMETERS]);
            break;
          case ConfigApp::$ACTION_MODIF:
            $controller->modificarCancion($datos[ConfigApp::$PARAMETERS]);
            break;
          default:
            $controller->mostrarListaCanciones();
            break;
          }
      }else{
        if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_LOGOUT){
          session_destroy();
          header('Location: /eflores/sodastereo');
        }
      }
    }
  }
}else{
  header('Location: /eflores/sodastereo/login');
}
?>
