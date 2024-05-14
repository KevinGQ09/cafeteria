<?php
include "../Conexion.php";
include "../Validaciones.php";
include "../../Config/Global.php";


if (isset($_POST)) {
    if (
        !empty($_POST["nombre"]) && !empty($_POST["paterno"]) &&
        !empty($_POST["materno"]) && !empty($_POST["correo"]) &&
        !empty($_POST["contraseña"])
    ) {


        if (
            validarNombre($_POST["nombre"]) && validarApellido($_POST["paterno"]) && validarApellido($_POST["materno"])
            && validarCorreo($_POST["correo"]) && validarContraseña($_POST["contraseña"])
        ) {
            $nombre = $_POST["nombre"];
            $paterno = $_POST["paterno"];
            $materno = $_POST["materno"];
            $correo = $_POST["correo"];
            $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

            $sql = $conexion->prepare("SELECT * FROM contacto WHERE Correo = ?");
            $sql->bind_param("s", $correo);
            $sql->execute();
            $sql->store_result();

            if ($sql->num_rows == 0) {
                $sql = $conexion->prepare("CALL registrar_usuarios (?, ?, ?, ?, ?)");
                $sql->bind_param("sssss", $correo, $contraseña, $nombre, $paterno, $materno);
                if ($sql->execute()) {
                    print_r(5);
                } else {
                    print_r(4);
                }
            } else {
                print_r(3);
            }
        } else {
            print_r(2);
        }
    } else {
        print_r(1);
    }
}

/*
1- Campos vacios
2- Datos no validos
3- Correo ya existente
4- Insercion incorrecta
5- insercion correcta
*/