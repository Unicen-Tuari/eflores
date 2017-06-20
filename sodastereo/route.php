<?php
require_once('config/config_app.php');
require_once('controllers/controllerDiscografia.php');
require_once('controllers/controllerText.php');
require_once('controllers/controllerContacto.php');
require_once('controllers/controllerLogin.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  $arrayReturn[ConfigApp::$RESOURCE] = $arr_data[0];
  $arrayReturn[ConfigApp::$ACTION] = isset($arr_data[1]) ? $arr_data[1] : null;
  $arrayReturn[ConfigApp::$PARAMETERS] = isset($arr_data[2]) ? $arr_data[2] : null;
  return $arrayReturn;
}

if ($_GET[ConfigApp::$ACTION] == ''){
  $controller = new ControllerText();
  $controller->mostrarTexto(ConfigApp::$RESOURCE_HOME);
}
else{
  $datos = parseUrl($_GET[ConfigApp::$ACTION]);
  if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_DISC){
    $controller = new ControllerDiscografia();
    switch ($datos[ConfigApp::$ACTION]){
      case ConfigApp::$ACTION_VIEW:
        $controller->mostrarDisco($datos[ConfigApp::$PARAMETERS]);
        break;
      default:
        $controller->mostrarDiscografia();
        break;
    }
  }else{
    if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_BIO){
        $controller = new ControllerText();
        $controller->mostrarTexto($datos[ConfigApp::$RESOURCE]);
    }else{
      if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_HOME){
          $controller = new ControllerText();
          $controller->mostrarTexto($datos[ConfigApp::$RESOURCE]);
      }else{
        if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_CONTACT){
            $controller = new ControllerContacto();
            switch ($datos[ConfigApp::$ACTION]){
              case ConfigApp::$ACTION_ADD:
                $controller->insertarMensaje();
              break;
              default:
                $controller->mostrarContacto();
              break;
            }
        }else{
          if ($datos[ConfigApp::$RESOURCE] === ConfigApp::$RESOURCE_LOGIN){
            $controller = new ControllerLogin();
            switch ($datos[ConfigApp::$ACTION]){
              case ConfigApp::$ACTION_LOGIN:
                $controller->iniciarSesion();
                break;
              default:
                $controller->mostrarLogin();
                break;
            }
          }
        }
      }
    }
  }
}
?>
