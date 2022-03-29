<?php

require_once __DIR__ . '../../bootstrap.php';

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ilyas Bakirov');
$pdf->SetTitle('PHP PDF GENERATOR');
$pdf->SetSubject('PHP TCPDF USAGE');
$pdf->SetKeywords('PHP, TCPDF, PDF, GENERATOR');

// add Page
$pdf->AddPage();

// add content
$pdf->setFont('Helvetica', '', 24);
$pdf->Cell(190, 10, 'Unicode Text', 0, 1, 'C');

// Japanese
$pdf->setFont('cid0jp');
$pdf->Cell(190, 10, 'Japanese: プレーンテキストの例', 0, 1);

// Korean
$pdf->setFont('cid0kr');
$pdf->Cell(190, 10, 'Korean: 일반 텍스트 예', 0, 1);

// Chinese Traditional
$pdf->setFont('cid0ct');
$pdf->Cell(190, 10, 'Chinese Traditional: 純文本示例', 0, 1);

// Chinese Simplified
$pdf->setFont('cid0cs');
$pdf->Cell(190, 10, 'Chinese Simplified: 纯文本示例', 0, 1);

$pdf->Ln();

// Hindi
$pdf->setFont('freesans');
$pdf->Cell(190, 10, 'Hindi sans: सादा पाठ उदाहरण', 0, 1);

// Arabic
$pdf->setFont('freesans');
$pdf->Cell(190, 10, 'Arabic sans: مثال على نص عادي', 0, 1);

// Cyrillic, Hebrew and Greek
$pdf->setFont('freesans');
$pdf->Cell(190, 10, 'Cyrillic sans: Пример простого текста', 0, 1);

$pdf->Ln();

// Kyrgyz
$pdf->setFont('freesans');
$pdf->Cell(190, 10, 'Kyrgyz sans: Кыргызстан - расмий түрдө Кыргыз Республикасы.', 0, 1);

$pdf->Ln();

$pdf->setFont('freesans');
$pdf->Cell(190, 10, 'Hebrew sans: דוגמא לטקסט רגיל', 0, 1);

$pdf->Ln();

$pdf->setFont('freesans');
$pdf->Cell(190, 10, 'Greek sans: Παράδειγμα απλού κειμένου', 0, 1);

//Close and output PDF document
$pdf->Output(__DIR__ . '/sample.pdf', 'F');
