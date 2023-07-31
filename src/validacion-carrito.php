<?php
session_start();
$mensaje = "";
$VALcant = 0;
$inventario = 0;
if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'agregar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
            } else {
            }
            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
            } else {
            }
            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
            } else {
            }
            if (is_numeric($_POST['cantidad'])) {
                $CANTIDAD = $_POST['cantidad'];

                if($_POST['cantidad'] <= 0){
                    $VALcant = 1;
                }
                else{
                    if($_POST['cantidad'] > 4){
                        $CANTIDAD = 4;
                        $VALcant = 2;
                    }
                    else{
                        if($_POST['cantidad'] > $inventario){
                            $VALcant = 4;
                        }
                    }

                }
            }
            else {
                $VALcant = 1;
            }
            if (is_string(openssl_decrypt($_POST['imagen'], COD, KEY))) {
                $IMAGEN = openssl_decrypt($_POST['imagen'], COD, KEY);
            } else {
            }
            if($VALcant == 2){

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
                        $NEWcantidad = $_POST['cantidad'];

                        foreach($_SESSION['CARRITO'] as $indice => $dato){
                            if($dato['ID'] == $ID){
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
                        if($NumeroProductos == 4){
                            $mensaje = "La cantidad maxima de articulos es de 4.";
                        }
                        else{
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
            }else{
                if($VALcant == 1){
                    $mensaje = "Escriba una cantida VALIDA.";
                }
                if($VALcant == 4){
                    $mensaje .= "No tenemos la cantidad que estas pidiendo, ingresa un valor mas pequeño.";
                }
            }
            break;
        case 'eliminar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);

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