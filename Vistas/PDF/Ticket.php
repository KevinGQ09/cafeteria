<?php
include("../../Config/Global.php");
include("../../FPDF/fpdf.php");
include("NumeroLetras.php");

define('MONEDA', '$');
define('MONEDA_LETRA', 'pesos');
define('MONEDA_DECIMAL', 'centavos');

if (isset($_SESSION['ultimaCompra'])) {
    $idVenta = $_SESSION['ultimaCompra']['idCompra'];
    $productos = $_SESSION['ultimaCompra']['productos'];
    $total = $_SESSION['ultimaCompra']['total'];
} else {
    die("No hay datos de la compra");
}

$pdf = new FPDF('P', 'mm', array(80, 200));
$pdf->AddPage();
$pdf->SetMargins(5, 5, 5);
$pdf->SetFont('Arial', 'B', 9);

$pdf->Image('../../imagenes/logo.jpg', 33, 2, 15);

$pdf->Ln(7);

$pdf->MultiCell(70, 5, 'Cafeteria', 0, 'C');

$pdf->Ln(1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(17, 5, mb_convert_encoding('Núm ticket: ', 'ISO-8859-1', 'UTF-8'), 0, 0, 'L');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(53, 5, $idVenta, 0, 1, 'L');

$pdf->Cell(70, 2, '-------------------------------------------------------------------------', 0, 1, 'L');

$pdf->Cell(10, 4, 'Cant.', 0, 0, 'L');
$pdf->Cell(30, 4, mb_convert_encoding('Descripción', 'ISO-8859-1', 'UTF-8'), 0, 0, 'L');
$pdf->Cell(15, 4, 'Precio', 0, 0, 'C');
$pdf->Cell(15, 4, 'Importe', 0, 1, 'C');

$pdf->Cell(70, 2, '-------------------------------------------------------------------------', 0, 1, 'L');

$totalProductos = 0;
$pdf->SetFont('Arial', '', 7);

foreach ($productos as $producto) {
    $pdf->Cell(10, 4, $producto['cantidad'], 0, 0, 'L');

    $yInicio = $pdf->GetY();
    $pdf->MultiCell(30, 4, mb_convert_encoding($producto['nombreProducto'], 'ISO-8859-1', 'UTF-8'), 0, 'L');
    $yFin = $pdf->GetY();

    $pdf->SetXY(45, $yInicio);

    $pdf->Cell(15, 4, MONEDA . ' ' . number_format($producto['precioTotal'] / $producto['cantidad'], 2, '.', ','), 0, 0, 'C');

    $pdf->SetXY(60, $yInicio);
    $pdf->Cell(15, 4, MONEDA . ' ' . number_format($producto['precioTotal'], 2, '.', ','), 0, 1, 'R');
    $pdf->SetY($yFin);
}

$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(70, 5, sprintf('Total: %s  %s', MONEDA, number_format($total, 2, '.', ',')), 0, 1, 'R');

$pdf->Ln(2);

$pdf->Cell(35, 5, 'Fecha: ' . date('d-m-Y'), 0, 0, 'C');

$pdf->Ln();

$pdf->MultiCell(70, 5, 'AGRADECEMOS SU PREFERENCIA VUELVA PRONTO!!!', 0, 'C');

$pdf->Output();
?>
