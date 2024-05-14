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
                   
                    $respuesta = array(
                        "status" => true,
                        "acceso" => '<div class="alert alert-info text-center">
                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                    <span class="fw-bold" role="status">Accediendo...</span>
                </div>'

                    );
                } else {
                    print_r("contra  seña incorrecta");
                }
            } else {
                print_r("usuario no encontrado");
            }
        } else {
            print_r("Campos no validos");
        }
    } else {
        print_r("Campos Vacios");
    }
    $json = json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    print_r($json);
}
