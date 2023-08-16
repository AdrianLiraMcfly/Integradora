<?php
session_start();
include "conexionbd.php";

$productos = array();

if (isset($_POST['opcion'])) {

    $idUsuario = $_SESSION['id'];
    $Datos = $_POST['datos'];

    switch ($_POST['opcion']) {
        case 'antiguos':
            usort($Datos, function($a, $b) {
                return strtotime($a['Fecha_de_pedido']) - strtotime($b['Fecha_de_pedido']);
            });
            break;
        case 'recientes':
            usort($Datos, function($a, $b) {
                return strtotime($b['Fecha_de_pedido']) - strtotime($a['Fecha_de_pedido']);
            });
            break;
        case 'max-cost':
            usort($Datos, function($a, $b) {
                return $b['Total'] - $a['Total'];
            });
            break;
        case 'min-cost':
            usort($Datos, function($a, $b) {
                return $a['Total'] - $b['Total'];
            });


            break;
    }
    echo json_encode($Datos);
} else {
    echo json_encode(array('error' => 'Datos del carrito no enviados.'));
}
