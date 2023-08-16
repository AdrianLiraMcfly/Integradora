<?php
if (!isset($_GET['id'])) {
  header('Location: index.php');
}
include 'src/config.php';
include 'src/validacion-carrito.php';
include 'src/conexionbd.php';

$rutaCarpetaImagenes = 'adminView/products/posters/';

?>

<!DOCTYPE html>
<html>

<head>

  <title>Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="estilo.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/diseno.css">
  <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class="bg-white w-auto">

  <nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm navigation-bar-final p-2 mx-auto">
    <div class="container-fluid">

      <img src="vd_logo.png" alt="" width="110px" class="p-2 me-auto">

      <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse icons" id="navbarSupportedContent">

            <ul class="navbar-nav">

              <li class="nav-item p-auto me-1 ">
                <a class="nav-link text-center" aria-current="page" href="index.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                  </svg>
                </a>
              </li>

              <li class="nav-item p-auto me-1">
                <a class="nav-link text-center" aria-current="page" href="carrito.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                  </svg>
                </a>
              </li>


              <li class="nav-item dropdown p-auto me-1">

                <a class="nav-link text-center dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                    <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z" />
                  </svg>
                </a>

                <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                  <?php
                  $sentencia = $bd->query("SELECT * FROM categorias;");
                  $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                  foreach ($productos as $dato) {
                    echo "<li><a class='dropdown-item rounded mb-1' href='busqueda.php?id=$dato->id_categoria'>$dato->nombre</a></li>";
                  }

                  ?>
                </ul>

              </li>

              <?php
              if (isset($_SESSION['nombre'])) {
                if (isset($_SESSION['rol'])) {
                  switch ($_SESSION['rol']) {
                    case 1:
                      echo '
                            <li class="nav-item dropdown p-auto">
                        
                              <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                              </a>
                      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                                <li class="dropdown-item rounded">' . $_SESSION["nombre"] . '</li>
                                <li><a class="dropdown-item rounded mb-1" href="historial.php">Historial de compras</a></li>
                                <li><a class="dropdown-item rounded mb-1" href="#">Configuracion</a></li>
                                <li><a class="dropdown-item rounded" href="src/cerrar_sesion.php">Cerrar sesion</a></li>
                              </ul>
                        
                            </li>
                            <li class="nav-item text-center dropdown p-auto ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
                                <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                              </svg>
                            </a>
      
                            <ul class="dropdown-menu border-black">
                              <li><a class="dropdown-item" href="adminView/products/index2.php">Productos</a></li>
                              <li><a class="dropdown-item" href="adminView/pedidos/pedidos.php">Pedidos</a></li>
                              <li><a class="dropdown-item" href="adminView/clientes/clientes/clientes.php">Clientes</a></li>
                            </ul>
                          </li>';

                      break;
                    case 2:
                      echo '
                              <li class="nav-item dropdown p-auto">
                        
                              <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                              </a>
                      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                                <li class="dropdown-item rounded">' . $_SESSION["nombre"] . '</li>
                                <li><a class="dropdown-item rounded mb-1" href="historial.php">Historial de compras</a></li>
                                <li><a class="dropdown-item rounded mb-1" href="#">Configuracion</a></li>
                                <li><a class="dropdown-item rounded" href="src/cerrar_sesion.php">Cerrar sesion</a></li>
                              </ul>
                        
                            </li>';
                      break;
                    default:

                      break;
                  }
                }
              } else {
                echo '
                        <li class="nav-item dropdown p-auto">
                        
                        <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        </a>
                
                        <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                          <li><a class="dropdown-item rounded mb-1" href="sesiones/register.php">Sign In</a></li>
                          <li><a class="dropdown-item rounded" href="sesiones/login.php">Log In</a></li>
                        </ul>
                        
                      </li>';
              }
              ?>

            </ul>

          </div>

          <form class="d-flex text-center ms-auto me-auto p-2" role="search" method="get" action="busqueda.php">

            <input class="form-control border border-black rounded-start-pill shadow" id="look" name="search" type="search" placeholder="Buscar..." aria-label="Search">

            <button class="btn bg-secondary-subtle border border-black rounded-end-circle rounded-start-0 shadow" type="submit" id="button-addon2">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </button>

          </form>

        </div>
  </nav>

  <?php 
    if ($VALcant == 2) 
    { ?>
      <div class="alert alert-success"> <b> <?php print $mensaje; ?> </b> <a href="carrito.php" style="background-color: green; border-radius: 5px; border: 3px green solid; color: white; text-decoration: none;"><b>Ver Carrito</b></a> </div>
      <?php 
    }
    if ($VALcant == 1 || $VALcant == 4) 
    {
      ?>
      <div class="alert alert-danger"> <b> <?php print $mensaje; ?> </b> <a href="carrito.php" style="background-color: red; border-radius: 5px; border: 3px red solid; color: white; text-decoration: none;"><b>Ver Carrito</b></a> </div>

      <?php 
    }
  ?>


  <div class="container-fluid p-2">

    <div class="row w-100 mx-auto p-2">

      <div class="col-4 container_product_present shadow rounded border border-2 border-dark w-auto ms-auto me-auto">
        <?php

        $id = $_GET['id'];
        $sentencia = $bd->prepare("SELECT * FROM vista_productos_categoria WHERE id_producto = ?;");
        $resultado = $sentencia->execute([$id]);
        $persona = $sentencia->fetch(PDO::FETCH_OBJ);
        $nombreimagen = $persona->imagen;
        $rutaimagen = $rutaCarpetaImagenes . $nombreimagen;
        $base64 = base64_encode(file_get_contents($rutaimagen));
        $base64 = 'data:image/jpeg;base64,' . $base64;

          echo  "<img src='$base64' class='img_present' alt='product' style='width: 200px; height: 200px;'>";

        ?>
      </div>

      <div class="col-4 w-auto p-2 ms-auto me-auto">

        <div class="card bg-body-secondary bg-gradient shadow border border-black border-2">

          <div class="card-body">

            <h2 class="card-title fw-bold titulo_pro"> <?php echo $persona->nombre ?> </h2>

            <h4 class="card-title fw-bold text-secondary">Categoria:</h4>
            <ul class="list-unstyled">
              <li> <?php echo $persona->categoria ?> </li>
            </ul>

            <h4 class="card-title fw-bold text-secondary">Descripcion:</h4>
            <ul class="list-unstyled">
              <li> <?php echo $persona->descripcion ?> </li>
            </ul>
            <h4 class="card-title fw-bold text-secondary">Stock:</h4>
            <ul class="list-unstyled">
              <li> <?php echo $persona->cantidad; ?> </li>
            </ul>

            <ul class="list-unstyled">
              <li><b>$<?php echo $persona->precio ?> </b></li>
            </ul>

          </div>

        </div>

      </div>

      <div class="col-4 w-auto p-2 ms-auto me-auto ">
        <div class="btns_container rounded p-2 shadow border border-black border-2">
          <form action="" method="post">
            <input type="hidden" name="inv" id="inv" value="<?php echo $persona->cantidad; ?>">
            <input type="hidden" name="id" id="id" value=" <?php echo openssl_encrypt($persona->id_producto, COD, KEY); ?> ">
            <input type="hidden" name="nombre" id="nombre" value=" <?php echo openssl_encrypt($persona->nombre, COD, KEY); ?> ">
            <input type="hidden" name="precio" id="precio" value=" <?php echo openssl_encrypt($persona->precio, COD, KEY); ?> ">
            <input type="hidden" name="imagen" id="imagen" value=" <?php echo openssl_encrypt($persona->imagen, COD, KEY); ?> ">

            <?php
            if(isset($_SESSION['nombre']))
            {
              $IDusuario = $_SESSION['id'];
              $sentencia = $bd->query("CALL vista_pedido_reciente ($IDusuario);");
              $mipito = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  
              @$IDxESTADO = $mipito[0]['id_estado'];
            


            if ($IDxESTADO != 2 || $IDxESTADO == NULL) 
            {
            ?>
              <div class="w-auto text-center">
                <button class="btn btn-warning text-dark fw-bold rounded-pill pos_btns border border-3 border-dark mb-2" id="btnPedido" name="btnAccion" value="agregar" type="submit">
                  AGREGAR AL CARRITO
                </button>              
              </div>

              <div class="cont-cant text-center p-2">
                <p>
                  <b>Cantidad:</b>
                </p>
                
                <input class="input-perfect" type="text" name="cantidad" id="cantidad" value=""></input>
                <p class="fw-semibold">NOTA: La cantidad total maxima de productos es de 4.</p>
              </div>
              
              <?php } 
              else 
                { ?>
                <div class="w-auto text-center">
                  <button class="btn btn-warning text-dark fw-bold rounded-pill pos_btns border border-3 border-dark" disabled id="btnPedido" name="btnAccion" value="agregar" type="submit">
                    AGREGAR AL CARRITO
                  </button>                  
                </div>


                  <div class="cont-cant text-center p-2">
                    <p>
                      <b>Cantidad:</b>
                    </p>

                    <input class="input-perfect" type="text" name="cantidad" id="cantidad" disabled value=""></input>
                  <?php 
                }
              }
              else
              { ?>
          </form> 
              <form action="carrito.php">
                          <button class="btn btn-warning text-dark fw-bold rounded-pill pos_btns border border-3 border-dark">
                            AGREGAR AL CARRITO
                          </button>

                          <p><b>Cantidad:</b></p>
                          <input class="input-perfect" disabled value="1"></input> <?php 
                          } 
                          ?>
              </form>
          </div>

        </div>
      </div>

    </div>

  </div>

  <div class="container-fluid bg-dark mt-5 p-4">

    <div class="container-fluid shadow text-center text-uppercase p-2 w-50 mt-2 mb-2 let-5">
      <span class="fw-bold fst-italic">más de <?php echo $persona->categoria ?> </span>
    </div>
    <br>

    <div class="row w-100 h-100 p-2">
      <?php
      $categoria = $persona->categoria;
      $sentencia = $bd->query("SELECT * FROM vista_productos_categoria WHERE categoria like ('%$categoria%') ORDER BY RAND() LIMIT 4;");
      $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
      $rutaCarpetaImagenes = 'adminView/products/posters/';
      foreach ($productos as $dato) { ?>

        <div class="col-4 prod-card me-auto ms-auto mb-4">
          <a href="product.php?id=<?php echo $dato->id_producto ?>" class="link-light link-offset-2 link-underline link-underline-opacity-0">
            <div class="card border border-3 border-secondary bg-dark" style="width: 200px; height: 100%">

              <?php
              $nombreimagen = $dato->imagen;
              $rutaimagen = $rutaCarpetaImagenes . $nombreimagen;

              $base64 = base64_encode(file_get_contents($rutaimagen));
              $base64 = 'data:image/jpeg;base64,' . $base64;

              echo  "<img src='$base64' class='img_init2 rounded-top' alt=''>";
              ?>

              <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                <span class="fw-medium p-0" style="font-size: 15px;"><?php echo $dato->nombre ?></span>

                <p class="card-text mt-2" style="font-size: 15px;">
                  <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark">
                    $<?php echo $dato->precio ?>
                  </b>
                </p>
              </div>

            </div>
          </a>
        </div>


      <?php }

      $bd = NULL;
      ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xykaow5M6xosbl+eovUDxu6Zb+VBzqE3F1fTCepyrViZfmiwD9+vgHMgW8FDoZ2Y" crossorigin="anonymous"></script>

  <script>
    var inputCantidad = document.getElementById("cantidad");

    inputCantidad.addEventListener("input", function(event) {
      this.setAttribute("value", event.target.value);
    });
  </script>

<?php // ?>
</body>

</html>