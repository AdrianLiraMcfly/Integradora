<?php
require '../vendor/autoload.php';
include 'conexionbd.php';

use Dompdf\Dompdf;
$dompdf=new Dompdf();
$rutaContent = '../pdf.php';

// Obtén el contenido del archivo "pdf_content.php" ordenado por el ID del carrito
ob_start();
include $rutaContent;
$contenido = ob_get_clean();

// Carga el contenido HTML en Dompdf
$dompdf->loadHtml($contenido);

// Opciones de estilo (opcional)
$dompdf->set_option('isRemoteEnabled', true); // Permite cargar imágenes desde URLs externas

// Renderiza el contenido HTML en PDF
$dompdf->render();

// Genera el archivo PDF
$dompdf->stream("Folio.pdf", array("Attachment" => false));
?>