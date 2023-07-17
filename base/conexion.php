<?php
$contrasena = '000000';
$usuario = 'Administrador';
$nombrebd = 'integradora2';

try{

    $bd = new PDO(
        'mysql:host=54.221.50.113;
        dbname='.$nombrebd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        

    );

}catch (Exception $e){
    echo "Error de conexion".$e->getMessage();
}
