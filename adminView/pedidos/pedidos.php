<?php
include("../clientes/conectarbd.php");
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
<nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm" id="ini" style="width: 100.9%;">
      <div class="container-fluid">

        <img src="../productos/vd_logo.png" alt="" width="110px" class="p-2">

        <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <form class="d-flex me-3" role="search">

              <input class="form-control me-2 border border-black rounded-start-pill shadow" id="look" type="search" placeholder="Buscar..." aria-label="Search">

                <button class="btn bg-secondary-subtle border border-black rounded-end-circle rounded-start-0 shadow" type="button" id="button-addon2">
                  <img src="../img/lupa.png" alt="" style="width: 25px">
                </button>

            </form>

            <div class="collapse navbar-collapse icons" id="navbarSupportedContent">
                
                <ul class="navbar-nav">

                    <li class="nav-item p-auto me-1">
                        <a class="nav-link text-center" aria-current="page" href="prototipo.html">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                          </svg>
                        </a>
                    </li>

                    <li class="nav-item p-auto me-1 it border border-2 border-black shadow-lg">
                        <a class="nav-link text-center" aria-current="page" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                          </svg>
                        </a>
                    </li>

                    <li class="nav-item p-auto">
                      <a class="nav-link text-center" aria-current="page" href="contactanos.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                          <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                      </a>
                  </li>
                </ul>
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-center">
                        <a class="nav-link">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                        </a>
                    </li>

                    <li class="nav-item text-center">
                        <a class="nav-link" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        </a>
                    </li>
                    
                </ul>

            </div>
      </div>
    </nav>



  <div class="container-fluid">
    <div class="row">
    <nav class="col-md-3 col-lg-2 d-md-block sidebar" height="100vh">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="../productosphp/index2.php">
                <img src="../iconos/products-svgrepo-com.svg" alt="Productos" width="32px"> Productos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="../iconos/truck-svgrepo-com.svg" alt="Pedidos" width="32px"> <strong>Pedidos</strong>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../clientes/index1.php">
                <img src="../iconos/user-svgrepo-com.svg" alt="Cliente" width="32px"> Cliente
              </a>
            </li>
          </ul>
        </div>
      </nav>


      <div class="col-md-9">
        <div class="container">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Fecha y Hora</th>
                <th>ID de la Orden</th>
                <th>Cantidad Total</th>
                <th>Nombre del Cliente</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              $resultado = mysqli_query($con, $pedidos);
              while($row=mysqli_fetch_assoc($resultado)){
              ?>
              <tr>
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
  </div>

  <!-- Modal para mostrar los detalles del pedido -->
  <div class="modal fade" id="pedidoModal" tabindex="-1" role="dialog" aria-labelledby="pedidoModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pedidoModalLabel">Detalles del Pedido</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Aquí puedes agregar el contenido de los detalles del pedido -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Nombre del Producto</th>
                  <th>Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-image"><img src="../img/galvatron.png" alt="Producto 1"></td>
                  <td>Nombre del Producto 1</td>
                  <td>$10.00</td>
                </tr>
                <tr>
                  <td class="product-image"><img src="../img/kiss_marvel.jpg" alt="Producto 2"></td>
                  <td>Nombre del Producto 2</td>
                  <td>$15.00</td>
                </tr>
                <tr>
                  <td class="product-image"><img src="../img/halo.jpg" alt="Producto 3"></td>
                  <td>Nombre del Producto 3</td>
                  <td>$15.00</td>
                </tr>
                <tr>
                  <td class="product-image"><img src="../img/marine_shirt.jpg" alt="Producto 4"></td>
                  <td>Nombre del Producto 4</td>
                  <td>$15.00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>

  </html>
