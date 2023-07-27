<?php

session_start();

require 'config/database.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$precio = $conn->real_escape_string($_POST['precio']);
$genero = $conn->real_escape_string($_POST['categoria']);
$inventario = $conn->real_escape_string($_POST['cantidad']);

$sql = "INSERT INTO productos (nombre, descripcion, id_categoria, precio)
        VALUES ('$nombre', '$descripcion', $genero, $precio)";

if ($conn->query($sql)) {
    $id = $conn->insert_id;

    $sqlInventario = "INSERT INTO inventario (id_producto, cantidad)
                      VALUES ($id, $inventario)";

    if ($conn->query($sqlInventario)) {
        if ($_FILES['poster']['error'] == UPLOAD_ERR_OK) {
            $permitidos = array("image/jpg", "image/jpeg");
            if (in_array($_FILES['poster']['type'], $permitidos)) {

                $dir = "posters";
                $info_img = pathinfo($_FILES['poster']['name']);
                $info_img['extension'];
                $poster = $dir . '/' . $id . '.jpg';

                if (!file_exists($dir)) {
                    mkdir($dir, 0755);
                }

                if (!move_uploaded_file($_FILES['poster']['tmp_name'], $poster)) {
                    $conn->query("DELETE FROM inventario WHERE id_producto = $id");
                    $conn->query("DELETE FROM productos WHERE id_producto = $id");

                    $_SESSION['color'] = "danger";
                    $_SESSION['msg'] = "Error al guardar la imagen";
                } else {
                    $_SESSION['color'] = "success";
                    $_SESSION['msg'] = "Registro guardado"; 
                }
            } else {
                $conn->query("DELETE FROM inventario WHERE id_producto = $id");
                $conn->query("DELETE FROM productos WHERE id_producto = $id");

                $_SESSION['color'] = "danger";
                $_SESSION['msg'] = "Formato de imagen no permitido";
            }
        }
    } else {
        $conn->query("DELETE FROM productos WHERE id = $id");

        $_SESSION['color'] = "danger";
        $_SESSION['msg'] = "Error al guardar el inventario";
    }
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al guardar el producto";
}

header('Location: index2.php');
