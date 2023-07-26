<?php
    $servername = "52.23.174.251";
    $username = "luna";
    $password = "";
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