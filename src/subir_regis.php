<?php
include __DIR__.'conexionbd.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['pass'];

$hashedpassword= password_hash($password, PASSWORD_DEFAULT);

$sql="INSERT INTO usuarios(nombre, email, contraseña) values ('$nombre', '$email', '$hashedpassword', 2)";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado correctamente";
    header('Location:../index.php');
} else {
    echo "Error al guardar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

?>