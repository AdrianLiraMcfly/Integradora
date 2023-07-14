<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $id_categoria=$_POST['categoria'];   
    include('conectarbd.php');
    $sql="update productos set nombre='$nombre', precio='$precio', id_categoria='$id_categoria' where id_producto=$id";
    $result=mysqli_query($con,$sql);
    header('Location: index.php');
}
?>