<?php
session_start();
include '../base/conexion.php';

if (!empty($_POST["btningresar"])) {
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $_SESSION["mensaje_error"] = "El correo electrónico ingresado no es válido.";
        header("Location: login.php");
        exit();
    }

    // Validar que la contraseña no contenga caracteres especiales
    if (!preg_match("/^[a-zA-Z0-9!@#$%^&*()_+{}[\]:;<>,.?~\-]+$/", $password)) {
        $_SESSION["mensaje_error"] = "La contraseña ingresada no es válida.";
        header("Location: login.php");
        exit();
    }
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $usuario = $_POST["email"];
        $password = $_POST["password"];

        try {
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindParam(":email", $usuario);
            $stmt->execute();

            $datos = $stmt->fetch(PDO::FETCH_OBJ);

            if ($datos) {
                if ($datos->id_estado == 2) {
                        $mensajeAlerta = "Cuenta no activada, verifica tu correo para activarla.";
                        header("Location: ../sesiones/login.php?mensaje=" . urlencode($mensajeAlerta));
                        exit();
                    }
                // Verificar si la contraseña ingresada coincide con el hash almacenado en la base de datos
                else if (password_verify($password, $datos->contraseña)) {
                    $_SESSION["id"] = $datos->id_usuario;
                    $_SESSION["nombre"] = $datos->nombre;
                    $_SESSION["rol"] = $datos->id_rol;
                    $_SESSION["estado"] = $datos->id_estado;
                    $_SESSION["email"] = $usuario;
                    
                    
                   
                    header("Location: ../index.php");
                    exit();
                   
                } 
                else {
                    $mensajeAlerta = "Contraseña incorrecta";;
                    header("Location: ../sesiones/login.php?mensaje=".urldecode($mensajeAlerta));

                    exit();
                }
            } else {
                $mensajeAlerta = "Usuario no encontrado";;
                    header("Location: ../sesiones/login.php?mensaje=".urldecode($mensajeAlerta));

                    exit();
            }
        } catch (PDOException $e) {
            $mensajeAlerta = "error inesperado";;
                    header("Location: ../sesiones/login.php?mensaje=".urldecode($mensajeAlerta));

                    exit();
        }
    } else {
        $_SESSION["mensaje_error"] = "Por favor, complete todos los campos.";
        header("Location: ../sesiones/login.php");

        exit();
    }
}
?>