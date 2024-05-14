<?php
include "../../Config/Global.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Estilos Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $rutaRaiz ?>/Estilos/stylesLogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--Estilos Google Fonst-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-fluid contenedor-principal">
        <form action="" method="" id="login">
            <div class="titulo">
                <h1> <a class="me-2" href="<?= $rutaRaiz ?>Vistas/index.php"><i class="bi bi-arrow-left-circle text-dark"></i></a>Iniciar Sesión</h1>
            </div>
            <div class="imagen">
                <img src="<?= $rutaRaiz ?>imagenes/logo.jpg" class="rounded-circle" width="140" alt="">
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
                <input type="email" class="form-control" id="correo" placeholder="example@hotmail.com" name="email">
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></i></span>
                <input type="password" class="form-control" id="contraseña" placeholder="Password" name="password">
            </div>
            <div class="mb-4 form-check">
                <label class="form-check-label" for="exampleCheck1">¿No tienes cuenta? <a href="<?= $rutaRaiz ?>/Vistas/Registro/Registro.php">Registrate</a></label>
            </div>
            <div class="btn-submit">
                <button type="submit" class="btn" name="submit">Iniciar Sesión</button>
                <div id="acceso-usuario"></div>
            </div>
        </form>
    </div>


    <!--Link Js-->
    <script src="<?= $rutaRaiz ?>/JS/jquery.js"></script>
    <script src="<?= $rutaRaiz ?>/JS/Usuarios/Login.js"></script>
</body>

</html>