<?php
session_start();
include "conexionbd.php";
$ID = $_SESSION['id'];
if (isset($_POST['busqueda'])) {

    $parametro = $_POST['busqueda'];


    $consulta = $bd->prepare("CALL buscador_historial(?,?);");
    $consulta->execute([$parametro, $ID]);
    $productos = $consulta->fetchAll(PDO::FETCH_OBJ);

    echo json_encode($productos);

} else {
    echo json_encode(array('error' => 'Datos del carrito no enviados.'));
}
