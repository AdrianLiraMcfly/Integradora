<?php
session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
include("../../products/config/database.php");
$pedidos = "SELECT * FROM vista_usuarios_roles_usuario"; 

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
        <a href="../clientes/clientes.php" class="btn btn-dark fw-medium mx-2 rounded-pill but">Usuarios</a>
        <a href="#" class="btn btn-dark fw-medium mx-2 rounded-pill but text-warning">Clientes</a>
        <a href="../admin/admin.php" class="btn btn-dark fw-medium mx-2 rounded-pill but">Administrador</a>
        <a href="../buscador/buscador.php" class="btn btn-dark fw-medium mx-2 rounded-pill but">Buscar</a>
    </div>

    
    <div class="container-fluid">
      <form class="d-flex w-50 mx-auto">
        <input class="form-control me-2 light-table-filter rounded-pill border border-dark shadow" data-table="table_id" type="text" placeholder="Buscar">
        <hr>
      </form>
    </div>

    <div class="p-4">
      <div class="table-responsive rounded-4 mt-3">
          <table class="table table-striped table_id">
          <thead> 
                <tr>
                  <th class="bg-dark text-light">#</th>
                  <th class="bg-dark text-light">Nombre del Cliente</th>
                  <th class="bg-dark text-light">Email</th>
                  <th class="bg-dark text-light">Rol</th>
                  <th class="bg-dark text-light">Accion</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $resultado = $conn->query($pedidos); 
                while($row= $resultado->fetch_assoc()){
                  
                ?> 
                <tr>
                  <td ><?php echo $row ["id_usuario"]?></td>
                  <td><?php echo $row ["usuario"];?></td>
                  <td><?php echo $row ["email"];?></td>
                  <td ><strong><?php echo $row ["rol"]?></strong></td>
                  <td>
                    <a href="#" class="btn transparent-button" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row['id_usuario']; ?>"><img src="../../iconos/edit-3-svgrepo-com.svg" alt="edit" width="25px"></a>
                  </td>
                </tr>
                <?php
                }?>
              </tbody>        
            </table>
      </div>      
    </div>



    <?php 
$sqlGenero = "SELECT id_rol, nombre FROM roles";
$generos = $conn->query($sqlGenero);
?>

    <?php include 'editaModal.php';?>
    <script>
        let editaModal = document.getElementById('editaModal')

        editaModal.addEventListener('hide.bs.modal', event => {
            editaModal.querySelector('.modal-body #rol').value = ""
        })

        editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombre = editaModal.querySelector('.modal-body #rol')

            let url = "getRol.php"
            let formData = new FormData() 
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id_usuario
                    inputNombre.value = data.id_rol

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
  header('location: ../../../index.php');
}
?>