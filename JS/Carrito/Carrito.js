$(document).ready(function () {
    const rutaRaiz = "/Proyecto/";
    agregarCarrito();
    eliminarProducto();
    

    function agregarCarrito() {
        $(document).on("click", ".btnComprar", function (event) {
            event.preventDefault();

            var cardBody = $(this).closest('.card-body');
            var idProducto = cardBody.find('input[type="hidden"]').eq(0).val();
            var nombreProducto = cardBody.find('input[type="hidden"]').eq(1).val();
            var precioProducto = cardBody.find('input[type="hidden"]').eq(2).val();
            var Imagen_Producto = cardBody.find('input[type="hidden"]').eq(3).val();

            const datos = {
                idProducto: idProducto,
                nombreProducto: nombreProducto,
                precioProducto: precioProducto,
                Imagen_Producto: Imagen_Producto
            }

            $.ajax({
                type: "POST",
                url: rutaRaiz + "PHP/Carrito/ConfigCarrito.php",
                data: datos,
                success: function (response) {
                    if (!response.error) {
                        if (response == 1) {
                            window.location.href = rutaRaiz + "Vistas/Login/Login.php";
                        } else {
                            actualizarCarrito(JSON.parse(response));
                        }
                    }
                }
            });
        });
    }

    function eliminarProducto() {
        $(document).on("click", ".eliminarProducto", function (e) {
            e.preventDefault();
            const idProducto = $(this).attr("value");

            $.ajax({
                type: "POST",
                url: rutaRaiz + "PHP/Carrito/EliminarProducto.php",
                data: { idProducto: idProducto },
                success: function (response) {
                    if (!response.error) {
                        actualizarCarrito(JSON.parse(response));
                    }
                }
            });
        });
    }

    function actualizarCarrito(productos) {
        let datos = "";
        if (productos.length == 0) {
            datos = `
             <div class="text-carrito">
                    Carrito Vacio
                    <i class="bi bi-cart-x"></i>
              </div>
            `;
            $("#cart-item").html(datos);
        }

        productos.forEach(element => {
            let cantidad = 1;
            const cantidades = JSON.parse(localStorage.getItem('cantidadesCarrito')) || {};
            if (cantidades[element.idProducto]) {
                cantidad = cantidades[element.idProducto];
            }

            datos += `
                <div class="elementos">
                    <div class="product-imagen">
                        <img class="img-products" src="${element['Imagen_Producto']}" alt="Imagen del producto">
                    </div>
                    <div class="product-detalles">
                        <label class="product-nombre">${element['nombreProducto']}</label>
                        <label class="product-precio">$ ${element['precioProducto']}</label>
                        <input type="number" class="product-cantidad" id="product-quantity-${element.idProducto}" value="${cantidad}" min="1">
                    </div>
                    <div class="precio">
                        <label for="" class="total-por-producto">$${(element['precioProducto'] * cantidad).toFixed(2)}</label>
                    </div>
                    <div class="product-remove">
                        <i class="bi bi-trash3-fill eliminarProducto" value="${element['idProducto']}"></i>
                    </div>
                </div>
                `;
        });

        $("#cart-item").html(datos);
        precioPorProducto();
        let cantidadProductos = productos.length;
        $("#carrito").html("Carrito(" + cantidadProductos + ")");
        localStorage.setItem('productosCarrito', JSON.stringify(productos));

        // Calcular el total y actualizar el label
        calcularTotal();
    }

    function precioPorProducto() {
        $(document).on("keyup change", ".product-cantidad", function () {
            let cantidad = $(this).val();
            let idProducto = $(this).attr('id').split('-')[2];
            let precioProducto = $(this).closest('.elementos').find('.product-precio').text();
            precioProducto = precioProducto.replace('$', '').trim();
            let precioUnitario = parseFloat(precioProducto);
            const totalPorProducto = cantidad * precioUnitario;

            $(this).closest('.elementos').find('.total-por-producto').html('$' + totalPorProducto.toFixed(2));

            // Guardar la cantidad en localStorage
            const cantidades = JSON.parse(localStorage.getItem('cantidadesCarrito')) || {};
            cantidades[idProducto] = cantidad;
            localStorage.setItem('cantidadesCarrito', JSON.stringify(cantidades));

            // Calcular el total y actualizar el label
            calcularTotal();
        });
    }

    function calcularTotal() {
        let total = 0;
        $(".total-por-producto").each(function () {
            let precio = $(this).text().replace('$', '').trim();
            total += parseFloat(precio);
        });
        $("#pagar").text("$" + total.toFixed(2));
    }

   

    let productosCarrito = JSON.parse(localStorage.getItem('productosCarrito')) || [];
    actualizarCarrito(productosCarrito);
});
