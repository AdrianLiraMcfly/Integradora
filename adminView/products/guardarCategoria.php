<?php 
session_start();

include 'config/database.php';

$categoria = $conn->real_escape_string($_POST['nombre']);

$sql = "INSERT INTO categorias (nombre)
VALUES ('$categoria')";
if ($conn->query($sql)) {
    $_SESSION['color']="success";
    $_SESSION['msg'] = "Reistro guardado";
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al guardar registro";  
}

header('Location: nuevaCategoria.php');

?>