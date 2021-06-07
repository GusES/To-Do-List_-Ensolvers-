<?php
//MODELO
require_once 'model.php';
//INSTACIA
$crud = new Crud;
$obj = $crud->verCarpeta();
//VISTA
$return = "<div class='col-sm-12'><h4 class='h4 text-muted my-2 d-block'>Folders</h4></div>";
foreach ($obj as $i) {
  $return .= "<div class='row'>
  <div class='container mb-2'>
  <div class='row'>
  <div class='col-xs-12 col-md-9'>
  <p>- <span> $i->description </span></p>
  </div>
  <div class='col-xs-12 col-md-3 text-end'>
  <button class='btn btn-link text-decoration-none' onclick='accioncarpeta($i->idfolders ,1)'>Ver Tareas</button>
  <button class='btn btn-link text-decoration-none' onclick='accioncarpeta($i->idfolders ,2)'>Eliminar</button>
  </div>
  </div>
  </div>
  </div>";
}
echo $return;
