<?php session_start();
include '../base/conexion.php';
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $usuario = $_POST["email"];
        $password = $_POST["password"];

        try {
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND contraseña = :password");
            $stmt->bindParam(":email", $usuario);
            $stmt->bindParam(":password", $password);
            $stmt->execute();

            $datos = $stmt->fetch(PDO::FETCH_OBJ);

            if ($datos) {
                $_SESSION["id"] = $datos->id_usuario;
                $_SESSION["nombre"] = $datos->nombre;
                $_SESSION["rol"] = $datos->id_rol;
                //echo "<div class='alert alert-danger'>Acceso consedido</div>";
                header("Location: ../index.php");
            } else {
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Campos Vacios";
    }
}
?>
