<?php
session_start();
include 'conexionbd.php';

$sentencia = $bd->query("SELECT id_order FROM carrito ORDER BY id_carrito DESC LIMIT 1;");
$result = $sentencia->fetchAll(PDO::FETCH_OBJ);;
if ($result) {
    // Extraer el resultado de la consulta
    $row =$result[0];
    $folio = $row->id_order; // Puedes ajustar esta fórmula si es necesario 
} else {
    // Manejar el caso de error en la consulta
    echo "Error en la consulta: " . mysqli_error($conn);
}

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
    $mail->SMTPSecure = 'tls';       //Enable implicit TLS encryption
    $mail->Port       = 587;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

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
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            img{
                width: 300px;
                height: 200px;
            }
                .container{
                    display:flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
    
                }
                p, h1{
                    font-family:sans-serif
                }
        </style>
    </head>
    <body>
        <div class="container">
        
    
        
        <h1>Gracias por comprar con nostros!</h1>
    
    
        <h1>Folio:'.$folio.'?> </h1>
    
           <p>Favor de pasar al Local 314 Videogame Store a recoger su producto antes de las proximas 48Hrs o sus productos de carrito seran devueltos a venta del publico.</p>
           <p>VideoGame Store agradece su fidelidad y preferencia.</p>
     </div>
    </body>
    </html>';
    $mail->send();
    $dompdf->stream($pdfward, array("Attachment" => false));
    exit();
} 
catch (Exception $e) 
{
    echo "<script>alert('Error al enviar el correo: " . $mail->ErrorInfo . "');</script>";
}
?> 
?>