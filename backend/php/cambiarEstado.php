<?php
//MODELO
require_once 'model.php';
//VARIABLES
$id = (int) $_POST['id'];
$boolean = $_POST['estado'] == 0 ? 1 : 0; 
$estado = $boolean;
$datos = ['id' => $id, 'estado' => $estado];
//ACTUALIZACION
if ($id) {
  Crud::cambiarEstado($datos);
  $rs = Crud::retornarIdPadre(['id' => $id]);  
  echo $rs->idfolder;
}
