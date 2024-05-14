<?php 
include "../Config/Global.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/StylesProductos.css">
    <!--Estilos Google Fonst-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>

<?php include 'Head.php'?>

    <div class="container-fluid p-principal mb-3">
        <div class="row fila" id="fila">


        </div>


    </div>
    <div>
        <nav class="paginas">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item paginacion" id="pag1" numero="1"><a class="page-link">1</a></li>
                <li class="page-item paginacion" id="pag2" numero="2"><a class="page-link">2</a></li>
                <li class="page-item paginacion" id="pag3" numero="3"><a class="page-link">3</a></li>
                <li class="page-item paginacion" id="pag4" numero="4"><a class="page-link">4</a></li>
                <li class="page-item paginacion" id="pag5" numero="5"><a class="page-link">5</a></li>
                <li class="page-item paginacion" id="pag6" numero="6"><a class="page-link">6</a></li>
                <li class="page-item paginacion" id="pag7" numero="7"><a class="page-link">7</a></li>
                <li class="page-item paginacion" id="pag8" numero="8"><a class="page-link">8</a></li>
                <li class="page-item paginacion" id="pag9" numero="9"><a class="page-link">9</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>


    <script src="../JS/jquery.js"></script>
    <!--Scrips Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="../JS/Productos.js"></script>
</body>

</html>