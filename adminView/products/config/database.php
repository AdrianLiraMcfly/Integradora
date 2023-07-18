<?php
<<<<<<< HEAD
$conn = new mysqli("localhost:3308", "root", "", "integradora2");
=======
#$conn = new mysqli("localhost:3308", "root", "", "integradora2");

#if ($conn->connect_error) {
#    die("Error de conexión" . $conn->connect_error);
#}


$conn = new mysqli("18.207.167.158", "Administrador", "000000", "integradora2");
>>>>>>> 5fbd5cc85ac68442e2d14f5653f20fc1df3aa4f0
#$conn = new mysqli("localhost:3308", "root", "", "integradora2");

#if ($conn->connect_error) {
#    die("Error de conexión" . $conn->connect_error);
#}


$conn = new mysqli("18.207.167.158", "Administrador", "000000", "integradora2");

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
