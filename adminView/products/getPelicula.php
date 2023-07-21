<?php

require 'config/database.php';

$id = $conn->real_escape_string($_POST['id']); 

$sql = "SELECT p.id_producto, p.nombre, p.descripcion, p.precio, p.id_categoria, i.cantidad
FROM productos p
LEFT JOIN inventario i ON p.id_producto = i.id_producto
WHERE p.id_producto = $id
LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$pelicula = [];

if ($rows > 0) {
    $pelicula = $resultado->fetch_array();
}

echo json_encode($pelicula, JSON_UNESCAPED_UNICODE);
