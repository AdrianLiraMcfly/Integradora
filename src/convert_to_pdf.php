<?php
require '../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf=new Dompdf();

ob_start();

include '../pdf.php';
$html=ob_get_clean();
$dompdf->loadHtml($html);


$dompdf->render();


$dompdf->stream('mi_archivo.pdf', ['Attachment' => true]);
?>