<?php
class ModelDiscografia{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
                        .'dbname=db_sodastereo;charset=utf8',
                        'root', '');
  }

// ----- DISCOS -----
  function GetDiscografia(){
    $consulta = $this->db->prepare("SELECT * FROM discos");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }


  function GetDisco($id_disco){
    $consulta = $this->db->prepare("SELECT * FROM discos WHERE id = ?");
    $result = $consulta->execute(array($id_disco));
    return $consulta->fetch();
  }


  function insertarDisco($nombre, $anio){
    $consulta = $this->db->prepare("INSERT INTO discos (nombreDisco, anio, id) VALUES (?, ?, NULL)");
    $result = $consulta->execute(array($nombre,$anio));
  }

  function borrarDisco($id_disco){
    $consulta = $this->db->prepare("DELETE FROM discos WHERE id = ?");
    $result = $consulta->execute(array($id_disco));
  }

  function modificarDisco($id_disco, $nombre, $anio){
    $consulta = $this->db->prepare("UPDATE discos SET nombreDisco = ?, anio = ? WHERE id = ?");
    $result = $consulta->execute(array($nombre,$anio,$id_disco));
  }

// ----- CANCIONES -----
  function GetCanciones(){
    $consulta = $this->db->prepare("SELECT * FROM canciones");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetCancion($id){
    $consulta = $this->db->prepare("SELECT * FROM canciones WHERE id = ?");
    $result = $consulta->execute(array($id));
    return $consulta->fetch();
  }

  function GetCancionesDisco($id_disco){
    $consulta = $this->db->prepare("SELECT * FROM canciones WHERE id_disco = ?");
    $result = $consulta->execute(array($id_disco));
    return $consulta->fetchAll();
  }

  function insertarCancion($id_disco, $nro, $nombre, $duracion){
    $consulta = $this->db->prepare("INSERT INTO canciones (id, id_disco, `#`, nombreCancion, duracion) VALUES (NULL, ?, ?, ?, ?)");
    $result = $consulta->execute(array($id_disco,$nro,$nombre,$duracion));
  }

  function borrarCancion($id){
    $consulta = $this->db->prepare("DELETE FROM canciones WHERE id = ?");
    $result = $consulta->execute(array($id));
  }

  function modificarCancion($id_disco, $nro, $nombre, $duracion, $id){
    $consulta = $this->db->prepare("UPDATE canciones SET id_disco = ?, `#` = ?, nombreCancion = ?, duracion = ? WHERE id = ?");
    $result = $consulta->execute(array($id_disco,$nro,$nombre,$duracion,$id));
  }
}
?>
