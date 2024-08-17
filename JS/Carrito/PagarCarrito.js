$(document).ready(function () {
    const rutaRaiz = "/Proyecto/";
    $("#btnpagar").click(function (e) {
        e.preventDefault();

        let dato = $("#pagar").text().replace('$', '');
        let totalPagar = parseFloat(dato);
        if (totalPagar > 0) {
            let productosInfo = [];

            $(".elementos").each(function () {
                let idProducto = $(this).find('.eliminarProducto').attr('value');
                let nombreProducto = $(this).find('.product-nombre').text().trim();
                let cantidad = parseFloat($(this).find('.product-cantidad').val());
                let precio = parseFloat($(this).find('.product-precio').text().replace('$', '').trim());
                let precioTotal = parseFloat($(this).find('.total-por-producto').text().replace('$', '').trim());

                let producto = {
                    idProducto: idProducto,
                    nombreProducto: nombreProducto,
                    precio: precio,
                    cantidad: cantidad,
                    precioTotal: precioTotal
                };

                productosInfo.push(producto);
            });

            let datosEnviar = {
                totalPagar: totalPagar,
                productosInfo: productosInfo
            };

            $.ajax({
                type: "POST",
                url: rutaRaiz + "PHP/Carrito/PagarCarrito.php",
                data: datosEnviar,
                success: function (response) {
                    if (!response.error) {
                        let respuesta = JSON.parse(response);

                        VanillaToasts.create({
                            title: respuesta.title,
                            text: respuesta.text,
                            type: respuesta.type,
                            icon: respuesta.icon,
                            timeout: respuesta.timeout,
                        });

                        if (respuesta.redirectUrl) {
                            window.location.href = respuesta.redirectUrl;
                            let datos = `
                            <div class="text-carrito">
                                Carrito Vacio
                                <i class="bi bi-cart-x"></i>
                            </div>`;

                            localStorage.removeItem('productosCarrito');
                            localStorage.removeItem('cantidadesCarrito');
                            $("#cart-item").empty();
                            $("#cart-item").html(datos);
                            $("#pagar").text("$0.00");
                            $("#carrito").html("Carrito(0)");
                            $('#carritoModal').modal('hide');
                        } else {

                        }
                    }
                }
            });
        }
    });
});
