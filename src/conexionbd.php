<?php

$passw= '000000';
$usuario= 'Administrador';
$nombrebd='integradora2';

try
{
    $bd = new PDO
    (
        'mysql:host=54.196.145.118;
        dbname='.$nombrebd,
        $usuario,
        $passw,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}
catch (Exception $e)
{
    echo "Error de conexion".$e->getMessage();
}

?>