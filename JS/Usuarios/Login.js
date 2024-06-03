$(document).ready(function () {
    const rutaRaiz = "/Proyecto/";
    const rutaPlugins = '/Proyecto/';

    $("#login").submit(function (e) {
        e.preventDefault();
        const datos = {
            correo: $("#correo").val(),
            contraseña: $("#contraseña").val()
        }

        $.ajax({
            type: "POST",
            url: rutaRaiz + "PHP/usuarios/login-usuarios.php",
            data: datos,
            success: function (response) {
                if (!response.error) {
                    let respuesta = JSON.parse(response);
                    if (respuesta.status) {
                        $("#acceso-usuario").html(respuesta.acceso);
                        setTimeout(function () {
                            window.location.href = rutaRaiz + "Vistas";
                        }, 1000);
                    }else{
                        VanillaToasts.create({
                            title: respuesta.title,
                            text: respuesta.text,
                            type: respuesta.type, 
                            icon: respuesta.icon, 
                            timeout: respuesta.timeout, 
                        });
                    }
                }
            }
        });
    });
});