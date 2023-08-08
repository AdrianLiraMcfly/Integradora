<?php
session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
include("../../products/config/database.php");
$pedidos = "SELECT * FROM vista_carrito_vencido";

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

<div class="d-flex justify-content-center mt-3">
        <a href="../pedidos.php" class="btn btn-primary mx-2">Pedidos</a>
        <a href="../cancelados/cancelados.php" class="btn btn-primary mx-2">Cancelados</a>
        <a href="../pendientes/pendientes.php" class="btn btn-primary mx-2">Pendientes</a>
        <a href="../completado/completados.php" class="btn btn-primary mx-2">Completados</a>
        <a href="#" class="btn btn-primary mx-2">Caducados</a>
    </div>

    <div class="container-fluid">
      <form class="d-flex">
        <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar">
        <hr>
      </form>
    </div>


    <div class="container mt-3">
        <table class="table table-striped table_id">
        <thead> 
              <tr>
                <th>#</th>
                <th>ID de la Orden</th>
                <th>Nombre del Cliente</th>
                <th>Cantidad Total</th>
                <th>Fecha y Hora</th>
                <th scope="col" class="col-lg-4">Productos</th>
                <th>Estado</th>
                <th>Accion</th>
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
                <td>$<?php echo $row ["total"];?></td>
                <td><?php echo $row ["fecha_limite"];?></td>
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
                <td ><strong><?php echo $row ["nombre_estado"]?></strong></td>
                <td>
                  <a href="#" class="btn transparent-button" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row['id_carrito']; ?>"><img src="../../iconos/edit-3-svgrepo-com.svg" alt="edit" width="25px"></a>
                </td>
              </tr>
              <?php
              }?>
            </tbody>        
          </table>
    </div>


    <?php 
$sqlGenero = "SELECT id_estado, nombre_estado FROM estado";
$generos = $conn->query($sqlGenero);
?>

    <?php include 'editaModal.php';?>
    <script>
        let editaModal = document.getElementById('editaModal')

        editaModal.addEventListener('hide.bs.modal', event => {
            editaModal.querySelector('.modal-body #estado').value = ""
        })

        editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombre = editaModal.querySelector('.modal-body #estado')

            let url = "getEstado.php"
            let formData = new FormData() 
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id_carrito
                    inputNombre.value = data.id_estado

                }).catch(err => console.log(err))

        })
    </script>
    <script src="../../js/buscador.js"></script>
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