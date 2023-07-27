<?php
session_start();
include '../base/conexion.php';

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $usuario = $_POST["email"];
        $password = $_POST["password"];

        try {
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindParam(":email", $usuario);
            $stmt->execute();

            $datos = $stmt->fetch(PDO::FETCH_OBJ);

            if ($datos) {
                // Verificar si la contraseña ingresada coincide con el hash almacenado en la base de datos
                if (password_verify($password, $datos->contraseña)) {
                    $_SESSION["id"] = $datos->id_usuario;
                    $_SESSION["nombre"] = $datos->nombre;
                    $_SESSION["rol"] = $datos->id_rol;
                    $_SESSION["email"] = $usuario;
                    header("Location: ../index.php"); // Redirigir a la página principal después de iniciar sesión exitosamente
                    exit();
                } else {
                    $mensajeAlerta = "Contraseña incorrecta";;
                    header("Location: ../sesiones/login.php?mensaje=".urldecode($mensajeAlerta));
                    exit();
                }
            } else {
                $_SESSION["mensaje_error"] = "Acceso denegado. Usuario no encontrado.";
                header("Location: ../sesiones/login.php");
                exit();
            }
        } catch (PDOException $e) {
            $_SESSION["mensaje_error"] = "Error en la base de datos: " . $e->getMessage();
            header("Location: ../sesiones/login.php");
            exit();
        }
    } else {
        $_SESSION["mensaje_error"] = "Por favor, complete todos los campos.";
        header("Location: ../sesiones/login.php");
        exit();
    }
}
?>

<?php/*
session_start();
include '../base/conexion.php';

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $usuario = $_POST["email"];
        $password = $_POST["password"];

        try {
            $stmt = $conn->prepare("SELECT id_usuario, nombre, contraseña, id_rol FROM usuarios WHERE email = :email");
            $stmt->bindParam(":email", $usuario);
            $stmt->execute();

            $datos = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datos) {
                // Verificar si la contraseña ingresada coincide con el hash almacenado en la base de datos
                if (password_verify($password, $datos['contraseña'])) {
                    // Contraseña válida, iniciar sesión
                    $_SESSION["id"] = $datos['id_usuario'];
                    $_SESSION["nombre"] = $datos['nombre'];
                    $_SESSION["rol"] = $datos['id_rol'];
                    header("Location: ../index.php"); // Redirigir a la página principal después de iniciar sesión exitosamente
                    exit();
                } else {
                    echo "<div class='alert alert-danger'>Acceso denegado. Contraseña incorrecta.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Acceso denegado. Usuario no encontrado.</div>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Campos Vacios";
    }
}*/
?>
