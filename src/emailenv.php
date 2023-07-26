<?php
require '../vendor/autoload.php';
$dompdf=new dompdf();
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
    
    $mail->addStringAttachment($pdfward, 'Folio.pdf');    //Optional name

    //Content
    $mail->isHTML(true);                  //Set email format to HTML
    $mail->Subject = 'Folio de compra';
    $mail->Body    = 'Favor de presentar su folio en el local 322 de la plaza de la tecnologia';
    $mail->send();
    $dompdf->stream($dompdf->$pdfward, array("Attachment" => false));
    header('Location: ../index.php');
} 
catch (Exception $e) 
{
    echo "<script>alert('Error al enviar el correo: " . $mail->ErrorInfo . "');</script>";
}
?> 
?>