<?php
class ModelContacto{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
                        .'dbname=db_sodastereo;charset=utf8',
                        'root', '');
  }

  function insertarMensaje($nombre, $email, $mensaje){
    $consulta = $this->db->prepare("INSERT INTO contacto (nombre, email, mensaje, fecha) VALUES (?, ?, ?, CURRENT_TIMESTAMP)");
    $result = $consulta->execute(array($nombre,$email,$mensaje));
  }
}
?>
