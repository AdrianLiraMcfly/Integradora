<?php



session_start();

require '../config/database.php';

$nombre = $conn->real_escape_string($_POST['nombre']);

$sql = "INSERT INTO categorias (nombre)
VALUES ('$nombre')";
if ($conn->query($sql)) {
    $id = $conn->insert_id;

    $sqlInventario = "INSERT INTO inventario (id_producto, cantidad)
    VALUES ($id, $inventario)";
    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro guardado";

} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al guarda imágen";
}

header('Location: index2.php');
