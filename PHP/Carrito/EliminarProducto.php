<?php
include("ConfigCarrito.php");

if (isset($_POST)) {
    $idProducto = $_POST['idProducto'];
     
    if (isset($_SESSION['carrito'])) {
        foreach ($_SESSION['carrito'] as $key => $producto) {
            if ($producto['idProducto'] == $idProducto) {
                unset($_SESSION['carrito'][$key]);
                
            }
        }
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
      
        $json = json_encode($_SESSION['carrito'], JSON_UNESCAPED_UNICODE);
        echo $json;
    } 
} 
   

?>
