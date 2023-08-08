<?php
session_start();
require 'config/database.php';

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id > 0) {
    // Eliminar registros en la tabla "detalles_carrito" que dependen del producto
    $sqlDetallesCarrito = "DELETE FROM detalles_carrito WHERE id_producto = ?";
    $stmtDetallesCarrito = $conn->prepare($sqlDetallesCarrito);
    $stmtDetallesCarrito->bind_param("i", $id);

    // Ejecutar la consulta de eliminación en la tabla "detalles_carrito"
    if ($stmtDetallesCarrito->execute()) {
        // Eliminar registro en la tabla "inventario"
        $sqlInventario = "DELETE FROM inventario WHERE id_producto = ?";
        $stmtInventario = $conn->prepare($sqlInventario);
        $stmtInventario->bind_param("i", $id);

        // Ejecutar la consulta de eliminación en la tabla "inventario"
        if ($stmtInventario->execute()) {
            // Eliminación exitosa en la tabla "inventario", ahora eliminar registro en la tabla "productos"
            $sqlProductos = "DELETE FROM productos WHERE id_producto = ?";
            $stmtProductos = $conn->prepare($sqlProductos);
            $stmtProductos->bind_param("i", $id);

            // Ejecutar la consulta de eliminación en la tabla "productos"
            if ($stmtProductos->execute()) {
                // Eliminación exitosa en ambas tablas

                // Eliminar archivo de imagen asociado (opcional, si aplicable)
                $dir = "posters";
                $poster = $dir . '/' . $id . '.jpg';

                if (file_exists($poster)) {
                    unlink($poster);
                }

                $_SESSION['color'] = "success";
                $_SESSION['msg'] = "Registro eliminado";
            } else {
                // Manejo del error en la eliminación en la tabla "productos"
                $_SESSION['color'] = "danger";
                $_SESSION['msg'] = "Error al eliminar registro en la tabla 'productos'";
            }
        } else {
            // Manejo del error en la eliminación en la tabla "inventario"
            $_SESSION['color'] = "danger";
            $_SESSION['msg'] = "Error al eliminar registro en la tabla 'inventario'";
        }
    } else {
        // Manejo del error en la eliminación en la tabla "detalles_carrito"
        $_SESSION['color'] = "danger";
        $_SESSION['msg'] = "Error al eliminar registros en la tabla 'detalles_carrito'";
    }
} else {
    // Manejo del caso de ID inválido
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "ID inválido";
}

// Redirigir a la página deseada después de la eliminación (independientemente del resultado)
header('Location: index2.php');
exit();
?>