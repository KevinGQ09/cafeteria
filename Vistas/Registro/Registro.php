<?php
include "../../Config/Global.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!--Estilos Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--Estilos Personales-->
    <link rel="stylesheet" href="<?= $rutaRaiz ?>/Estilos/stylesRegistro.css">

    <link rel="stylesheet" href="<?= $rutaRaiz ?>/plugins/toasts/vanillatoasts.css">


    <!--Estilos Google Fonst-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-fluid contenedor-principal">
        <form action="" method="post" id="registro">
            <div class="titulo">
                <h1>
                    <a class="me-2" href="<?= $rutaRaiz?>Vistas/index.php"><i class="bi bi-arrow-left-circle text-dark"></i></a>Registro
                </h1>
            </div>
            <div class="imagen">
                <img src="<?= $rutaRaiz ?>imagenes/logo.jpg" class="rounded-circle" width="140" alt="">
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="input-group mb-4">
                            <span class="input-group-text span-color" id="group-nombre"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control " id="nombre" placeholder="Nombre" name="nombre">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="input-group mb-4">
                            <span class="input-group-text span-color" id="group-paterno"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" id="paterno" placeholder="Apellido Paterno" name="paterno">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="input-group mb-4">
                            <span class="input-group-text span-color" id="group-materno"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" id="materno" placeholder="Apellido Materno" name="materno">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-group mb-4">
                            <span class="input-group-text span-color" id="group-correo"><i class="bi bi-envelope-at-fill"></i></span>
                            <input type="email" class="form-control" id="correo" placeholder="Email" name="correo">
                        </div>
                    </div>
                </div>

                <div class="row fila-contra">
                    <div class="col-12 col-md-6">
                        <div class="input-group mb-4">
                            <span class="input-group-text span-color" id="group-contraseña"><i class="bi bi-lock-fill"></i></i></span>
                            <input type="password" class="form-control" id="contraseña" placeholder="Password" name="contraseña">
                        </div>
                    </div>
                </div>

            </div>

            <div class="mb-4 form-check d-flex justify-content-center">
                <input type="checkbox" class="form-check-input me-1" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Acepto Terminos y Condiciones</label>
            </div>
            <div class="btn-submit">
                <button type="submit" class="btn" name="submit">Registrarse</button>
            </div>
        </form>
    </div>


    <!--Link Js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="<?= $rutaRaiz ?>/JS/jquery.js"></script>
    <script src="<?= $rutaRaiz ?>/JS/Usuarios/Registro.js"></script>
    <script src="<?= $rutaRaiz ?>/plugins/toasts/vanillatoasts.js""></script>
</body>

</html>