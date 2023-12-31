<?php



session_start();

if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) {


require '../config/database.php'; 

$sqlPeliculas = "SELECT * from v_productos_sin_inventario";
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



    <link rel="stylesheet" href="../../productos/estilo.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
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

          .container {
            margin-top: 50px;
          }

          .table {
            background-color: #fff;
            border-collapse: collapse;
          }
          .transparent-button {
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
      include '../encabesadoProducts.php';
      ?> 
        <div class="d-flex justify-content-center mt-3 mb-3">
            <a href="../index2.php" class="btn btn-dark rounded-pill fw-medium mx-2 but">Productos</a>
            <a href="../category/index2.php" class="btn btn-dark rounded-pill fw-medium mx-2 but">Nueva categoria</a>
            <a href="#" class="btn btn-dark fw-medium mx-2 rounded-pill text-warning but">Sin stock</a>
        </div>
      <?php
      include '../vistas/listadoSinStock.php';
      ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="./js/evitar_reenvio.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>

<?php
} else {
  header('location: ../../../index.php');
}
?>