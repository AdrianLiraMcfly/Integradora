<?php
session_start();
include "conexionbd.php";

$productos = array();

if (isset($_POST['opcion'])) {

    $idUsuario = $_SESSION['id'];

    switch ($_POST['opcion']) {
        case 'antiguos':
            $consulta = $bd->prepare("CALL recientes(?);");
            $consulta->execute([$idUsuario]);
            $productos = $consulta->fetchAll(PDO::FETCH_OBJ);
            break;
        case 'recientes':
            $consulta = $bd->prepare("CALL antiguos(?);");
            $consulta->execute([$idUsuario]);
            $productos = $consulta->fetchAll(PDO::FETCH_OBJ);
            break;
        case 'max-cost':
            $consulta = $bd->prepare("CALL maxCost(?);");
            $consulta->execute([$idUsuario]);
            $productos = $consulta->fetchAll(PDO::FETCH_OBJ);
            break;
        case 'min-cost':
            $consulta = $bd->prepare("CALL minCost(?);");
            $consulta->execute([$idUsuario]);
            $productos = $consulta->fetchAll(PDO::FETCH_OBJ);
            break;
    }

    echo json_encode($productos);
} else {
    echo json_encode(array('error' => 'Datos del carrito no enviados.'));
}
