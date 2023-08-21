<?php
session_start();
$mensaje = "";
$VALcant = 0;
$inventario = 0;

if (isset($_GET['btnAccion'])) {

    switch ($_GET['btnAccion']) {

        case 'agregar':
            if (is_numeric(openssl_decrypt($_GET['id'], COD, KEY))) {
                $ID = openssl_decrypt($_GET['id'], COD, KEY);
            } else {
            }
            if (is_string(openssl_decrypt($_GET['nombre'], COD, KEY))) {
                $NOMBRE = openssl_decrypt($_GET['nombre'], COD, KEY);
            } else {
            }
            if (is_numeric(openssl_decrypt($_GET['precio'], COD, KEY))) {
                $PRECIO = openssl_decrypt($_GET['precio'], COD, KEY);
            } else {
            }
            if (is_numeric($_GET['cantidad'])) {
                $CANTIDAD = $_GET['cantidad'];

                if ($_GET['cantidad'] <= 0) {
                    $VALcant = 1;
                } else {
                    if ($_GET['cantidad'] > $_GET['inv']) {
                        $VALcant = 4;
                    } else {
                        if ($_GET['cantidad'] > 12) {
                            $CANTIDAD = 12;
                            $VALcant = 2;
                        } else {
                            if ($_GET['cantidad'] > $_GET['inv']) {
                                $VALcant = 4;
                            } else {
                                $VALcant = 2;
                            }
                        }
                    }
                }
            } else {
                $VALcant = 1;
            }
            if (is_string(openssl_decrypt($_GET['imagen'], COD, KEY))) {
                $IMAGEN = openssl_decrypt($_GET['imagen'], COD, KEY);
            } else {
            }
            switch ($VALcant) {
                case 1:
                    $mensaje = "Escriba una cantida VALIDA.";
                    break;
                case 2:
                    if (!isset($_SESSION['CARRITO'])) {
                        $producto = array(
                            'ID' => $ID,
                            'NOMBRE' => $NOMBRE,
                            'PRECIO' => $PRECIO,
                            'CANTIDAD' => $CANTIDAD,
                            'IMAGEN' => $IMAGEN
                        );
                        $_SESSION['CARRITO'][0] = $producto;
                        $mensaje = "Producto agregado al carrito exitosamente...";
                    } else {

                        $idproductos = array_column($_SESSION['CARRITO'], "ID");
                        $NumeroProductos = count($_SESSION['CARRITO']);
                        if (in_array($ID, $idproductos)) {
                            $mensaje = "El producto ya ha sido seleccionado...";
                            $NEWcantidad = $_GET['cantidad'];

                            foreach ($_SESSION['CARRITO'] as $indice => $dato) {
                                if ($dato['ID'] == $ID) {
                                    $producto = array(
                                        'ID' => $ID,
                                        'NOMBRE' => $NOMBRE,
                                        'PRECIO' => $PRECIO,
                                        'CANTIDAD' => $NEWcantidad,
                                        'IMAGEN' => $IMAGEN
                                    );
                                    $_SESSION['CARRITO'][$indice] = $producto;
                                }
                            }
                        } else {
                            $NumeroProductos = count($_SESSION['CARRITO']);
                            if ($NumeroProductos == 12) {
                                $mensaje = "La cantidad maxima de articulos es de 12.";
                            } else {
                                $producto = array(
                                    'ID' => $ID,
                                    'NOMBRE' => $NOMBRE,
                                    'PRECIO' => $PRECIO,
                                    'CANTIDAD' => $CANTIDAD,
                                    'IMAGEN' => $IMAGEN
                                );
                                $_SESSION['CARRITO'][$NumeroProductos] = $producto;
                                $mensaje = "Producto agregado al carrito exitosamente...";
                            }
                        }
                    }
                    break;
                case 3:
                    break;
                case 4:
                    $mensaje .= "No tenemos la cantidad que estas pidiendo, ingresa un valor mas pequeño.";
                    break;
                case 5:
                    break;
            }
            break;
    }
}

if (isset($_GET['btnAccion2'])) {

    switch ($_GET['btnAccion2']) {

        case 'eliminar':
            if (is_numeric($_GET['id'])) {
                $ID = $_GET['id'];

                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['ID'] == $ID) {
                        unset($_SESSION['CARRITO'][$indice]);
                    }
                    $_SESSION['CARRITO'] = array_values($_SESSION['CARRITO']);
                }
            } else {
                $mensaje .= "ID incorrecto";
            }
            break;
    }
}
