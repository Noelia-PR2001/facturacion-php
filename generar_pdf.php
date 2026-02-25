<?php
require __DIR__ . '/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

try {

    ob_start();
    require __DIR__ . '/bill_pdf.php';
    $html = ob_get_clean();

    $html2pdf = new Html2Pdf(
        'P',
        'A4',
        'es',
        true,
        'UTF-8',
        array(5,5,0,5)
    );

    $html2pdf->writeHTML($html);

    
    $pdfContent = $html2pdf->output('', 'S');

} catch (Exception $e) {
    echo 'Error generando PDF: ' . $e->getMessage();
}