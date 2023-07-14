<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alert = '';
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];  
    include('conectarbd.php');
    $sql="update productos set nombre='$nombre', precio='$precio', id_categoria='$id_categoria' where id_producto=$id";
    $result=mysqli_query($con,$sql);
    header('Location: index.php');
}
?>