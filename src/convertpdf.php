<?php
session_start();
include 'conexionbd.php';

$sentencia = $bd->query("SELECT id_order, fecha_limite FROM carrito ORDER BY id_carrito DESC LIMIT 1;");
$result = $sentencia->fetchAll(PDO::FETCH_OBJ);;
if ($result) {
    // Extraer el resultado de la consulta
    $row =$result[0];
    $folio = $row->id_order; // Puedes ajustar esta fórmula si es necesario
    $fecha_lim=$row->fecha_limite;
    $_SESSION["fechalim"]=$fecha_lim;
    $_SESSION["folio"]=$folio;
} else {
    // Manejar el caso de error en la consulta
    echo "Error en la consulta: " . mysqli_error($conn);
}
require 'bootstrap.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try 
{
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'videogame.store314@gmail.com';            //SMTP username
    $mail->Password   = 'yuyphigctktwzqoj';                  //SMTP password
    $mail->SMTPSecure = 'tls';       //Enable implicit TLS encryption
    $mail->Port       = 587;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('videogame.store314@gmail.com', 'VideoGame Store');
    $mail->addAddress($_SESSION['email']);     //Add a recipient
    
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
            <h1>Gracias por comprar con nosotros!</h1>
            <h1>Folio: '.$_SESSION['folio'].'</h1>
            <h2>Fecha limite para recoger:'.$_SESSION['fechalim'].'</h2> 
            <p>Favor de pasar al Local 314 Videogame Store a recoger su producto antes de los próximos 3 dias o sus productos de carrito serán devueltos a la venta al público.</p>
            <p>VideoGame Store agradece su fidelidad y preferencia.</p>
        </div>
    </body>
    </html>';
    $mail->isHTML(true);                  //Set email format to HTML
    $mail->Subject = 'VideoGame Store: Folio de compra';
    $mail->Body    = $body;

    $mail->send();
    $mensajeAlerta = "¡Folio de compra enviado a tu correo!";
    header('Location: ../carrito.php?mensaje='. urlencode($mensajeAlerta));
    exit();
} 
catch (Exception $e) 
{
    echo "<script>alert('Error al enviar el correo: " . $mail->ErrorInfo . "');</script>";
}
$bd = NULL;