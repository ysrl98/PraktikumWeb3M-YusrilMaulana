<?php
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'b', 18);
$pdf->Image('assets/assets/img/cart.png', 27,5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'b', 20);
$pdf->Cell(0, 5, 'KOPERASI HARUM MANIS bERSATU', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'b', 10);
$pdf->Cell(0, 5, 'Website :' . 'WWW.HARUMbERSATU.COM' . '/E-mail :' . 'admin@harumbersatu.com', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'b', 10);
$pdf->Cell(0, 5, 'banjarmasin Utara' . ' Telp. / Fax : ' . ' 081349685149' . ' / ' . 'KOPERASI HARUM MANIS bERSATU', 0, 1, 'C');


$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);
$pdf->Cell(30, 17, '', 0, 1);

$pdf->SetFont('Times', '', 10);