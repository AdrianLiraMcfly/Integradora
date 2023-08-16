<?php
session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
include("../../products/config/database.php");

$IDusuario = $_SESSION['id'];
$sentencia = $conn->query("SELECT id_estado FROM usuarios WHERE id_usuario = $IDusuario;");
$personaXX = mysqli_fetch_assoc($sentencia);

if($personaXX['id_estado'] == 1){

$pedidos = "SELECT * FROM vista_usuarios_roles"; 

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
        <a href="#" class="btn btn-dark fw-medium mx-2 rounded-pill text-warning but text-warning">Usuarios</a>
        <a href="../cliente/clientes.php" class="btn btn-dark fw-medium mx-2 rounded-pill but">Clientes</a>
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
                  <th class="bg-dark text-light">Estado</th>
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
                  <td ><strong><?php echo $row ["nombre"]?></strong></td>
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
$consulta = "SELECT id, estado_usuario FROM estados_de_usuario;";
$resultado = $conn->query($consulta);
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
            let inputEstado = editaModal.querySelector('.modal-body #estado')

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
                    inputEstado.value = data.id_estado

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
}
else{
  include '../encabesado.php';
  ?>

  

  <!--ALERTA CUENTA SUSPENDIDA-->
  <div class="d-flex align-items-center justify-content-center vh-100">
    <div class="alerts bg-danger bg-gradient p-2 w-25 text-center rounded-3 shadow-lg">

      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
      </svg>

      <p class="text-warn my-auto fw-bold text-light mb-3">
        TU CUENTA HA SIDO SUSPENDIDA, ACUDE A NUESTRO LOCAL PARA REACTIVAR TU CUENTA.
      </p>
      <span class="fw-medium"><a class="link-warn" style="color: white;" href="../../index.php">Volver a Inicio</a></span><br />
    </div>
  </div>

  <?php
}
} else {
  header('location: ../../index.php');
}
?>