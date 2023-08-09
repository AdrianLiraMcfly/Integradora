<?php

session_start();

require '../../products/config/database.php';  

$id = $conn->real_escape_string($_POST['id']); 
$nombre = $conn->real_escape_string($_POST['rol']);

$estado = $conn->real_escape_string($_POST['estado']);




$consulta = "UPDATE usuarios SET id_estado = $estado WHERE id_usuario = $id";
if ($conn->query($consulta)) {

    $consulta2 = "CALL activar_usuario($id);";
    $conn->query($consulta2);
    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro actualizado";

} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al actualizar registro";
}

$sql = "UPDATE usuarios SET id_rol = $nombre WHERE id_usuario=$id";
if ($conn->query($sql)) {

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro actualizado";

} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al actualizar registro";
}


header('Location: clientes.php');
