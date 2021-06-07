<?php
session_start();
if (@$_SESSION['acceso']) {
  header('Location: backend/index.php');
}
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="text-center">
  <main class="container ">
    <div class="row">
      <div class="form-signin col-sm-12 my-0">
        <form method="POST">
          <h1 class="h3 fw-normal">&nbsp;&nbsp;</h1>
          <div class="form-floating">
            <input required type="text" class="form-control" id="user" name="user" placeholder="Usuario">
            <label for="user">Usuario</label>
          </div>
          <div class="form-floating">
            <input required type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            <label for="password">Contraseña</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="form-signin col-sm-12" id="msg" style="display:none">
      </div>
    </div>
  </main>
  <script src="js/script.js"></script>
</body>

</html>