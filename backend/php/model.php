<?php
require_once 'Dbase.php';
class Crud extends Dbase
{
  //CREAR NUEVA CARPETA
  public static function agregarCarpeta($datos)
  {
    try {
      $stmt = Dbase::conectar()->prepare("INSERT INTO folders (description) VALUES (:title)");
      $stmt->bindParam(":title", $datos["title"], PDO::PARAM_STR);
      $stmt->execute();
      return $stmt;
      $stmt = null;
    } catch (PDOException $e) {
      return false;
    }
  }
  //LEER CARPETAS
  public function verCarpeta()
  {
    $stmt = Dbase::conectar()->prepare("SELECT * FROM folders");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt = null;
  }
  //ELIMINAR CARPETA Y CONTENIDO
  public static function borrarCarpeta($datos)
  {
    $stmt = Dbase::conectar()->prepare('DELETE FROM folders WHERE idfolders = :id');
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
    $stmt = null;
  }
  //LEER TAREAS DE LAS CARPETAS
  public static function verTareas($datos)
  {
    $stmt = Dbase::conectar()->prepare("SELECT * FROM tasks WHERE idfolder = :idfolder");
    $stmt->bindParam(":idfolder", $datos['id'], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
    $stmt = null;
  }
  //LEER DATO INDIVUAL CARPETA
  public static function datosCarpetaUnica($datos)
  {
    $stmt = Dbase::conectar()->prepare("SELECT * FROM folders WHERE idfolders = :idfolder");
    $stmt->bindParam(":idfolder", $datos['id'], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
    $stmt = null;
  }
  //CREAR NUEVA TAREA EN CARPETA
  public static function nombreTarea($datos)
  {
    try {
      $stmt = Dbase::conectar()->prepare("INSERT INTO tasks (description, idfolder) VALUES (:title , :id)");
      $stmt->bindParam(":title", $datos["title"], PDO::PARAM_STR);
      $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
      $stmt->execute();
      return true;
      $stmt = null;
    } catch (PDOException $e) {
      return false;
    }
  }
  //LEER CARPETAS
  public static function leerNombre($datos)
  {
    $stmt = Dbase::conectar()->prepare("SELECT * FROM tasks WHERE idtasks = :id");
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
    $stmt = null;
  }
  //ACTUALIZAR NOMBRE TAREA
  public static function editarNombre($datos)
  {
    $stmt = Dbase::conectar()->prepare("UPDATE tasks SET description = :title WHERE idtasks = :id");
    $stmt->bindParam(":title", $datos["title"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
    $stmt = null;
  }
  public static function cambiarEstado($datos)
  {
    $stmt = Dbase::conectar()->prepare("UPDATE tasks SET status = :estado WHERE idtasks = :id");
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
    $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
    $stmt = null;
  }
  public static function retornarIdPadre($datos)
  {
    $stmt = Dbase::conectar()->prepare("SELECT idfolder FROM tasks WHERE idtasks = :id");
    $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
    $stmt = null;
  }
}
