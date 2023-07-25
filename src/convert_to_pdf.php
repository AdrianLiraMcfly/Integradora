<?php
require '../vendor/autoload.php';
include 'conexionbd.php';

use Dompdf\Dompdf;
$dompdf=new Dompdf();

$opt=$dompdf->getOptions();

$opt->set(array('isRemoteEnabled' => TRUE));

$dompdf->setOptions($opt);

$rutaContent = 'pdf.php';

include $rutaContent;
$contenido = ob_get_clean();

// Carga el contenido HTML en Dompdf
$dompdf->loadHtml($contenido);

$dompdf->setPaper('letter');

// Opciones de estilo (opcional)
$dompdf->set_option('isRemoteEnabled', true); // Permite cargar imágenes desde URLs externas

// Renderiza el contenido HTML en PDF
$dompdf->render();

// Genera el archivo PDF
$dompdf->stream("Folio.pdf", array("Attachment" => false));
?>