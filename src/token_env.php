<?php
include 'conexionbd.php';
require 'bootstrap.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


$email=$_GET['email'];
$token=$_GET['token'];

$LinkAct = "http://52.23.174.251/activarcuenta.php?token=" . urlencode($token);

try 
{
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'videogamestore9@gmail.com';            //SMTP username
    $mail->Password   = 'qyltjnjtpxdcszsn';                 //SMTP password
    $mail->SMTPSecure = 'tls';       //Enable implicit TLS encryption
    $mail->Port       = 587;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('videogamestore9@gmail.com', 'Video Game Store');
    $mail->addAddress($email);     //Add a recipient
    
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('img/op.jpg');    //Optional name

    //Content
    $body='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Correo de confirmación</title>
        <style>
            /* Estilos en línea */
            img {
                width: 100%; /* Ajusta el tamaño de la imagen al 100% del contenedor */
                max-width: 300px; /* Establece el ancho máximo de la imagen */
                height: auto; /* Permite que la imagen conserve su relación de aspecto */
            }
            .container {
                text-align: center; /* Alinea el contenido al centro */
            }
            h1, p {
                font-family: Arial, sans-serif;
                color: #333333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Confirma tu cuenta de VideoGame Store!</h1>
            <h1><a href="'.$LinkAct.'">Activa tu cuenta</a></h1>
            <p>Favor de pasar al Local 314 Videogame Store a recoger su producto antes de los próximos 3 dias o sus productos de carrito serán devueltos a la venta al público.</p>
            <p>VideoGame Store agradece su fidelidad y preferencia.</p>
        </div>
    </body>
    </html>';
    $mail->isHTML(true);                  //Set email format to HTML
    $mail->Subject = 'VideoGame Store: Activa tu cuenta';
    $mail->Body    = $body;

    $mail->send();
    $mensajeAlerta = "¡Verifica tu correo para activar tu cuenta!";
    header('Location: ../index.php?mensaje='. urlencode($mensajeAlerta));
    exit();
} 
catch (Exception $e) 
{
    echo "<script>alert('Error al enviar el correo: " . $mail->ErrorInfo . "');</script>";
}
$bd = NULL;