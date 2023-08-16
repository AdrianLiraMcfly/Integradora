<?php



session_start();
require 'config/database.php'; 

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {
  
$IDusuario = $_SESSION['id'];
$sentencia = $conn->query("SELECT id_estado FROM usuarios WHERE id_usuario = $IDusuario;");
$personaXX = mysqli_fetch_assoc($sentencia);

if($personaXX['id_estado'] == 1){

$sqlPeliculas = "SELECT * from vista_productos_categoria";
$peliculas = $conn->query($sqlPeliculas);

$dir = "posters/";

?>

<!DOCTYPE html>
<html lang="en" class="h-100"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoGame Store - Admin</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../../icon.png">
    <link rel="stylesheet" href="../productos/estilo.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
      .sidebar .nav-item 
      {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 5px;
      }

      .sidebar 
      {
        height: 100vh;
        background-color: #f8f9fa;
      }

      .sidebar .nav-link 
      {
        color: #333;
      }

      .container 
      {
        margin-top: 50px;
      }

      .table 
      {
        background-color: #fff;
        border-collapse: collapse;
      }

      .transparent-button 
      {
        background-color: transparent;
        border-color: transparent;
      }

    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>

<body class="bg-white w-100">
      <?php
      include '../encabesado.php';
      ?>

      <div class="d-flex justify-content-center mt-3 mb-3">
          <a href="#" class="btn btn-dark fw-medium mx-2 rounded-pill text-warning but">Productos</a>
          <a href="category/index2.php" class="btn btn-dark rounded-pill fw-medium mx-2 but">Nueva categoria</a>
          <a href="sinSock/index2.php" class="btn btn-dark rounded-pill fw-medium mx-2 but">Sin stock</a>
      </div>

      <div class="container-fluid">
        <form class="d-flex w-50 mx-auto">
          <input class="form-control light-table-filter rounded-pill border border-dark shadow" data-table="table_id" type="text" placeholder="Buscar">
          <hr>
        </form>
      </div>

    <?php
    include 'vistas/listado.php';
    ?>
    
    <script>
        let nuevoModal = document.getElementById('nuevoModal')
        let editaModal = document.getElementById('editaModal')
        let eliminaModal = document.getElementById('eliminaModal')

        nuevoModal.addEventListener('shown.bs.modal', event => {
            nuevoModal.querySelector('.modal-body #nombre').focus()
        })

        nuevoModal.addEventListener('hide.bs.modal', event => {
            nuevoModal.querySelector('.modal-body #nombre').value = ""
            nuevoModal.querySelector('.modal-body #descripcion').value = ""
            nuevoModal.querySelector('.modal-body #precio').value = ""
            nuevoModal.querySelector('.modal-body #cantidad').value = ""
            nuevoModal.querySelector('.modal-body #categoria').value = "" 
            nuevoModal.querySelector('.modal-body #poster').value = ""
        })

        editaModal.addEventListener('hide.bs.modal', event => {
            editaModal.querySelector('.modal-body #nombre').value = ""
            editaModal.querySelector('.modal-body #descripcion').value = ""
            editaModal.querySelector('.modal-body #precio').value = ""
            editaModal.querySelector('.modal-body #cantidad').value = ""
            editaModal.querySelector('.modal-body #categoria').value = ""
            editaModal.querySelector('.modal-body #img_poster').value = ""
            editaModal.querySelector('.modal-body #poster').value = ""
        })

        editaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')

            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombre = editaModal.querySelector('.modal-body #nombre')
            let inputDescripcion = editaModal.querySelector('.modal-body #descripcion')
            let inputPrecio = editaModal.querySelector('.modal-body #precio')
            let inputCantidad = editaModal.querySelector('.modal-body #cantidad')
            let inputGenero = editaModal.querySelector('.modal-body #categoria')
            let poster = editaModal.querySelector('.modal-body #img_poster')

            let url = "getPelicula.php"
            let formData = new FormData() 
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id_producto
                    inputNombre.value = data.nombre
                    inputDescripcion.value = data.descripcion
                    inputPrecio.value = data.precio
                    inputCantidad.value = data.cantidad
                    inputGenero.value = data.id_categoria
                    poster.src = '<?= $dir ?>' + data.id_producto + '.jpg'

                }).catch(err => console.log(err))

        })

        eliminaModal.addEventListener('shown.bs.modal', event => {
            let button = event.relatedTarget
            let id = button.getAttribute('data-bs-id')
            eliminaModal.querySelector('.modal-footer #id').value = id
        })
    </script>

<script src="../js/buscador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/evitar_reenvio.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    


</body>

</html>

<?php
}else{

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