<?php
session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
include("../products/config/database.php");
$pedidos = "SELECT * FROM vista_carrito_usuarios";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
  </style>
  <title>VideoGame Store - Admin</title>
</head>

<body class="bg-white w-100">
<?php
  include '../encabesado.php';
  ?>

<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-9">
      <div class="container">
        <table class="table table-striped">
        <thead> 
              <tr>
                <th>#</th>
                <th>Fecha y Hora</th>
                <th>ID de la Orden</th>
                <th>Cantidad Total</th>
                <th>Nombre del Cliente</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              $resultado = $conn->query($pedidos); 
              while($row= $resultado->fetch_assoc()){
              ?> 
              <tr>
                <td><?php echo $row ["id_carrito"]?></td>
                <td><?php echo $row ["fecha_venta"];?></td>
                <td><?php echo $row ["id_order"];?></td>
                <td><?php echo $row ["total"];?></td>
                <td><?php echo $row ["nombre_usuario"];?></td>
                <td>
                  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#pedidoModal">Ver Detalle</button>
                </td>
              </tr>
              <?php
              }?>
            </tbody>        
          </table>
      </div>
    </div>
  </div>

<?php include 'modalVer.php'; ?>

<script>
  public function listarPendientes()
  {
    $data = $this->model->getPedidos(1);
    for (let index = 0; index < array.length; index++) {
      const element = array[index];
      
    }
    echo json_encode($data);
    die();
  }
</script>

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