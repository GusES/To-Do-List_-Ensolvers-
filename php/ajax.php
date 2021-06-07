<?php
//MODELO
require_once 'model.php';
//Variables del formulario
$user = isset($_POST['user']) ? $_POST['user'] : false;
$pass = isset($_POST['password']) ? $_POST['password'] : false;
//Estructura
if ($user && $pass) {
  $hashlocal = crypt($pass, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
  $datos = ['username' => $user, 'password' => $hashlocal];
  if (Crud::ValidarIngreso($datos)) {
    session_start();
    $_SESSION["acceso"] = true;
    $arr = array('estado' => 0, 'location' => 'backend/index.php');
    echo json_encode($arr);
  }
} else if (!$user && $pass) {
  $arr = array('estado' => 1, 'msg' => '<div class="alert alert-danger" role="alert" id="res">El usuario no puede estar vacio</div>');
  echo json_encode($arr);
} else if (!$pass && $user) {
  $arr = array('estado' => 1, 'msg' => '<div class="alert alert-danger" role="alert" id="res">La contraseña no puede estar vacia</div>');
  echo json_encode($arr);
} else {
  $arr = array('estado' => 1, 'msg' => '<div class="alert alert-danger" role="alert" id="res">Los campos no pueden estar vacios</div>');
  echo json_encode($arr);
}
