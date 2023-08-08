<?php
include 'conexionbd.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmNewPassword = $_POST["confirmNewPassword"];

    // Obtener el ID del usuario de la sesión
    $userId = $_SESSION['id'];

    // Consultar la contraseña actual del usuario desde la base de datos
    $sql = "SELECT contraseña FROM usuarios WHERE id_usuario = :userId";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(":userId", $userId, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($currentPassword, $user["contraseña"])) {
        // Generar el nuevo hash de contraseña
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Realizar el cambio de contraseña
        $sql = "UPDATE usuarios SET contraseña = :newPassword WHERE id_usuario = :userId";
        $stmt = $bd->prepare($sql);
        $stmt->bindParam(":newPassword", $hashedNewPassword);
        $stmt->bindParam(":userId", $userId, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $mensajeAlerta = "¡Contraseña cambiada exitosamente!";
            header('location: ../configuracion.php?mensaje='. urlencode($mensajeAlerta));
            exit();
        } else {
            $mensajeAlerta = "¡Error al cambiar la contraseña!";
            header('location: ../configuracion.php?mensajerr='. urlencode($mensajeAlerta));
            exit();
        }
    } else {
        $mensajeAlerta = "¡La contraseña actual es incorrecta!";
        header('location: ../configuracion.php?mensajerr='. urlencode($mensajeAlerta));
        exit();
    }
}

?>