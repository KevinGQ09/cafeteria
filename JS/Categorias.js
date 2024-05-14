$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "../PHP/IngresarCategorias.php",
    success: function (response) {
      if (!response.error) {
        let categorias = JSON.parse(response);
        let datos = "";
        categorias.forEach((element) => {
          datos += `
                <div class="col-12 col-md-4 mb-3">
                <div class="card card-secundario">
                    <img src="${element["Img_categoria"]}" class="card-img-top">
                    <div class="card-body card-tercero">
                        <h5 class="card-title">${element["Nombre_categoria"]}</h5>
                        <a href="productos.php?IdCategoria=${element["IdCategoria"]}" class="btn">Ver Productos</a>

                    </div>
                </div>
            </div>`;
        });

        $("#fila").html(datos);
      }
    },
  });
});
