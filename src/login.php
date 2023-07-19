<?php
require '../base/conexion.php';

session_start();

$email=$_POST['email'];
$password=$_POST['password'];
$hashedpassword= password_hash($password, PASSWORD_DEFAULT);
$query="SELECT COUNT(*) as contador, nombre from usuarios where email=$email and contraseña=$hashedpassword";
$consulta=mysqli_query($conn, $query);
$array= mysqli_fetch_array($consulta);

if ($array['contador']>0){
    $_SESSION["Email"]=$email;
    header("location:../index.php");
}
else{
    header('location:../sesiones/login.html');
    echo "<alert>Usuario no encontrado.</alert>";
}
?>