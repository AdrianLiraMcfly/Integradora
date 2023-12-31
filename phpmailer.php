<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require __DIR__ . '/src/bootstrap.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//$remitente = $_POST['remitente'];
$destinatario = $_POST['destinatario'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$send = $_POST['send'];

//Load Composer's autoloader
//require 'vendor/autoload.php';

try 
{
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'videogame.store314@gmail.com';            //SMTP username
    $mail->Password   = 'yuyphigctktwzqoj';                //SMTP password
    $mail->SMTPSecure = 'tls';       //Enable implicit TLS encryption
    $mail->Port       = 587;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($destinatario, 'Cliente');
    $mail->addAddress('videogame.store314@gmail.com');     //Add a recipient
    
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('img/op.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;

    $mail->send();
    echo "<script> alert(Mensaje enviado)</script>";
    header('Location: contactanos.php');
} 
catch (Exception $e) 
{
    $mensajeAlerta = "Error al enviar correo, favor de llenar todos los campos.";
    header('Location: contactanos.php?mensaje=' . urlencode($mensajeAlerta));
    exit();
}

//