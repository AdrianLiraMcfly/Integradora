<?php
require '../base/conexion.php';

session_start();

$email=$_POST['email'];
$password=$_POST['password'];
$hashedpassword= password_hash($password, PASSWORD_DEFAULT);

// Consulta preparada con marcadores de posición
$query = "SELECT COUNT(*) as contador, nombre, contraseña FROM usuarios WHERE email = $email";
$consulta = $conn->prepare($query);
$consulta->bind_param("s", $email);
$consulta->execute();
$resultado = $consulta->get_result();
$array = $resultado->fetch_assoc();

if ($array['contador'] > 0 && password_verify($hashedpassword, $array['contraseña'])) {
    $_SESSION["Email"] = $email;
    header("location:../index.php");
} else {
    header('location:../sesiones/login.html');
    echo "<alert>Usuario no encontrado.</alert>";
}
?>