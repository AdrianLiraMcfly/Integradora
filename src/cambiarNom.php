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
        echo "<script>alert('Nombre de usuario cambiado exitosamente.'); window.location.href = '../configuracion.php';</script>";
        //echo "<div class="bg-warning bg-gradient">Nombre de usuario cambiado exitosamente</div>";
    } else {
        echo "<script>alert('Error al cambiar el nombre de usuario.'); window.location.href = '../configuracion.php';</script>";
    }
}
?>