<?php 
session_start();
if (!isset($_SESSION['logged'])) {
    header("Location: ../html/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sit & Pay - Administracion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        input[type='number'] {
            -moz-appearance: textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="estadomesas.php">Bienvenido</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Administrar cuentas de usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pwd.php">Menús</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consultas.php">Mesas</a>
                </li>

                <!-- este bloque de codigo tiene que ir encerrado de una condicion $_Session para ver si es el administrador 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu administrador
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="user.php">Alta/edicion de usuario</a>
                            <a class="dropdown-item" href="assign.php">Asignacion de curso</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="courses.php">Alta de curso</a>
                            <a class="dropdown-item" href="content.php">Modificacion de contenidos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="exams.php">Alta/modificacion de examen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pwd.php">Cambiar contraseñas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pendientes.php">Pendientes de pago</a>
                        </div>
                    </li> <!-- cierre del bloque de administrador -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="../html/logout.php" class="btn btn-sm btn-danger" type="button">Cerrar Sesion</a>
            </form>
        </div>
    </nav>