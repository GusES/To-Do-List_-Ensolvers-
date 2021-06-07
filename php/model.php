<?php
require_once 'Dbase.php';
class Crud extends Dbase
{
  public static function ValidarIngreso($datosModel)
  {
    $stmt = Dbase::conectar()->prepare('SELECT username FROM users WHERE username = :usuario AND password = :password');
    $stmt->bindParam(":usuario", $datosModel['username'], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datosModel['password'], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt = null;
  }
}
