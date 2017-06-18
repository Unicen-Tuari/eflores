<?php
class ModelUsuario{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
                        .'dbname=db_sodastereo;charset=utf8',
                        'root', '');
  }

  function GetUsuario($id_usuario){
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $result = $consulta->execute(array($id_usuario));
    return $consulta->fetch();
  }
}
?>
