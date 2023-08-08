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
            echo "<script>alert('Contraseña cambiada exitosamente.'); window.location.href = '../configuracion.php';</script>";
        } else {
            echo "<script>alert('Error al cambiar la contraseña.'); window.location.href = '../configuracion.php';</script>";
        }
    } else {
        echo "<script>alert('La contraseña actual es incorrecta.'); window.location.href = '../configuracion.php';</script>";
    }
}

?>