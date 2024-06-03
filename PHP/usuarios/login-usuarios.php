<?php
include "../../Config/Global.php";
include "../Conexion.php";
include "../Validaciones.php";



if (isset($_POST)) {
    if (!empty($_POST["correo"]) && !empty($_POST["contraseña"])) {
        if (validarCorreo($_POST["correo"]) && validarContraseña($_POST["contraseña"])) {

            $correo = $_POST["correo"];
            $contraseña = $_POST["contraseña"];

            $login = $conexion->prepare("SELECT IdUsuario, IdRol, Nombre, A_Paterno, A_Materno, Correo, Contraseña FROM usuario NATURAL JOIN info_usuario NATURAL JOIN contacto WHERE Correo = ?");
            $login->bind_param("s", $correo);
            $login->execute();
            $resultado = $login->get_result();


            if ($resultado->num_rows > 0) {
                $usuario = $resultado->fetch_object();

                if (password_verify($contraseña, $usuario->Contraseña)) {
                    $_SESSION['IdUsuario'] = $usuario->IdUsuario;

                    $respuesta = array(
                        "status" => true,
                        "acceso" => '<div class="alert alert-info text-center">
                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                    <span class="fw-bold" role="status">Accediendo...</span>
                </div>'

                    );
                } else {
                    $respuesta = array(
                        "title" => "ADVERTENCIA",
                        "text" => "Contraseña Incorrecta",
                        "type" => "warning", //valores aceptados: success, warning, info, error
                        "icon" => $rutaRaiz . "plugins/toasts/icons/icon_warning.png",
                        "timeout" => 3000, // visible 3 segundos
                    );
                }
            } else {
                $respuesta = array(
                    "title" => "ADVERTENCIA",
                    "text" => "Correo no Existente",
                    "type" => "info", //valores aceptados: success, warning, info, error
                    "icon" => $rutaRaiz . "plugins/toasts/icons/icon_info.png",
                    "timeout" => 3000, // visible 3 segundos
                );
            }
        } else {
            $respuesta = array(
                "title" => "ADVERTENCIA",
                "text" => "Datos no Validos",
                "type" => "error", //valores aceptados: success, warning, info, error
                "icon" => $rutaRaiz . "plugins/toasts/icons/icon_error.png",
                "timeout" => 3000, // visible 3 segundos
            );
        }
    } else {
        $respuesta = array(
            "title" => "ADVERTENCIA",
            "text" => "Campos Vacios",
            "type" => "error", //valores aceptados: success, warning, info, error
            "icon" => $rutaRaiz . "plugins/toasts/icons/icon_error.png",
            "timeout" => 3000, // visible 3 segundos
        );
    }
    $json = json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    print_r($json);
}
