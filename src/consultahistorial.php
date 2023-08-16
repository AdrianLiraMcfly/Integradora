<?php
session_start();
include "conexionbd.php";
if (isset($_POST['idcarrito'])) {

    $idCarrito = $_POST['idcarrito'];
    $consulta = $bd->prepare("CALL informacion_pedido(?);");
    $consulta->execute([$idCarrito]);
    $datosCarrito = $consulta->fetch(PDO::FETCH_ASSOC);

    $bd = NULL;
    echo json_encode($datosCarrito);
} else {
    echo json_encode(array('error' => 'ID de usuario no proporcionado.'));
}
