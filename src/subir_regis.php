<?php
include '../base/conexion.php';

function contieneCaracteresEspeciales($cadena) {
    return preg_match('/[<>\/\\\\]/', $cadena);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passre = $_POST["passre"];
    $hashedpassword = password_hash($pass, PASSWORD_DEFAULT); // Corregir el nombre de la variable

    // Validar que los inputs NO contengan los caracteres especiales < > / \
    if (contieneCaracteresEspeciales($nombre) ||
        contieneCaracteresEspeciales($email) ||
        contieneCaracteresEspeciales($pass) ||
        contieneCaracteresEspeciales($passre)) {
        $mensajeError = "Valores invalidos en alguno de los campos. No se admiten los siguientes valores < > / \ .";
        header("Location: ../sesiones/register.php?mensaje=" . urlencode($mensajeError));
        exit();
    } else {
        $token = bin2hex(random_bytes(16));
        try {
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contraseña, id_rol, id_estado, token) VALUES (:nombre, :email, :hashedpassword, 2, 2, :token)");
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":hashedpassword", $hashedpassword, PDO::PARAM_STR);
            $stmt->bindParam(":token", $token, PDO::PARAM_STR);
            $stmt->execute();

            echo "Registro guardado correctamente";
            header("Location: tokenemail.php?email=$email&token=$token");
            exit();
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                // Error de clave duplicada (email ya en uso)
                $mensajeAlerta = "Email en uso, favor de ingresar otro.";
                header("Location: ../sesiones/register.php?mensaje=".urlencode($mensajeAlerta));
            } else {
                // Otro tipo de error
                echo "Error al guardar el registro: " . $e->getMessage();
            }
        }
    }
}
?>
