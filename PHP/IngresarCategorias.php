<?php
include("Conexion.php");
$sql = "SELECT * FROM categoria";

$query = $conexion->query($sql);

if (!$query) {
    die("Ocurrio un error: " . $conexion->connect_error);
}

$arreglo = array();
while ($row = $query->fetch_object()) {
    $arreglo[] = array(
        "IdCategoria" => $row->IdCategoria,
        "Nombre_categoria" => $row->Nombre_categoria,
        "Img_categoria" => $row->Img_categoria
    );
}

$json = json_encode($arreglo, JSON_UNESCAPED_UNICODE);
print_r($json);
