<?php
class ModelDiscografia{
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

  function GetCanciones(){
    $consulta = $this->db->prepare("SELECT * FROM canciones");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetDisco($id_disco){
    $consulta = $this->db->prepare("SELECT * FROM discos WHERE id = ?");
    $result = $consulta->execute(array($id_disco));
    return $consulta->fetch();
  }

  function GetCancionesDisco($id_disco){
    $consulta = $this->db->prepare("SELECT * FROM canciones WHERE id_disco = ?");
    $result = $consulta->execute(array($id_disco));
    return $consulta->fetchAll();
  }
}
?>
