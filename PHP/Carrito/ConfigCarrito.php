<?php
include("../../Config/Global.php");
if (isset($_SESSION['IdUsuario'])) {

    if (isset($_POST)) {
        if (isset($_POST["idProducto"]) && isset($_POST["nombreProducto"]) && isset($_POST["precioProducto"]) && isset($_POST["Imagen_Producto"]) ) {

            $idProducto = $_POST["idProducto"];
            $nombreProducto =  $_POST["nombreProducto"];
            $precioProducto = $_POST["precioProducto"];
            $Imagen_Producto = $_POST["Imagen_Producto"];

            if (!isset($_SESSION["carrito"])) {
                $productos = array(
                    "idProducto" => $idProducto,
                    "nombreProducto" => $nombreProducto,
                    "precioProducto" => $precioProducto,
                    "Imagen_Producto" => $Imagen_Producto,
                    "cantidad" => $Imagen_Producto
                );
                $_SESSION["carrito"][0] = $productos;
            } else {
                $productosAgregados = array_column($_SESSION["carrito"], "idProducto");

                if (!in_array($idProducto, $productosAgregados)) {
                    $numeroProductos = count($_SESSION["carrito"]);

                    $productos = array(
                        "idProducto" => $idProducto,
                        "nombreProducto" => $nombreProducto,
                        "precioProducto" => $precioProducto,
                        "Imagen_Producto" => $Imagen_Producto
                    );
                    $_SESSION["carrito"][$numeroProductos] = $productos;
                }
            }
            $json = json_encode($_SESSION["carrito"], JSON_UNESCAPED_UNICODE);
            print_r($json);
        }
    }
} else {
    print_r(1);
}

/*
1 -> No esta Logeado
2 -> Producto ya agregado
*/