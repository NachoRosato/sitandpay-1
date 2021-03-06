<?php
    require "../fw/Database.php";

    session_start();
    if (count($_POST) > 0) {
        $db = Database::getInstance();
        $dni = $db->escapeWildcards($db->escape($_POST['dni']));
        $pwd = $db->escapeWildcards($db->escape($_POST['password']));
        $pwd = sha1($pwd);
     
        $db->query("SELECT * 
                        FROM usuarios 
                        WHERE dni = '$dni' AND password = '$pwd'
                        LIMIT 1");

        if ($db->numRows() == 1) {
            $_SESSION['logged'] = true;
            $_SESSION['user'] = $db->fetch();
            header("Location: ../index.php");
            exit;
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <title>Sit & Pay - Administrador</title>

  </head>

  <body action="user.php" class="text-center">
    <form class="form-signin" method="POST">
      <img class="mb-4" src=".img/sitandpaylogo.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Inicio de sesión</h1>
      <label for="inputEmail" class="sr-only">DNI</label>
      <input type="text" id="inputEmail" name="dni" class="form-control" placeholder="DNI" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; Nicosrka</p>
    </form>
  </body>
</html>