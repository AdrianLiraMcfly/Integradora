<?php
include 'conexionbd.php';

$token=$_GET['token'];
$sentencia = $bd->prepare("UPDATE usuarios SET id_estado = 1 WHERE token = :token AND id_estado = 2");
$sentencia->bindParam(':token', $token);

if ($sentencia->execute()) {
    $mensajeAlerta = "¡Cuenta Activada, puedes iniciar sesion!";
    header("Location: ../sesiones/login.php?mensajegood=$mensajeAlerta");
}
?>