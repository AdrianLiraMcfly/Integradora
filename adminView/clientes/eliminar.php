<?php
    include('../products/config/database.php');
    $id=$_GET['id'];
    $sql="delete from usuarios where id_usuario='$id'";
    $result=mysqli_query($conn,$sql);
    header('Location: index1.php');
?>