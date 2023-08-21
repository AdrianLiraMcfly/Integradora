<?php
session_start();

if (isset($_POST['identificador']) && isset($_POST['cantidad'])) {
    $identificador = $_POST['identificador'];
    $cantidad = $_POST['cantidad'];

    if (isset($_SESSION['CARRITO'][$identificador]['CANTIDAD'])) {
        $_SESSION['CARRITO'][$identificador]['CANTIDAD'] = $cantidad;

        $total = 0;
        $suma = 0;
        foreach($_SESSION['CARRITO'] as $indice => $dato){
            $suma += $dato['CANTIDAD'];
            $total += $dato['CANTIDAD'] * $dato['PRECIO'];
        }

        $response = array(
            'cantidad' => $suma,
            'total' => $total
        );
        echo json_encode($response);
    } else {
        $response = "El identificador no existe en el carrito.";
        echo json_encode(['success' => false, 'message' => $response]);
    }
} else {
    $response = "Falta información requerida.";
    echo json_encode(['success' => false, 'message' => $response]);
}
?>
