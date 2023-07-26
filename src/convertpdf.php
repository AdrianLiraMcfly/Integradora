<?php
require '../vendor/autoload.php';
include 'conexionbd.php';
session_start();

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




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//Load Composer's autoloader
//require 'vendor/autoload.php';

try 
{
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'luismahe2004@gmail.com';            //SMTP username
    $mail->Password   = 'ebvwebdlbfxeavxs';                 //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       //Enable implicit TLS encryption
    $mail->Port       = 465;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('luismahe2004@gmail.com', 'Videogame Store');
    $mail->addAddress($_SESSION['email'], $_SESSION['nombre']);     //Add a recipient
    
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    $pdfward=$dompdf->output();
    $mail->addStringAttachment($pdfward, 'Folio.pdf');    //Optional name

    //Content
    $mail->isHTML(true);                  //Set email format to HTML
    $mail->Subject = 'Folio de compra';
    $mail->Body    = 'Favor de presentar su folio en el local 322 de la plaza de la tecnologia';
    $mail->send();
    $dompdf->stream("Folio.pdf", array("Attachment" => false));
    header('Location: ../index.php');
} 
catch (Exception $e) 
{
    echo "<script>alert('Error al enviar el correo: " . $mail->ErrorInfo . "');</script>";
}
?> 