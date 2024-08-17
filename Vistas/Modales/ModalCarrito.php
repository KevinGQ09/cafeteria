<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $rutaRaiz ?>/plugins/toasts/vanillatoasts.css">
    <link rel="stylesheet" href="<?= $rutaRaiz ?>/Estilos/stylesCarrito.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <title>Document</title>

</head>

<body>


    <!-- Modal -->
    <div class="modal fade modal-right-top" id="carritoModal" tabindex="-1" aria-labelledby="carritoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carritoModalLabel">Carrito de Compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Contenido del carrito -->
                    <div class="cart-item" id="cart-item">

                    </div>
                    <div class="total-pagar">
                        <p> Total </p>
                        <label for="" id="pagar"></label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnpagar">Continuar al pago</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/jquery.js"></script>
    <script src="<?= $rutaRaiz ?>/JS/Carrito/Carrito.js"></script>
    <script src="<?= $rutaRaiz ?>/JS/Carrito/PagarCarrito.js"></script>
</body>

</html>