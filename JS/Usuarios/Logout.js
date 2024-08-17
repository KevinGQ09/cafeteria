$(document).ready(function () {
    const rutaRaiz = "/Proyecto/";
    $(".sessionEnd").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: rutaRaiz + "PHP/usuarios/logout.php",
            dataType: "json", 
            success: function (response) {
                if (response === true) { // Comparar con triple igual para asegurar tipo
                    window.location.href = rutaRaiz + "Vistas/index.php";
                    localStorage.removeItem('productosCarrito');
                    localStorage.removeItem('cantidadesCarrito');
                } 
            },
           
        });
    });
});
