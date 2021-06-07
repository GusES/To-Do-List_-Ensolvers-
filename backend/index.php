<?php
session_start();
if ($_SESSION['acceso'] === null || $_SESSION['acceso'] === false) {
  header('location: ../../../index.php');
}
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To-Do List</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--Barra de Navegacion-->
  <?php include('inc/nav.php'); ?>
  <!--Contenedor-->
  <main class="container">
    <!--Lista de carpetas-->
    <?php include('inc/views-list.php'); ?>
    <!--Agregar carpetas-->
    <?php include('inc/views-add.php'); ?>
  </main>
  <!--Mensaje de creacion de carpetas-->
  <?php include('inc/toast.php'); ?>
  <!--MODAL EDITAR-->
  <?php include('inc/modal.php'); ?>
  <!--Scripts AJAX-->
  <script src="js/listarCarpetas.js"></script>
  <script src="js/viewsAgregar.js"></script>
  <script src="js/accionesBtnCarpeta.js"></script>
  <script src="js/nuevaCarpeta.js"></script>
  <script src="js/btnHome.js"></script>
  <script src="js/nuevaTarea.js"></script>
  <script src="js/leerNombre.js"></script>
  <script src="js/editarNombre.js"></script>
  <script src="js/cambiarEstado.js"></script>
  <script>
    var myModalEl = document.getElementById('myModal')
    var modal = bootstrap.Modal.getInstance(myModalEl) // Returns a Bootstrap modal instance
  </script>
  <!--Scripts Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>