<?php
include 'conexionbd.php';

$token=$_GET['token'];
$sentencia = $bd->prepare("UPDATE usuarios SET id_estado = 1 WHERE token = :token AND id_estado = 2");
$sentencia->bindParam(':token', $token);

if ($sentencia->execute()) {
    $mensajeAlerta = "¡Cuenta Activada, puedes <a href='sesiones/login.php'>iniciar sesion!";
    header("Location: ../index.php?mensaje=$mensajeAlerta");
}
?>