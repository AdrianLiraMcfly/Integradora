<?php
    include('../products/config/database.php');
    $id=$_GET['id'];
    $sql="delete from usuarios where id_usuario='$id'";
    $result=mysqli_query($con,$sql);
    header('Location: index.php');
?>