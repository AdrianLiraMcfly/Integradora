<?php
/*$con =new mysqli("54.196.145.118","Administrador","000000","integradora2");
$con->set_charset("utf8");*/
$passw= '000000';
$usuario= 'Administrador';
$nombrebd='integradora2';

try {
    $bd = new PDO(
        'mysql:host=54.209.294.64;dbname=' . $nombrebd,
        $usuario,
        $passw,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC)
    );
} catch (Exception $e) {
    echo "Error de conexion" . $e->getMessage();
}
catch (Exception $e)
{
    echo "Error de conexion".$e->getMessage();
}
?>
