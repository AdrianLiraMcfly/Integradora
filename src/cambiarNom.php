<?php
include 'conexionbd.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos aquí
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST["newName"];
    $userId = $_SESSION['id'];

    // Actualizar el nombre de usuario en la base de datos
    $sql = "UPDATE usuarios SET nombre = :newName WHERE id_usuario = :userId";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(":newName", $newName);
    $stmt->bindParam(":userId", $userId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $_SESSION['nombre'] = $newName;
        $mensajeAlerta = "¡Nombre cambiado exitosamente!";
        header('location: ../configuracion.php?mensaje='. urlencode($mensajeAlerta));
        exit();
    } else {
        $mensajeAlerta = "¡Error al cambiar nombre de usuario!";
            header('location: ../configuracion.php?mensajerr='. urlencode($mensajeAlerta));
            exit();
    }
}
?>