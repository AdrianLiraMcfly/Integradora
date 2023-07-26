<?php
/*$con =new mysqli("54.196.145.118","Administrador","000000","integradora2");
$con->set_charset("utf8");*/
$passw= '';
$usuario= 'luna';
$nombrebd='integradora2';

try {
    $bd = new PDO(
        'mysql:host=52.23.174.251;dbname=' . $nombrebd,
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
