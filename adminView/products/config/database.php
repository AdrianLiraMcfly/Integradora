<?php
$conn = new mysqli("localhost:3308", "root", "", "integradora2");

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}

