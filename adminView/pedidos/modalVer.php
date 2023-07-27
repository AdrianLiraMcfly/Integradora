<?php
$idUsuario = '<span id="idUsuarioValue"></span';
$idCarrito = '<span id="idCarritoValue"></span>';

$_SESSION['id_usuario'] = $idUsuario;
$_SESSION['id_carrito'] = $idCarrito;

// Suponiendo que ya tienes una conexión a la base de datos y tienes el objeto $mysqli listo

// ... (Código previo)

$sql = "CALL integradora2.ObtenerProductosPorUsuarioYCarrito(32, 39)";

$resultado = $conn->query($sql);

if ($resultado) {
    // Verifica si se han devuelto filas
    if ($resultado->num_rows > 0) {
        // Obtiene los datos del conjunto de resultados
        while ($fila = $resultado->fetch_assoc()) {
            // Procesa cada fila de datos
            // Por ejemplo:
            $nombreProducto = $fila['nombre'];
            $precioProducto = $fila['precio_unitario'];
            // ... (y así sucesivamente)
        }
        // Libera el conjunto de resultados
        $resultado->free_result();
    } else {
        // No se encontraron productos para el usuario y carrito dados, manejarlo según sea necesario (por ejemplo, mostrar un mensaje)
        echo "No se encontraron productos para el usuario y carrito proporcionados.";
    }
} else {
    // Ocurrió un error al ejecutar la consulta, manejarlo según sea necesario
    echo "Error al ejecutar la consulta SQL: " . $conn->error;
}

?>

<div class="modal fade" id="pedidoModal" tabindex="-1" role="dialog" aria-labelledby="pedidoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pedidoModalLabel">Detalles del Pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>ID Usuario:</strong><?php echo $_SESSION['id_usuario']?> </p>
        <p><strong>ID Carrito:</strong><?php echo $_SESSION['id_carrito']?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
