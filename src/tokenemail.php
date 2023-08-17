<?php
session_start();
include 'conexionbd.php';
$email = $_GET['email'];
$token = $_GET['token'];
$activationLink = "http://52.23.174.251/src/activarcuenta.php?token=" . urlencode($token); // Usar http:// en lugar de solo la IP

require 'bootstrap.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'videogame.store314@gmail.com';
    $mail->Password   = 'yuyphigctktwzqoj';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet = 'UTF-8';

    // Recipients
    $mail->setFrom('videogame.store314@gmail.com', 'VideoGame Store');
    $mail->addAddress($email);

    // Content
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Correo de confirmación</title>
        <style>
            /* Estilos en línea */
            img {
                max-width: 300px;
                height: auto;
            }
            .container {
                text-align: center;
            }
            h1, p {
                font-family: Arial, sans-serif;
                color: #333333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Gracias por unirte a Videogame Store!</h1>
            <p>Por favor, <a href="' . $activationLink . '">haz clic aquí</a> para activar tu cuenta.</p>
            <p>Una vez que hayas hecho clic en el enlace, serás redirigido a nuestra página principal donde podrás iniciar sesión y tu cuenta será totalmente funcional.</p>
            <p>VideoGame Store agradece tu fidelidad y preferencia.</p>
        </div>
    </body>
    </html>';

    $mail->isHTML(true);
    $mail->Subject = 'VideoGame Store: Activa Tu cuenta';
    $mail->Body    = $body;

    $mail->send();
    
    $mensajeAlerta = "¡Correo de activación enviado! Activa tu cuenta para poder iniciar sesión.";
    header('Location: ../sesiones/login.php?mensajegood=' . urlencode($mensajeAlerta));
    exit();
} catch (Exception $e) {
    $mensajeAlerta = "Error al enviar el correo. Por favor, verifica tu dirección de correo electrónico.";
    header("Location: ../sesiones/register.php?mensaje=" . urldecode($mensajeAlerta));
}
$bd = NULL;
