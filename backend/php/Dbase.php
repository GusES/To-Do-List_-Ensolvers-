<?php
//METODO DE CONEXION
class Dbase
{
  public static function conectar()
  {
    $link = new PDO("mysql:host=localhost;dbname=todo_list", "root", "");
    return $link;
  }
}
