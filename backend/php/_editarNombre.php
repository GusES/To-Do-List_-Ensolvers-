<?php
//MODELO
require_once 'model.php';
//VARIABLES
$id = (int) $_POST['idtarea'];
$title = $_POST['editarNombre'];
$datos = ['id' => $id, 'title' => $title];
//ACTUALIZACION
if ($id) {
  echo $obj = Crud::editarNombre($datos);
}
