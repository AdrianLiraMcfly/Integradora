<?php
include 'conexionbd.php';
session_start();

if(isset($_POST['btnCancelar'])){

    $_SESSION['CARRITO'] = $_SESSION['CARRITOback'];
    $IDxCARRITO = $_POST['IDxCARRITO'];
    $sentencia = $bd->query("CALL eliminar_pedido ($IDxCARRITO);");
        header('location: ../carrito.php');
        $bd = NULL;
}else{
    echo 'PENE PENE';
    exit();
}
?>