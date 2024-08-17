<?php
include("../../Config/Global.php");
session_destroy();

// Devolver respuesta JSON
echo json_encode(true);
exit();
?>
