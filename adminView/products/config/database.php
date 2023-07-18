<?php
#$conn = new mysqli("localhost:3308", "root", "", "integradora2");

#if ($conn->connect_error) {
#    die("Error de conexión" . $conn->connect_error);
#}


$conn = new mysqli("18.207.167.158", "Administrador", "000000", "integradora2");
#$conn = new mysqli("localhost:3308", "root", "", "integradora2");

#if ($conn->connect_error) {
#    die("Error de conexión" . $conn->connect_error);
#}


$conn = new mysqli("18.207.167.158", "Administrador", "000000", "integradora2");

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
