<?php
$passw=null;
$usuario='root';
$nombrebd='integrado2';

try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombrebd,$usuario,$passw, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}catch (Exception $e){
    echo "Error de conexion".$e->getMessage();
}
?>