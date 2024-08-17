<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/StylesHead.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= $rutaRaiz ?>/plugins/toasts/vanillatoasts.css">
    <!--Estilos Google Fonst-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid contenedor">
            <div class="contactos">
                <i class="bi bi-headset"></i>
                <div class="texto-telefono">
                    <span class="texto">Servicio a Cliente</span>
                    <span class="telefono">123-456-7890</span>
                </div>
            </div>

            <div class="cafeteria">
                <i class="bi bi-cup-hot-fill"></i>
                <h1>Cafeteria</h1>
            </div>

            <div class="iniciar-registro">

                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </a>

                <ul class="dropdown-menu">
                    <?php if (!empty($_SESSION['IdUsuario'])) : ?>

                        <li><a class="dropdown-item sessionEnd" href="">Cerrar Sesión</a></li>

                    <?php else : ?>
                        <li><a class="dropdown-item" href="<?= $rutaRaiz ?>Vistas/Login/Login.php">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item" href="<?= $rutaRaiz ?>Vistas/Registro/Registro.php">Registro</a></li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>


        <!--Segundo Navar-->

        <nav class="navbar navbar-expand-md justify-content-around">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex text-center ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Categorias.php">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Productos.php">Productos</a>
                        </li>

                        <li class="nav-item">
                            <?php if (empty($_SESSION['IdUsuario'])) : ?>
                                <a class="nav-link active" href="Login/Login.php">Carrito(0)</a>
                            <?php else : ?>
                                <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#carritoModal" id="carrito">Carrito(0)</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 " type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn boton-buscar" type="submit"><i class="bi bi-search color-icono"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <?php
    include("Modales/ModalCarrito.php");
    ?>
    <script src="../JS/jquery.js"></script>
    <script src="<?= $rutaRaiz ?>/JS/usuarios/Logout.js"></script>
    <script src="<?= $rutaRaiz ?>/plugins/toasts/vanillatoasts.js""></script>
</body>

</html>