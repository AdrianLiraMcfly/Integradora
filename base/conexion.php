<?php
    $servername = "54.196.145.118";
    $username = "Administrador";
    $password = "000000";
    $dbname = "integradora2";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header('Location: ../index.php');
} 
catch (PDOException $e) 
{
    echo "Error en la conexión a la base de datos: " . $e->getMessage();
}

?>