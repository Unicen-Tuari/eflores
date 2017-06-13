<?php
class ModelText{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
                        .'dbname=db_sodastereo;charset=utf8',
                        'root', '');
  }

  function GetDiscografia(){
    $consulta = $this->db->prepare("SELECT * FROM discos");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetTexto($ubicacion){
    $consulta = $this->db->prepare("SELECT * FROM texto WHERE ubicacion = ?");
    $result = $consulta->execute(array($ubicacion));
    return $consulta->fetchAll();
  }
}
?>
