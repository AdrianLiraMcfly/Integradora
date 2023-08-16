<?php
session_start();
include "conexionbd.php";
if (isset($_POST['datos'])) {

    $parametro = $_POST['datos']['ID_Carrito'];
    $consulta = $bd->prepare("CALL informacion_de_un_carrito(?);");
    $consulta->execute([$parametro]);
    $productos = $consulta->fetchAll(PDO::FETCH_OBJ);

    echo json_encode($productos);
} else {
    echo json_encode(array('error' => 'Datos del carrito no enviados.'));
}
