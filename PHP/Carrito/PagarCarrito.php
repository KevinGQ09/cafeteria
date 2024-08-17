<?php
include("../../Config/Global.php");
include("../Conexion.php");

if (isset($_POST)) {
    $IdUsuario = $_SESSION['IdUsuario'];
    $Total = $_POST['totalPagar'];
    $productos = $_POST['productosInfo'];

    $arreglo = array();
    foreach ($productos as $key => $value) {
        $arreglo[] = array(
            'idProducto' => $value['idProducto'],
            'nombreProducto'=> $value['nombreProducto'],
            'precio'=> $value['precio'],
            'cantidad' => $value['cantidad'],
            'precioTotal' => $value['precioTotal']
        );
    }

    $sql = $conexion->prepare("INSERT INTO compra (IdUsuario, TotalPagar, Fecha) VALUES (?, ?, CURDATE())");
    $sql->bind_param("id", $IdUsuario, $Total);
    if ($sql->execute()) {
        $idCompra = $conexion->insert_id;

        $respuesta = true;
        foreach ($arreglo as $producto) {
            $idProducto = $producto['idProducto'];
            $cantidad = $producto['cantidad'];
            $precioTotal = $producto['precioTotal'];

            $sql = $conexion->prepare("INSERT INTO detalle_compra (IdProducto, Cantidad, CostoPorProducto, IdCompra) VALUES (?, ?, ?, ?)");
            $sql->bind_param("iidi", $idProducto, $cantidad, $precioTotal, $idCompra);
            if (!$sql->execute()) {
                $respuesta = false;
                break;
            }
        }

        if ($respuesta) {
            unset($_SESSION['carrito']);
            $_SESSION['carrito'] = array();

            // Guardar la información de la compra en la sesión
            $_SESSION['ultimaCompra'] = array(
                'idCompra' => $idCompra,
                'productos' => $arreglo,
                'total' => $Total
            );

            $alerta = array(
                "title" => "FELICIDADES",
                "text" => "Compra Exitosa",
                "type" => "success",
                "icon" => $rutaRaiz . "plugins/toasts/icons/icon_success.png",
                "timeout" => 3000,
                "redirectUrl" => $rutaRaiz . "Vistas/PDF/Ticket.php?id=" . $idCompra // Redirigir a ticket.php
            );

            $json = json_encode($alerta, JSON_UNESCAPED_UNICODE);
            print_r($json);
        } else {
            // Manejar el error
        }
    } else {
        // Manejar el error
    }
}
?>
