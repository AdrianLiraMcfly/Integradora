<?php
session_start();
include "conexionbd.php";

if (!isset($_POST['btnPedido'])) {
    echo 'ERROR PENE';
    exit();
}

if (isset($_POST['txtTotal'])) {
    $total = $_POST['txtTotal'];
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
$cantidadCero = false;

foreach ($_SESSION['CARRITO'] as $indice => $cantidad) {
    if ($cantidad['CANTIDAD'] <= 0) {
        $cantidadCero = true;
        break;
    }
}
$sentenciaX->closeCursor();

if ($NUMxPEDIDOSxCANCELADOS > 3) {

    header("location: ../carrito.php");
    $sentenciaX = $bd->query("CALL suspender_usuario($IDxUSUARIO);");
    $personaX = $sentenciaX->fetchAll(PDO::FETCH_ASSOC);
} else {
    if($cantidadCero == true){
        $mensaje = "Hola, tienes la cantidad de algun articulo en cero o menos y eso no se puede.";
        header("Location: ../carrito.php?mensajeMalo=" . urlencode($mensaje));
        exit();
    }
    else{

    $bd->beginTransaction();

    try {

        $NumProductos = 0;
        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
            $NumProductos += $producto['CANTIDAD'];
            $IdProducto = $producto['ID'];
            $consulta = $bd->query("SELECT * FROM productos p INNER JOIN inventario i ON i.id_producto = p.id_producto WHERE p.id_producto = $IdProducto;");

            $consultaX = $consulta->fetch(PDO::FETCH_ASSOC);
            if ($consultaX['cantidad'] < $producto['CANTIDAD']) {
                $IDxPRODUCTOS[] = $consultaX['id_producto'];
            }
        }
        if (empty($IDxPRODUCTOS)) {
            if ($NumProductos > 12) {
                echo "La cantidad maxima total de articulos que puedes pedir es de 12.";
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

                $_SESSION['CARRITOback'] = $_SESSION['CARRITO'];
                unset($_SESSION['CARRITO']);
                print_r($_SESSION['CARRITOback']);
                echo "pan";
                header('location: convertpdf.php');
                $bd = NULL;
            }
        } else {
            print_r($IDxPRODUCTOS);
            $IDxPRODUCTOS2 = urlencode(serialize($IDxPRODUCTOS));
            echo 'hola';
            header("Location: ../carrito.php?dato=" . $IDxPRODUCTOS2);
        }
    } catch (Exception $e) {
        $bd->rollback();
        echo "Error al procesar la compra: " . $e->getMessage();
        $bd = NULL;
    }
}
}