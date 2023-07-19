<?php
require '/../src/conexionbd.php';

session_start();

$email=$_POST('email');
$password=$_POST('password');
$query="SELECT COUNT(*) as contador from usuarios where email=$email and contraseña=$password";
$consulta=mysqli_query($conn, $query);
$array= mysqli_fetch_array($consulta);

if ($array['contador']>0){
    header("location:../index.php");
}
else{
    header('location:../sesiones/login.html');
    echo "<alert>Usuario no encontrado.</alert>";
}
?>