<?php

session_start();

require '../../products/config/database.php';  

$id = $conn->real_escape_string($_POST['id']); 
$nombre = $conn->real_escape_string($_POST['estado']);



$sql = "UPDATE carrito SET id_estado =$nombre WHERE id_carrito=$id";
if ($conn->query($sql)) {

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro actualizado";

} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al actualizar registro";
}


header('Location: pendientes.php');
