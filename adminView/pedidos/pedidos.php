<?php
session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
include("../products/config/database.php");
$pedidos = "SELECT * FROM vista_ventas";

$dir = "../products/posters/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" sizes="32x32" href="../../icon.png">
  <link rel="stylesheet" href="../productos/estilo.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>


    .container {
      margin-top: 50px;
    }

    .table {
      background-color: #fff;
    }

    .sidebar .nav-item {
      margin-bottom: 10px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 5px;
    }

    .sidebar {
      height: 100vh;
      background-color: #f8f9fa;
    }

    .sidebar .nav-link {
      color: #333;
    }
    .product-image img {
    max-width: 50px;
    max-height: 50px;
  }
  .barra-deslizable{
    overflow-y: auto;
    /*position: relative;*/
  }

  </style>
  <title>VideoGame Store - Admin</title>
</head>

<body class="bg-white w-100">
<?php
  include '../encabesado.php';
  ?>

<div class="d-flex justify-content-center mt-3 mb-3">
        <a href="#" class="btn btn-dark mx-2 fw-medium rounded-pill text-warning but">Pedidos</a>
        <a href="cancelados/cancelados.php" class="btn btn-dark mx-2 fw-medium rounded-pill but">Cancelados</a>
        <a href="pendientes/pendientes.php" class="btn btn-dark mx-2 fw-medium rounded-pill but">Pendientes</a>
        <a href="completado/completados.php" class="btn btn-dark mx-2 fw-medium rounded-pill but">Completados</a>
    </div>
    

    <div class="container-fluid">
      <form class="d-flex w-50 mx-auto">
        <input class="form-control light-table-filter rounded-pill border border-dark shadow" data-table="table_id" type="text" placeholder="Buscar">
        <hr>
      </form>
    </div>

    <div class="p-4">
      <div class="table-responsive rounded-4 mt-3">
          <table class="table table-striped table_id">
          <thead class="border border-dark"> 
                <tr>
                  <th class="bg-dark text-light">#</th>
                  <th class="bg-dark text-light">ID de la Orden</th>
                  <th class="bg-dark text-light">Nombre del Cliente</th>
                  <th class="bg-dark text-light">Cantidad Total</th>
                  <th class="bg-dark text-light">Fecha y Hora</th>
                  <th class="bg-dark text-light" scope="col" class="col-lg-4">Productos</th>
                  <th class="bg-dark text-light">Estado</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $resultado = $conn->query($pedidos); 
                while($row= $resultado->fetch_assoc()){
                  $idUsuario = $row["id_usuario"];
                  $idCarrito = $row["id_carrito"];

                  $conn->multi_query("CALL integradora2.ObtenerProductosPorUsuarioYCarrito($idUsuario,$idCarrito)");
                  $productosPedido = $conn->store_result();
                  $conn->next_result();

                  
                ?> 
                <tr>
                  <td ><?php echo $row ["id_carrito"]?></td>
                  <td><?php echo $row ["id_order"];?></td>
                  <td><?php echo $row ["nombre_cliente"];?></td>
                  <td>$<?php echo $row ["cantidad_total"];?></td>
                  <td><?php echo $row ["fecha_venta"];?></td>
                  <td scope="row">
                    <table class="table table-borderless table-sm table-responsive barra-deslizable" >
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Cantidad</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($producto = $productosPedido->fetch_assoc()) {
                        ?>
                        <tr>
                          <td><?php echo $producto["nombre"]; ?></td>
                          <td>$<?php echo $producto["precio_unitario"]; ?></td>
                          <td><?php echo $producto["cantidad"]; ?></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </td>
                  <td ><strong><?php echo $row ["estado_orden"]?></strong></td>
                </tr>
                <?php
                }?>
              </tbody>        
            </table>
      </div>
    </div>

    <script src="../js/buscador.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>

  </html>
  <?php
} else {
  header('location: ../../index.php');
}
?>