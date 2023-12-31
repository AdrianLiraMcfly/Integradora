<?php
include '../base/conexion.php';

function contieneCaracteresEspeciales($cadena) {
    $caracteresNoDeseados = ['<', '>', '/', '\\', "'", '"', ';', '=', '(', ')', '[', ']', '{', '}', '`', '|', '&', '$', '#', '%', '^', '*', '~', '!', '?', ':', ',','+'];
    
    foreach ($caracteresNoDeseados as $caracter) {
        if (strpos($cadena, $caracter) !== false) {
            return true; // Contiene un caracter no deseado
        }
    }
    
    return false; // No contiene caracteres no deseados
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passre = $_POST["passre"];
    $hashedpassword = password_hash($pass, PASSWORD_DEFAULT);

    // Validar que los inputs NO contengan los caracteres especiales < > / \
    if (contieneCaracteresEspeciales($nombre) ||
        contieneCaracteresEspeciales($email) ||
        contieneCaracteresEspeciales($pass) ||
        contieneCaracteresEspeciales($passre)) {
        $mensajeError = "Valores no válidos en alguno de los campos. favor de solo ingresar alfanumericos";
        header("Location: ../sesiones/register.php?mensaje=" . urlencode($mensajeError));
        exit();
    } else {
        // Verificar si el email ya existe en la base de datos
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM usuarios WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmtUsername = $conn->prepare("SELECT COUNT(*) AS username_count FROM usuarios WHERE nombre = :nombre");
        $stmtUsername->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmtUsername->execute();
        $resultUsername = $stmtUsername->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            $mensajeAlerta = "Email en uso, favor de ingresar otro.";
            header("Location: ../sesiones/register.php?mensaje=" . urlencode($mensajeAlerta));
            exit();
        }
        elseif ($resultUsername['username_count'] > 0) {
            $mensajeAlerta = "Nombre de usuario en uso, favor de ingresar otro.";
            header("Location: ../sesiones/register.php?mensaje=" . urlencode($mensajeAlerta));
            exit();
        }

        $token = bin2hex(random_bytes(5));
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
            $mensajeAlerta = "Error inesperado.";
            header("Location: ../sesiones/register.php?mensaje=" . urlencode($mensajeAlerta));
            exit();
        }
    }
}
?>
