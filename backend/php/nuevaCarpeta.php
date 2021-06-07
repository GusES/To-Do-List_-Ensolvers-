<?php
//MODELO
require_once 'model.php';
//NOMBRE CARPETA
$nombreCarpeta = isset($_POST['nombreCarpeta']) ? $_POST['nombreCarpeta'] : false;
//VALIDACION
if ($nombreCarpeta && trim($nombreCarpeta) !== "") {
  echo $msg = Crud::agregarCarpeta(['title' => trim($nombreCarpeta)]);
}
