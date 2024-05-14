<?php
function validarNombre($nombre)
{
    $validar = '/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+(?:\s[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+)*$/';
    return preg_match($validar, $nombre);
}

function validarApellido($apellido)
{
    $validar = '/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ]+$/';
    return preg_match($validar, $apellido);
}

function validarCorreo($correo)
{
    $validar = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
    return preg_match($validar, $correo);
}

function validarContraseña($contraseña)
{
    $validar = '/^[A-Z][0-9a-zA-Z]*[!@#$%^&*]$/';
    return preg_match($validar, $contraseña);
}
