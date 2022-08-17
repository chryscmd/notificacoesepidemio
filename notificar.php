<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
//$mpdf->SetImportUse(); // only with mPDF <8.0

//$mpdf->SetDocTemplate('Ficha_DENGCHIK_EDITAVEL_FINALIZADA',true);

// Do not add page until doc template set, as it is inserted at the start of each page
//$mpdf->AddPage();
$mpdf->WriteHTML('Hello World');

// Subsequent pages from logoheader.pdf will be inserted on all subsequent pages
//$mpdf->Output();

?>