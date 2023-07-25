<?php
    $servername = "54.209.294.64";
    $username = "Administrador";
    $password = "000000";
    $dbname = "integradora2";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
    echo "Error en la conexión a la base de datos: " . $e->getMessage();
}

?>