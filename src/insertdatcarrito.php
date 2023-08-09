<?php
session_start();
include 'conexionbd.php';
if (!isset($_POST['btnPedido'])) {
    echo 'ERROR';
    exit();
}
if (isset($_POST['txtTotal'])) {
    $total = $_POST['txtTotal'];
}


$sumaCantidades = 0;

foreach ($_SESSION['CARRITO'] as $indice => $cantidad) {
    $sumaCantidades += $cantidad['CANTIDAD'];
}

$IDxUSUARIO = $_SESSION['id'];
$sentenciaX = $bd->query("CALL pedidos_recientes($IDxUSUARIO);");
$personaX = $sentenciaX->fetchAll(PDO::FETCH_ASSOC);
$NUMxPEDIDOSxCANCELADOS = 0;

foreach ($personaX as $dato) {
    if ($dato['id_estado'] == 1) {
        $NUMxPEDIDOSxCANCELADOS++;
    }
}
$sentenciaX->closeCursor();

if ($NUMxPEDIDOSxCANCELADOS > 3) {

    header("location: ../carrito.php");
    $sentenciaX = $bd->query("CALL suspender_usuario($IDxUSUARIO);");
    $personaX = $sentenciaX->fetchAll(PDO::FETCH_ASSOC);
    
} else {
    $bd->beginTransaction();

    try {
        $NumProductos = 0;
        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
            $NumProductos += $producto['CANTIDAD'];
        }
        if ($NumProductos > 4) {
            echo "La cantidad maxima total de articulos que puedes pedir es de 4.";
        } else {

            $sentencia_producto = $bd->prepare("INSERT INTO detalles_carrito (id_producto, cantidad, precio_unitario, id_carrito) VALUES (?,?,?,?);");
            foreach ($_SESSION['CARRITO'] as $indice => $dato) {
                $sentencia_producto->execute([$dato['ID'], $dato['CANTIDAD'], $dato['PRECIO'], NULL]);
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
