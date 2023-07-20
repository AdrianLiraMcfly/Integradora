<?php
include '../base/conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['pass'];

$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

try {
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contraseña, id_rol) VALUES (:nombre, :email, :hashedpassword, 2)");
    $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":hashedpassword", $hashedpassword, PDO::PARAM_STR);
    $stmt->execute();

    echo "Registro guardado correctamente";
    header('Location: ../index.php');
    exit();
} catch (PDOException $e) {
    echo "Error al guardar el registro: " . $e->getMessage();
}
?>
