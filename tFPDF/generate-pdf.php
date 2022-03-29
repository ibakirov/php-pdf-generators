<?php

require_once __DIR__ . '../../bootstrap.php';

$ad_r = "Марат";
$soyad_r = "Асанов";
$babaad_r = "Интерполович";
$dtarih =  "2020-20-20";
$fakulte =  "Факультет";
$bolum =  "Инженерия";
$numara_m = 232323;

$pdf = new tFPDF();
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

// Load a UTF-8 string from a file and print it
$txt = file_get_contents('HelloWorld.txt');
$pdf->Write(8,$txt);

// Записываем разный текст
$pdf->Ln(10);
$pdf->Write(8,'Привет как твои дела');
$pdf->Ln(10);
$pdf->Write(8,$numara_m);
$pdf->Ln(10);
$pdf->Write(8,$bolum);
$pdf->Ln(10);
$pdf->Write(8,$babaad_r);
$pdf->Ln(10);
$pdf->Write(8,'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ.');
$pdf->Ln(10);
$pdf->Write(8,'абвгдеёжзийклмнопрстуфхцчшщъыьэюя.');
$pdf->Ln(10);
$pdf->Write(8,'0123456789.');
$pdf->Ln(10);
$pdf->Write(8,'Этот PDF файл весит около 17 КБ.');
$pdf->Ln(10);

// Сохраняем в файл для скачивания
$pdf->Output('sample.pdf', 'F');
