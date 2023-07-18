<?php
include '../base/conexion.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['pass'];

$hashedpassword= password_hash($password, PASSWORD_DEFAULT);

$sql="INSERT INTO usuarios(nombre, email, contraseña, id_rol) values ('$nombre', '$email', '$hashedpassword', 2)";


if ($conn->query($sql) === TRUE) {
    echo "Registro guardado correctamente";
    header('Location: ../index.php');
    exit();
} else {
    echo "Error al guardar el registro: ";
}
?>