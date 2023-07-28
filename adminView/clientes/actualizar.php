<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];   
    $contrasena=$_POST['contraseña'];
    include('../products/config/database.php');
    $sql="update usuarios set nombre='$nombre', email='$email', telefono='$telefono', contraseña='$contrasena' where id_usuario=$id";
    $result=mysqli_query($con,$sql);
    header('Location: index.php');
}
?>