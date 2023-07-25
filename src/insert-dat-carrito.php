<?php
session_start();

if (!isset($_POST['btnPedido'])){
    echo 'ERROR';
    exit();
}

include 'conexionbd.php';
$bd->beginTransaction();

try {
    // Insertar productos en la tabla detalles_carrito
    $sentencia_producto = $bd->prepare("INSERT INTO detalles_carrito (id_producto, cantidad, precio_unitario, id_carrito) VALUES (?,?,?,?);");
    foreach ($_SESSION['CARRITO'] as $indice => $dato) {
        $sentencia_producto->execute([$dato['ID'], $dato['CANTIDAD'], $dato['PRECIO'], NULL]); // Dejar id_carrito como NULL por ahora
    }

    // Insertar registro en la tabla carrito
    $id_usuario = $_SESSION['id'];
    $sentencia_carrito = $bd->prepare("INSERT INTO carrito (id_usuario, fecha_venta, total) VALUES (?, NOW(), ?);");
    $sentencia_carrito->execute([$id_usuario, NULL]);

    // Obtener el id_carrito recién insertado
    $id_carrito = $bd->lastInsertId();

    // Actualizar id_carrito en la tabla detalles_carrito
    $sentencia_update = $bd->prepare("UPDATE detalles_carrito SET id_carrito = ? WHERE id_carrito IS NULL;");
    $sentencia_update->execute([$id_carrito]);

    // Confirmar la transacción
    $bd->commit();

    // Redireccionar después de completar la inserción
    header('location: convert_to_pdf.php');
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $bd->rollback();
    echo "Error al procesar la compra: " . $e->getMessage();
}



//$sentencia = $bd->prepare("INSERT INTO detalles_carrito (id_producto, cantidad, precio_unitario) VALUES (?,?,?);");
//
//foreach($_SESSION['CARRITO'] as $indice => $dato){
//$sentencia->execute([$dato['ID'],$dato['CANTIDAD'],$dato['PRECIO']]);
//header('location: ../carrito.php');
//}
//$id_usuario = $_SESSION['id'];
//$sentencia = $bd->prepare("INSERT INTO carrito (id_usuario, fecha_venta, total) VALUES (?, NOW(), ?);");
//$sentencia->execute([$id_usuario, NULL])



//$Nombre = $_POST['txtNombre'];
//$Telefono = $_POST['txtTelefono'];
//$Correo = $_POST['txtCorreo'];
//
//$sentencia = $bd->prepare("INSERT INTO usuarios(Nombre,Telefono,Correo) values (?,?,?);");
//$resultado = $sentencia->execute([$Nombre,$Telefono,$Correo]);
//
//if($resultado === TRUE){
//    //echo "Insertado correctamente";
//    header('location: index.php');
//}else{
//    echo "ERROR";
//}
?>