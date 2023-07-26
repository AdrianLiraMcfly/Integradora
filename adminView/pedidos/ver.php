<?php


require 'config/database.php'; 

$id_carrito = $conn->real_escape_string($_POST['id_carrito']);
$id_usuario = $conn->real_escape_string($_POST['id_usuario']);

$sql = "SELECT id_carrito, id_usuario FROM carrito WHERE id_carrito = $id_carrito AND id_usuario = $id_usuario LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$carritoUsuario = [];

if ($rows > 0) {
    $carritoUsuario = $resultado->fetch_assoc();
}

echo json_encode($carritoUsuario, JSON_UNESCAPED_UNICODE);
?>