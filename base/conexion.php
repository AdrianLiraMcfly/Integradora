<?php
$contrasena = NULL;
$usuario = 'root';
$nombrebd = 'tienda2';

try{

    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombrebd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        

    );

}catch (Exception $e){
    echo "Error de conexion".$e->getMessage();
}
