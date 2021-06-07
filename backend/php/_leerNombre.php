<?php
//MODELO
require_once 'model.php';
//VARIABLES
$id = $_POST['id'];
//VISTA
if ($id) {
  $obj = Crud::leerNombre(['id' => $id]);
  $html = "<div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Editing Task '$obj->description'</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <form method='POST' id='formEditar'>
              <div class='mb-3'>
              <input type='text' class='form-control' id='editarNombre' value='$obj->description' name='editarNombre'>
              <input type='hidden'value='$obj->idtasks' name='idtarea'>
              </div>
            </form>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' onclick='editarNombre($obj->idtasks)'>Guardar</button>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
          </div>";
  echo $html;
}
