<?php

require '../../products/config/database.php';

$id = $conn->real_escape_string($_POST['id']); 

$sql = "SELECT c.id_carrito, c.id_estado
FROM  carrito c
WHERE c.id_carrito = $id
LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$pelicula = [];

if ($rows > 0) {
    $pelicula = $resultado->fetch_array();
}

echo json_encode($pelicula, JSON_UNESCAPED_UNICODE);
