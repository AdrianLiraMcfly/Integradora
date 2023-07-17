<?php

/**
 * CRUD modal en PHP y MySQL
 * 
 * Este archivo realiza la conexión a MySQL
 * @author MRoblesDev
 * @version 1.0
 * https://github.com/mroblesdev
 * 
 */

$conn = new mysqli("localhost:3308", "root", "", "integradora2");

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
