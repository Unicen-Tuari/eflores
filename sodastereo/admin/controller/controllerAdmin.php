<?php
require_once('view/viewAdmin.php');
require_once('../models/modelDiscografia.php');

class ControllerAdmin{
  private $vista;
  private $modelo;

  function __construct(){
    $this->vista = new ViewAdmin();
    $this->modelo = new ModelDiscografia();
  }

  function mostrarInicioAdmin(){
    $discos = $this->modelo->GetDiscografia();
    $this->vista->mostrarInicioAdmin($discos);
  }

// ----- DISCOS -----
  function mostrarListaDiscos(){
    $discos = $this->modelo->GetDiscografia();
    $this->vista->mostrarListaDiscos($discos);
  }

  function nuevoDisco(){
    $this->vista->nuevoDisco();
  }

  function agregarDisco(){
    if ((isset($_POST["nombre"]) && (strlen(trim($_POST['nombre'])) > 0)) && (isset($_POST["anio"]) && (strlen($_POST["anio"]) == 4))){
      $nombre = $_POST["nombre"];
      $anio = $_POST["anio"];
      $this->modelo->insertarDisco($nombre, $anio);
      header('Location: /sodastereo/admin/discografia');
    }else{
      header('Location: /sodastereo/admin/discografia/new');
    }
  }

  function borrarDisco($id_disco){
    $this->modelo->borrarDisco($id_disco);
    header('Location: /sodastereo/admin/discografia');
  }

  function editarDisco($id_disco){
    $disco = $this->modelo->GetDisco($id_disco);
    $this->vista->editarDisco($disco);
  }

  function modificarDisco($id_disco){
    if ((isset($_POST["nombre"]) && (strlen(trim($_POST['nombre'])) > 0)) && (isset($_POST["anio"]) && (strlen($_POST["anio"]) == 4))){
      $nombre = $_POST["nombre"];
      $anio = $_POST["anio"];
      $this->modelo->modificarDisco($id_disco,$nombre, $anio);
      header('Location: /sodastereo/admin/discografia');
    }else{
      header('Location: /sodastereo/admin/discografia/editar/'.$id_disco);
    }
  }

// ----- CANCIONES -----
  function mostrarListaCanciones(){
    $discos = $this->modelo->GetDiscografia();
    $canciones = $this->modelo->GetCanciones();
    $this->vista->mostrarListaCanciones($discos, $canciones);
  }

  function nuevaCancion(){
    $discos = $this->modelo->GetDiscografia();
    $this->vista->nuevaCancion($discos);
  }

  function agregarCancion(){
    if ((isset($_POST["id_disco"])) && (isset($_POST["#"])) && (isset($_POST["nombre"])) && (strlen(trim($_POST['nombre'])) > 0) && (isset($_POST["duracion"]))){
      $id_disco = $_POST["id_disco"];
      $nro = $_POST["#"];
      $nombre = $_POST["nombre"];
      $duracion = $_POST["duracion"];
      $this->modelo->insertarCancion($id_disco,$nro,$nombre,$duracion);
      header('Location: /sodastereo/admin/canciones');
    }else {
      header('Location: /sodastereo/admin/canciones/new');
    }
  }

  function editarCancion($id){
    $discos = $this->modelo->GetDiscografia();
    $cancion = $this->modelo->GetCancion($id);
    $this->vista->editarCancion($discos,$cancion);
  }

  function modificarCancion($id){
    if ((isset($_POST["id_disco"])) && (isset($_POST["#"])) && (isset($_POST["nombre"])) && (strlen(trim($_POST['nombre'])) > 0) && (isset($_POST["duracion"]))){
      $id_disco = $_POST["id_disco"];
      $nro = $_POST["#"];
      $nombre = $_POST["nombre"];
      $duracion = $_POST["duracion"];
      $this->modelo->insertarCancion($id_disco,$nro,$nombre,$duracion,$id);
      header('Location: /sodastereo/admin/canciones');
    }else{
      header('Location: /sodastereo/admin/canciones/editar/'.$id);
    }
  }

  function borrarCancion($id){
    $this->modelo->borrarCancion($id);
    header('Location: /sodastereo/admin/canciones');
  }
}
?>
