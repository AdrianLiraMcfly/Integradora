<?php
include '../src/conexionbd.php';

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
ob_start();
?>
<!DOCTYPE html>
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
       
        
        <?php
        $img= '../vd_logo.png';
        $imgDate=base64_encode(file_get_contents($img));
        $mine=mime_content_type($img);
        $src="data:{$mine};base64,{$imgDate}";
        echo '<img src="'.$src.'">';
        ?> 
    

    
    <h1>Gracias por comprar con nostros!</h1>


    <h1>Folio:<?php echo $folio;?> </h1>

       <p>Favor de pasar al Local 314 Videogame Store a recoger su producto antes de las proximas 48Hrs o sus productos de carrito seran devueltos a venta del publico.</p>
       <p>VideoGame Store agradece su fidelidad y preferencia.</p>
 </div>
 <?php $bd = NULL; ?>
</body>
</html>