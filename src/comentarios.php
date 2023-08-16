<?php
session_start();

include '../base/conexion.php';

function verificarSpam($id_usuario, $conn) {
    $limiteComentarios = 5; // Número máximo de comentarios permitidos en un período de tiempo
    $periodoTiempo = 3600; // Período de tiempo en segundos (por ejemplo, 1 hora)

    // Consulta para contar la cantidad de comentarios enviados por el usuario en el período de tiempo
    $consultaConteo = $conn->prepare("SELECT COUNT(*) AS total_comentarios FROM comentarios WHERE id_usuario = :id_usuario AND fecha_creacion >= NOW() - INTERVAL :periodo SECOND");
    $consultaConteo->bindParam(':id_usuario', $id_usuario);
    $consultaConteo->bindParam(':periodo', $periodoTiempo);
    $consultaConteo->execute();

    $resultadoConteo = $consultaConteo->fetch(PDO::FETCH_ASSOC);

    if ($resultadoConteo['total_comentarios'] > $limiteComentarios) {
        return true; // Se ha detectado spam
    }

    return false; // No se ha detectado spam
}

if (isset($_POST['send'])) {
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $correo = $_POST['destinatario']; 

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        $datos = $stmt->fetch(PDO::FETCH_OBJ);

        if ($datos) {
            $id_usuario = $datos->id_usuario;
            $_SESSION["estado"] = $datos->id_estado;
            
            $insertStmt = $conn->prepare("INSERT INTO comentarios (id_usuario, asunto, comentario, fecha_creacion) VALUES (:id_usuario, :asunto, :mensaje, NOW())");
            $insertStmt->bindParam(':id_usuario', $id_usuario);
            $insertStmt->bindParam(':asunto', $asunto);
            $insertStmt->bindParam(':mensaje', $mensaje);

            $spamDetectado = verificarSpam($id_usuario, $conn);

            if ($spamDetectado) {
                // Cambia el id_estado a 2 (suspensión)
                $cambiarEstadoStmt = $conn->prepare("UPDATE usuarios SET id_estado = 2 WHERE id_usuario = :id_usuario");
                $cambiarEstadoStmt->bindParam(':id_usuario', $id_usuario);
                
                if ($cambiarEstadoStmt->execute()) {
                    // Aplicar la suspensión
                    // ...

                    $_SESSION["mensaje_alerta"] = "Se ha detectado spam en tu actividad. Tu cuenta ha sido suspendida.";
                    header("Location: ../contactanos.php");
                    exit();
                } else {
                    $_SESSION["mensaje_alerta"] = "Error al suspender la cuenta debido a spam.";
                    header("Location: ../contactanos.php");
                    exit();
                }
            } else {
                if ($insertStmt->execute()) {
                    $_SESSION["mensaje_confirmacion"] = "Comentario enviado con éxito.";
                    header("Location: ../contactanos.php");
                    exit(); 
                } else {
                    $_SESSION["mensaje_error"] = "Error al guardar datos";
                    header("Location: ../contactanos.php");
                    exit();
                }
            }
        } else {
            $_SESSION["mensaje_error"] = "Correo no encontrado";
            header("Location: ../contactanos.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION["mensaje_error"] = "Correo no encontrado";
        header("Location: ../contactanos.php");
        exit();
    }
}
?>
