<?php
session_start();
require '../config/database.php';

$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

if ($id > 0) {
    // Eliminar registro en la tabla "categorias"
    $sqlCategorias = "DELETE FROM categorias WHERE id_categoria = ?";
    $stmtCategorias = $conn->prepare($sqlCategorias);
    $stmtCategorias->bind_param("i", $id);

    // Ejecutar la consulta de eliminación en la tabla "categorias"
    if ($stmtCategorias->execute()) {
        // Eliminación exitosa en la tabla "categorias"
        $_SESSION['color'] = "success";
        $_SESSION['msg'] = "Registro eliminado";
    } else {
        // Manejo del error en la eliminación en la tabla "categorias"
        $_SESSION['color'] = "danger";
        $_SESSION['msg'] = "Error al eliminar registro en la tabla 'categorias'";
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
