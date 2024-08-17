$(document).ready(function () {

    //Obtener Valor de la URL
    const urlParams = new URLSearchParams(window.location.search);
    const IdCategoria = urlParams.get('IdCategoria') || 1; // Valor predeterminado: 1



    //Inicializacion de funciones
    agregarProductos(IdCategoria);
    manejarActivacionPaginas(IdCategoria)

    function agregarProductos(idcategoria) {
        $.ajax({
            type: "GET",
            url: "../PHP/IngresarProductos.php",
            success: function (response) {
                if (!response.error) {
                    let productos = JSON.parse(response);
                    let datos = "";
                    productos.forEach(element => {
                        if (element['Id_Categoria'] == idcategoria) {
                            datos += `
                              <div class="col-12 col-md-3 mb-3">
                              <div class="card card-secundario">

                        <img src="${element['Imagen_Producto']}" class="card-img-top img-producto">
                        <div class="card-body card-tercero">
                            <h5 class="card-title">${element['Nombre_producto']}</h5>
                            <p>$ ${element['Precio']}</p>
                            <div class = "valores">
                                <input type="hidden" value = "${element['IdProducto']}">
                                <input type="hidden" value = "${element['Nombre_producto']}">
                                <input type="hidden" value = "${element['Precio']}">
                                <input type="hidden" value = "${element['Imagen_Producto']}">
                            </div>                           
                            <a href="#" class="btn btnComprar" id="btnComprar">Comprar</a>
                            
                            
                        </div>
                    </div>
                </div>`;
                        }
                    });
                    $("#fila").html(datos);
                }
            }
        });
    }

    function manejarActivacionPaginas(numero) {
        $("[id^='pag']").removeClass("active");
        $("#pag" + numero).addClass("active");
    }


    function actualizarURL(numeroURL) {
        const url = new URL(window.location.href);
        url.searchParams.set('IdCategoria', numeroURL);
        window.history.pushState(null, '', url.toString());

    }


    $(document).on("click", ".paginacion", function () {
        const numero = $(this).attr("numero");
        manejarActivacionPaginas(numero);
        agregarProductos(numero);
        actualizarURL(numero)
    });


 

});
