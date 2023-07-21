<?php
include 'src/conexionbd.php';

$sentencia = $bd->query("SELECT id_carrito FROM carrito ORDER BY id_carrito DESC LIMIT 1;");
$result = $sentencia->fetchAll(PDO::FETCH_OBJ);;
if ($result) {
    // Extraer el resultado de la consulta
    $row =$result[0];
    $folio = $row->id_carrito; // Puedes ajustar esta fórmula si es necesario 
} else {
    // Manejar el caso de error en la consulta
    echo "Error en la consulta: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            position: relative;
            width: 100%;
            height: 200px;
            
        }
        .img, .color{
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
        }
        .color{
            background-color: #F9DD19;
            z-index: 1;
        }
        .img{
            z-index: 2;
            left: 37%;
        }
        .img img{
            width: 300px;
            height: 200px;
            
        }
        .content{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 300px; /* Altura deseada del contenedor */
        }
        .container-text{
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;;
        }
        .folio{
            display: flex;
            width: 40%;
            height: 20%;
            background-color: gray;
            position: absolute;
            top: 450px;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            justify-content: center;
            align-items: center;
            #finaltext{
                top: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
       
        <div class="img">
        <?php
        $img= 'vd_logo.png';
        $imgDate=base64_encode(file_get_contents($img));
        $mine=mime_content_type($img);
        $src="data:{$mine};base64,{$imgDate}";
        echo '<img src="'.$src.'">';
        ?> 
        </div>
</div>
<div class="content">
    <div class="content-text">
    <h1>Gracias por comprar con nostros!</h1>
</div>
</div>
<div class=" content-text folio">
    <h1>Folio:<?php echo $folio;?> </h1>
 </div>
 <div class="content"id="finaltext">
    <div class="content-text">
       <p>Favor de pasar al Local 314 Videogame Store a recoger su producto antes de las proximas 48Hrs o sus productos de carrito seran devueltos a venta del publico</p>
    </div>
 </div>
</body>
</html>