<?php
    include('conectarbd.php');
    $id=$_GET['id'];
    $sql="delete from productos where id_producto='$id'";
    $result=mysqli_query($con,$sql);
    header('Location: index.php');
?>