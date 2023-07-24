<?php


session_start();

require '../config/database.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "DELETE FROM categorias WHERE id_categoria=$id";
if ($conn->query($sql)) {

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro eliminado";
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al eliminar registro";
}

header('Location: index2.php');