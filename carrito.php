<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    header("Location: " . $_SERVER['PHP_SELF']);
//    exit();
//}
include 'src/config.php';
include 'src/validacion-carrito.php';
include 'src/conexionbd.php';
$rutaCarpetaImagenes = 'adminView/products/posters/';
//if (isset($_POST['btnPedido'])) {
//  $_SESSION['btnPedido'] = true;
//}
//$boton_desactivado = isset($_SESSION['btnPedido']) && $_SESSION['btnPedido'];

// Leer el mensaje de la URL

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="css/diseno.css">

  <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <title>Carrito</title>
</head>

<body class="bg-white w-100 h-100">

  <nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm navigation-bar-final" id="ini" style="width: 100.9%;">
    <div class="container-fluid">

      <img src="vd_logo.png" alt="" width="110px" class="p-2 me-auto">

      <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <div class="container-fluid">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse icons" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto">

              <li class="nav-item p-auto me-1">
                <a class="nav-link text-center" aria-current="page" href="index.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                  </svg>
                </a>
              </li>

              <li class="nav-item p-auto me-1 it border border-2 border-black shadow-lg">
                <a class="nav-link text-center" aria-current="page" href="#">
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
                            <li class="nav-item dropdown p-auto me-1">
                        
                              <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                              </a>
                      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                                <li><a class="dropdown-item rounded mb-1" href="#">Configuracion</a></li>
                                <li><a class="dropdown-item rounded" href="src/cerrar_sesion.php">Cerrar sesion</a></li>
                              </ul>
                        
                            </li>

                            <li class="nav-item text-center dropdown p-auto">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                  <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
                                  <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                </svg>
                              </a>
      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                                <li><a class="dropdown-item rounded mb-1" href="adminView/products/index2.php">Productos</a></li>
                                <li><a class="dropdown-item rounded mb-1" href="adminView/pedidos/pedidos.php">Pedidos</a></li>
                                <li><a class="dropdown-item rounded" href="adminView/clientes/clientes/clientes.php">Clientes</a></li>
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

          <form class="d-flex text-center ms-auto me-auto" role="search" method="post" action="busqueda.php">

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
  if (isset($_GET['mensaje'])) 
  {
      $mensajeAlerta = $_GET['mensaje']; ?>
      <div class="alert alert-success">
        <b><?php print $mensajeAlerta; ?></b>
      </div>
    <?php 
  } ?>
  <?php
  if (!isset($_SESSION['nombre'])) 
  {
    ?>
    <!--ALERTA SESIÓN-->
    <div class="d-flex align-items-center justify-content-center vh-100">
      <div class="alerts bg-warning bg-gradient p-2 w-25 text-center rounded-3 shadow-lg">

        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
          <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
          <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
        </svg>

        <p class="text-warn my-auto fw-bold text-light mb-3">
          ¡NECESITAS INICIAR SESION PARA USAR EL CARRITO!
        </p>

        <span class="fw-medium"><a class="link-warn" href="sesiones/login.php">¿Ya tienes cuenta?</a></span><br />
        <span class="fw-medium"><a class="link-warn" href="sesiones/register.php">¡Crea una!</a></span>
      </div>
    </div>

    <?php
  } 
  else 
  {

    $IDusuario = $_SESSION['id'];
    $sentencia = $bd->query("SELECT id_estado FROM usuarios WHERE id_usuario = $IDusuario;");
    $personaXX = $sentencia->fetch(PDO::FETCH_ASSOC);
    $sentencia->closeCursor();

    if ($personaXX['id_estado'] == 2) 
    {
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
          <span class="fw-medium"><a class="link-warn" href="index.php">Volver a Inicio</a></span><br />
        </div>
      </div>

      <?php

    } 
    else 
    {

      $sentencia->closeCursor();
      $sentencia = $bd->query("CALL vista_pedido_reciente ($IDusuario);");
      $persona = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      @$IDxESTADO = $persona[0]['id_estado'];

      if ($IDxESTADO != 2 || $IDxESTADO == NULL) 
      {

          $total = 0;
        ?>

        <br>

        <!--CARRITO CUENTA INICIADA LLENO-->
        <div class="row w-100 mx-auto">

            <!--DETALLES-->
            <div class="col-lg-6">
              
              <div class="carrito-detalles">

                <div class="container-fluid shadow text-center p-2 w-75 mb-3 let-4">
                  <span class="fw-bold fst-italic">DETALLES</span>
                </div>

                <div class="container-carrito shadow-lg border border-2 border-black p-3 rounded-4 p-1">

                  <div class="informacion-detalles-carrito">
                    <?php
                    /* Verificar si tiene folio
                    if (isset($_SESSION['folio']) && !empty($_SESSION['folio'])) {
                    $folio = $_SESSION['folio'];
                    echo '<p style="font-size: 17px;"><b>Folio:</b>'.$_SESSION['folio'].'</p>';
                      // Aquí también puedes deshabilitar el botón de compra si lo deseas
                      echo '<script>document.getElementById("btnPedido").disabled = true;</script>';
                      } else {
                    echo '<p style="font-size: 17px;"><b>Folio: </b> No generado</p>';         
                    // Aquí también puedes habilitar el botón de compra si lo deseas
                    echo '<script>document.getElementById("btnPedido").disabled = false;</script>';
                    }*/
                    ?>

                    <p style="font-size: 17px;"><b>Folio:</b> No generado</p>
                    <p style="font-size: 17px;"><b>Fecha realizacion de pedido:</b> No generada</p>
                    <p style="font-size: 17px;"><b>Fecha limite de recogida:</b> No generada</p>
                    <p style="font-size: 17px;"><b>Elementos:</b> <?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?> </p>
                    <p style="font-size: 17px;">
                      <b>Total:</b>
                      $<?php if (isset($_SESSION['CARRITO'])) 
                      {
                          foreach ($_SESSION['CARRITO'] as $indice => $producto) 
                          {
                            $total += $producto['PRECIO'] * $producto['CANTIDAD'];
                          }
                      }
                        echo $total;
                        ?>
                    </p>

                    <?php
                    if (isset($_SESSION['CARRITO'])) 
                    {


                      $sumaCantidades = 0;

                        foreach ($_SESSION['CARRITO'] as $indice => $cantidad) 
                        {
                          $sumaCantidades += $cantidad['CANTIDAD'];
                        }
                      ?>

                      <div class="container-btn">

                        <form action="src/insertdatcarrito.php" method="post">
                          <input type="hidden" name="txtTotal" value="<?php echo $total; ?>">
                        <?php
                        if (empty($_SESSION['CARRITO'])) 
                        {
                          echo "<div class='alert text-center rounded-pill no-pro'> <b> AUN NO TIENES NINGUN PRODUCTO AÑADIDO. </b></div>";
                        } 
                        else 
                        {
                          if ($sumaCantidades > 4) 
                          {
                            echo "<div class='alert text-center rounded-pill maximo-pro'> <b>EL MAXIMO TOTAL DE CANTIDAD ADMITIDO ES DE 4</b></div>";
                          } 
                          else 
                          {
                            echo
                            "<button class='btn btn-carrito btn-warning border border-3 border-dark rounded-pill shadow' type='submit' name='btnPedido' id='btnPedido' value='pedido'>
                            <b>REALIZAR PEDIDO</b>
                          </button>";
                          }
                        }
                      }
                        ?>
                        </form>
                      </div>

                      <p style="font-size: 14px;" class="mt-3">Apartir de realizar el pedido se tienen 3 dias para recogerlo, despues de ese lapso de tiempo se cancelara automaticamente. Se debe presentar el folio para recoger el paquete.</p>
                  </div>

                </div>

              </div>

            </div>

              <?php if (!empty($_SESSION['CARRITO'])) 
              { ?>

              <!--CARRITO-->
              <div class="col-lg-6">

                
                <div class="container-fluid shadow text-center p-2 w-75 mb-3 let-4 mt-1">
                  <span class="fw-bold fst-italic">CARRITO</span>
                </div>

                <div class="container-carrito barra-deslizable shadow-lg border border-2 border-black p-3 rounded-4 p-1">
                  <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>


                    <?php

                    $id = $producto['ID'];
                    $sentencia = $bd->prepare("SELECT imagen FROM vista_productos_categoria WHERE id_producto = ?;");
                    $resultado = $sentencia->execute([$id]);
                    $persona = $sentencia->fetch(PDO::FETCH_OBJ);

                    ?>

                    <div class="container-fluid container-carrito-products border border-2 border-black text-center rounded-4">

                      <div class="row w-100 mx-auto">
                        <div class="col-3 btn-delete-product w-auto text-center me-auto">
                          <form action="" method="post">

                            <input type="hidden" name="id" value=" <?php echo openssl_encrypt($producto['ID'], COD, KEY); ?> ">

                            <button class="border border-3 border-black bg-danger bg-gradient p-2 rounded-pill shadow-lg" type="submit" name="btnAccion" value="eliminar">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                              </svg>
                            </button>
                          </form>
                        </div>

                        <div class="col-3 container-products-carrito-info w-25 text-center me-auto">
                          <p class="mb-0" style="font-size: 17px;"><?php echo $producto['NOMBRE'] ?></p>
                          <b style="font-size: 17px;">$<?php echo $producto['PRECIO'] ?></b>
                        </div>

                        <div class="col-3 container-folio-products w-25 text-center me-auto"> <?php //OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO 
                                                                                                      ?>

                          <p class="mb-0" style="font-size: 17px;">
                            Cantidad:
                            <br />

                            <input type="text" class="bg-body-secondary rounded border border-2 border-black w-25 text-center" disabled value="<?php echo $producto['CANTIDAD']; ?>"> </input>
                          </p>

                          <a class="ver-pro mt-3" style="font-size: 12px;" href="product.php?id=<?php echo $producto['ID']; ?>">
                            <b class="border border-2 border-black w-auto bg-warning text-dark rounded-pill p-1">
                              Ver Producto
                            </b>
                          </a>
                        </div>

                        <div class="col-3 container-products-carrito-img w-25 p-2">


                          <?php
                          $nombreimagen = $persona->imagen;
                          $rutaimagen = strval($rutaCarpetaImagenes . $nombreimagen);

                          $base64 = base64_encode(file_get_contents($rutaimagen));
                          $base64 = 'data:image/jpeg;base64,' . $base64;

                          echo  "<img src='$base64' class='p-2 border border-2 rounded-pill' style='width: 100px; height: 100px;' alt=''>";

                          ?>


                        </div>
                      </div>

                    </div>
                  <?php } ?>

                </div>
              </div>

        </div>

        <!--</div>-->
        <?php
        } 
        else 
        { ?>

          <!--CUANDO EL CARRITO ESTA VACIO-->
          <div class="col-lg-6">


            <div class="container-fluid shadow text-center p-2 w-75 mb-3 let-4">
              <span class="fw-bold fst-italic">CARRITO</span>
            </div>

            <div class="container-carrito barra-deslizable shadow-lg border border-2 border-black p-3 rounded-4 p-1 w-100">
              <div class="text-center p-1 w-auto mt-0">
                Aún no hay productos en el carrito...
              </div>
            </div>

          </div>

          <?php
        }
      } 
      else 
      {

        $sentencia->closeCursor();
        $IDusuario = $_SESSION['id'];
        $sentencia = $bd->query("CALL vista_pedido_reciente ($IDusuario);");
        $persona2 = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        @$IDxESTADO = $persona2[0]['id_estado'];
        ?>
        <br>

        <div class="w-100 mx-auto">

          <!--DETALLES-->        
          <div class="col-lg-6">

            <div class="carrito-detalles">
              
              <div class="container-fluid shadow text-center p-2 w-50 mb-3 let-4">
                <span class="fw-bold fst-italic">DETALLES</span>
              </div>

              <div class="container-fluid container-carrito shadow-lg border border-2 border-black p-3 rounded-4 p-1 w-auto">

                <div class="container-fluid informacion-detalles-carrito">
                  <p style="font-size: 17px;"><b>Folio:</b> <?php echo $persona2[0]['id_order']; ?> </p>
                  <p style="font-size: 17px;"><b>Fecha realizacion de pedido:</b> <?php echo $persona2[0]['fecha_venta']; ?> </p>
                  <p style="font-size: 17px;"><b>Fecha limite de recogida:</b> <?php echo $persona2[0]['fecha_limite']; ?> </p>
                  <p style="font-size: 17px;"><b>Elementos:</b> <?php $a = 0;
                                                                foreach ($persona2 as $indice => $dato2) {
                                                                  $a++;
                                                                }
                                                                echo $a; ?> </p>
                  <p style="font-size: 17px;"><b>Total:</b> $ <?php echo $persona2[0]['total']; ?> </p>

                  <div class="container-btn">

                    <form action="src/convertpdf.php" method="post">
                      <button class="btn-carrito btn btn-warning border border-3 border-dark rounded-pill shadow" type="submit" name="" id="" value="" style="margin-left: 35px;">
                        <b>ENVIAR FOLIO</b>
                      </button>
                    </form>

                    <form action="src/CANCELARxPEDIDO.php" method="post">
                      <input type="hidden" name="IDxCARRITO" value="<?php echo $persona2[0]['id_carrito']; ?>">
                      <button class="btn-carrito btn btn-danger border border-3 border-dark rounded-pill shadow" type="submit" name="btnCancelar" id="btnCancelar" value="cancelar" style="margin-left: 35px;">
                        <b>CANCELAR PEDIDO</b>
                      </button>
                    </form>

                  </div>

                  <p style="font-size: 14px;" class="mt-3">Apartir de realizar el pedido se tienen 3 dias para recogerlo, despues de ese lapso de tiempo se cancelara automaticamente. Se debe presentar el folio para recoger el paquete.</p>
                </div>

              </div>
            </div>

          </div>

          <!--CARRITO-->
          <div class="col-lg-6">

              <div class="container-fluid shadow text-center p-2 w-50 mb-3 let-4">
                <span class="fw-bold fst-italic">CARRITO</span>
              </div>

              <div class="container-carrito barra-deslizable shadow-lg border border-2 border-black p-3 rounded-4 p-1">

                <?php foreach ($persona2 as $indice => $dato) { ?>
                  <div class="container-fluid container-carrito-products border border-2 border-black text-center rounded-4">

                    <div class="row w-100 mx-auto">
                      <div class="col-3 btn-delete-product w-auto text-center me-auto">
                      </div>

                      <div class="col-3 container-products-carrito-info w-25 text-center me-auto">
                        <p class="mb-0" style="font-size: 17px;"><?php echo $dato['nombre'] ?></p>
                        <b style="font-size: 17px;"><?php echo $dato['precio_unitario'] ?></b>
                      </div>

                      <div class="col-3 container-folio-products w-25 text-center me-auto">
                        <p class="mb-0" style="font-size: 17px;">
                          Cantidad:
                          <br />

                          <input type="text" disabled class="bg-body-secondary rounded border border-2 border-black w-25 text-center" value="<?php echo $dato['cantidad'] ?>"> </input>
                        </p>

                        <a class="ver-pro mt-3" style="font-size: 12px;" href="product.php?id=<?php echo $dato['id_producto'] ?>">
                          <b class="border border-2 border-black w-auto bg-warning text-dark rounded-pill p-1">
                            Ver Producto
                          </b>
                        </a>
                      </div>

                      <div class="col-3 container-products-carrito-img w-25 p-2">


                        <?php
                        $nombreimagen = $dato['imagen'];
                        $rutaimagen = strval($rutaCarpetaImagenes . $nombreimagen);
                        $base64 = base64_encode(file_get_contents($rutaimagen));
                        $base64 = 'data:image/jpeg;base64,' . $base64;
                        echo  "<img src='$base64' class='p-2 border border-2 rounded-pill' style='width: 100px; height: 100px;' alt=''>";
                        ?>


                      </div>
                    </div>

                  </div>
                <?php } ?>
              </div>
          </div>

        </div>


        <?php
      }
    }
  }
  $bd = NULL;
  ?>

  <footer>

    <div class="container-fluid" id="foot">
      <div class="row">

        <div class="col mb-auto bg-dark p-4">

          <h4><b>CONTACTANOS</b></h4>
          
          <div class="mt-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text me-1" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
            </svg>

            <a href="contactanos.php">Contactanos por correo</a>
          </div>

          <div class="mt-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook me-1" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>

            <a href="https://www.facebook.com/VideoGameStorePT">Facebook</a>
          </div>

        </div>

        <div class="col mb-auto bg-dark p-4">

          <h4><b>ENCUENTRANOS EN</b></h4>

          <div class="mt-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop me-1" viewBox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg>

            <a href="https://www.google.com.mx/maps/place/Plaza+de+la+Tecnolog%C3%ADa+Torre%C3%B3n/@25.5372733,-103.4654479,17z/data=!3m1!4b1!4m6!3m5!1s0x868fd9689c38aa7b:0x93f069a0cb99a84!8m2!3d25.5372685!4d-103.462873!16s%2Fg%2F1td4vq7s?entry=ttu">Plaza de la Tecnología Torreon - Local 314/322/316</a>
          </div>

          <div class="mt-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill me-1" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
              <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
            </svg>

            <a href="https://www.google.com.mx/maps/place/Plaza+de+la+Tecnolog%C3%ADa+Torre%C3%B3n/@25.5372733,-103.4654479,17z/data=!3m1!4b1!4m6!3m5!1s0x868fd9689c38aa7b:0x93f069a0cb99a84!8m2!3d25.5372685!4d-103.462873!16s%2Fg%2F1td4vq7s?entry=ttu">Av. Hidalgo 1334, Primitivo Centro, 27000 Torreón, Coah.</a>
          </div>  

        </div>

      </div>


      <div class="bg-dark p-2">

        <img src="potato_dev.png" class="rounded mx-auto d-block p-2" alt="Potato Develpment" width="130">

        <p style="font-size: small;" class="text-white-50 mb-0 text-center">
          Copyright © 2023, Potato Development
        </p>

      </div>

    </div>

  </footer>

  <script>
  </script>

</body>

</html>