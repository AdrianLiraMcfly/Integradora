<?php
session_start();

$mensaje = "";
if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'agregar':
            if (is_numeric(openssl_decrypt($_POST['id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['id'], COD, KEY);
                $mensaje .= "ID correcto" . $ID;
            } else {
                $mensaje .= "ID incorrecto";
            }
            if (is_string(openssl_decrypt($_POST['nombre'], COD, KEY))) {
                $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY);
                $mensaje .= "Nombre correcto" . $NOMBRE;
            } else {
                $mensaje .= "Nombre incorrecto";
            }
            if (is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))) {
                $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
                $mensaje .= "Precio correcto" . $PRECIO;
            } else {
                $mensaje .= "Precio incorrecto";
            }
            if (is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))) {
                $CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);
                $mensaje .= "Cantidad correcta" . $CANTIDAD;
            } else {
                $mensaje .= "Cantidad incorrecta";
            }
            if (is_string(openssl_decrypt($_POST['imagen'], COD, KEY))) {
                $IMAGEN = openssl_decrypt($_POST['imagen'], COD, KEY);
                $mensaje .= "Imagen correcto" . $IMAGEN;
            } else {
                $mensaje .= "Imagen incorrecta";
            }

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

                if (in_array($ID, $idproductos)) {
                    $mensaje = "El producto ya ha sido seleccionado...";
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
