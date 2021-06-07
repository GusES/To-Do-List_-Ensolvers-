<?php
//MODELO
require_once 'model.php';
//VARIABLES
$id = $_POST['id'];
//VISTA
if ($id) {
  //CREAR LISTA
  $folder = Crud::datosCarpetaUnica(['id' => $id]);
  $html = "<nav aria-label='breadcrumb'><ol class='breadcrumb mt-3'><li class='breadcrumb-item'><a class='link-primary' style='cursor:pointer' id='home' onclick='btnHome()'>Home</a></li><li class='breadcrumb-item' aria-current='page'><span class='d-none' id='folder'>$folder->idfolders</span>$folder->description</li></ol></nav><div class='row'><div class='col-sm-12'><div class='table-responsive'><table class='table table-borderless caption-top'><caption class='h4'>To-Do List</caption><tbody>";
  //RECORREMOS
  $obj = Crud::verTareas(['id' => $id]);
  foreach ($obj as $i) {
    $style = '';
    $checked = '';
    if ($i->status == 1) {
      $style = 'text-decoration-line-through';
      $checked = 'checked';
    }
    $html .= "<tr><td><div class='form-check'><input $checked class='form-check-input' type='checkbox' name='estadoTarea' onclick='changestatus($i->status,$i->idtasks)'><label class='form-check-label $style' for='estadoTarea'>$i->description</label></div></td><td class='text-end'><div><button class='p-0 m-0 btn btn-link text-decoration-none' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo' onclick='editarNombre($i->idtasks)'>Editar</button></div></td></tr>";
  }
  $html .= "</tbody></table></div></div></div>";
  echo $html;
} else {
  echo $html = 'No se encontraron registros.';
}
