<?php
include("Conexion.php");
$sql = "SELECT IdProducto, Nombre_producto, Precio, Id_Categoria, Imagen_Producto FROM Producto NATURAL JOIN img_producto ";
$query = $conexion->query($sql);

if (!$query) {
    die("Ocurrio un error: " . $conexion->connect_error);
}

$arreglo = array();
while ($row = $query->fetch_object()) {
    $arreglo[] = array(
        "IdProducto" => $row->IdProducto,
        "Nombre_producto" => $row->Nombre_producto,
        "Precio" => $row->Precio,
        "Id_Categoria" => $row->Id_Categoria,
        "Imagen_Producto" => $row->Imagen_Producto

    );
}

$json = json_encode($arreglo, JSON_UNESCAPED_UNICODE);
print_r($json);


