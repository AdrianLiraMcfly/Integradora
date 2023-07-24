<?php

session_start();

require '../config/database.php';  

$id = $conn->real_escape_string($_POST['id']); 
$nombre = $conn->real_escape_string($_POST['nombre']);


$sql = "UPDATE categorias SET nombre ='$nombre' WHERE id_categoria=$id";
if ($conn->query($sql)) {

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro actualizado";

} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al actualizar registro";
}


header('Location: index2.php');
