<?php
include 'conexionbd.php';

if(isset($_POST['btnCancelar'])){

    $IDxCARRITO = $_POST['IDxCARRITO'];
    $sentencia = $bd->query("CALL eliminar_pedido ($IDxCARRITO);");
        header('location: ../carrito.php');
}else{
    echo 'PENE PENE';
    exit();
}
?>