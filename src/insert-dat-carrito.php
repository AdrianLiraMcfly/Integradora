<?php
session_start();

if (!isset($_POST['btnPedido'])){
    echo 'ERROR';
    exit();
}

include 'conexionbd.php';
$sentencia = $bd->prepare("INSERT INTO detalles_carrito (id_producto, cantidad, precio_unitario) VALUES (?,?,?);");

foreach($_SESSION['CARRITO'] as $indice => $dato){
$sentencia->execute([$dato['ID'],$dato['CANTIDAD'],$dato['PRECIO']]);
header('location: ../carrito.php');
}
$id_usuario = $_SESSION['id'];
$sentencia = $bd->prepare("INSERT INTO carrito (id_usuario, fecha_venta, total) VALUES (?, NOW(), ?);");
$sentencia->execute([$id_usuario, NULL])



//$Nombre = $_POST['txtNombre'];
//$Telefono = $_POST['txtTelefono'];
//$Correo = $_POST['txtCorreo'];
//
//$sentencia = $bd->prepare("INSERT INTO usuarios(Nombre,Telefono,Correo) values (?,?,?);");
//$resultado = $sentencia->execute([$Nombre,$Telefono,$Correo]);
//
//if($resultado === TRUE){
//    //echo "Insertado correctamente";
//    header('location: index.php');
//}else{
//    echo "ERROR";
//}
?>