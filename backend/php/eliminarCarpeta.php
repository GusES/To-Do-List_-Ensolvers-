<?php
//MODELO
require_once 'model.php';
//VARIABLES
$id = (int) $_POST['id'];
//ELIMINAR REGISTRO
if ($id) {
  echo $msg = Crud::borrarCarpeta(['id' => $id]);
}
