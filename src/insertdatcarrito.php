<?php
session_start();
if (!isset($_POST['btnPedido'])){
    echo 'ERROR';
    exit();
}
if(isset($_POST['txtTotal'])){
    $total = $_POST['txtTotal'];
}


$sumaCantidades = 0;

foreach ($_SESSION['CARRITO'] as $indice => $cantidad) {
    $sumaCantidades += $cantidad['CANTIDAD'];
}

if($sumaCantidades > 4){

     echo "<div class='alert alert-warning'> <b>  AQUI VA EL MENSAJE  </b> <a href='../carrito.php' style='background-color: red; border-radius: 5px; border: 3px red solid; color: white; text-decoration: none;'><b>Ver Carrito</b></a> </div>";
     

}else{

    include 'conexionbd.php';
$bd->beginTransaction();

try {
    $NumProductos = 0;
    foreach($_SESSION['CARRITO'] as $indice => $producto){
        $NumProductos += $producto['CANTIDAD'];
    }
    if($NumProductos > 4){
        echo "La cantidad maxima total de articulos que puedes pedir es de 4.";
    }else{

    $sentencia_producto = $bd->prepare("INSERT INTO detalles_carrito (id_producto, cantidad, precio_unitario, id_carrito) VALUES (?,?,?,?);");
    foreach ($_SESSION['CARRITO'] as $indice => $dato) {
        $sentencia_producto->execute([$dato['ID'], $dato['CANTIDAD'], $dato['PRECIO'], NULL]); // Dejar id_carrito como NULL por ahora
    }

    $id_usuario = $_SESSION['id'];
    $sentencia_carrito = $bd->prepare("INSERT INTO carrito (id_usuario, fecha_venta, total) VALUES (?, NOW(), ?);");
    $sentencia_carrito->execute([$id_usuario, $total]);

    $id_carrito = $bd->lastInsertId();
    $sentencia_update = $bd->prepare("UPDATE detalles_carrito SET id_carrito = ? WHERE id_carrito IS NULL;");
    $sentencia_update->execute([$id_carrito]);

    $bd->commit();
    header('location: ../carrito.php');
    $bd = NULL;
    
    }

} catch (Exception $e) {
    $bd->rollback();
    echo "Error al procesar la compra: " . $e->getMessage();
    $bd = NULL;
}

}
?>