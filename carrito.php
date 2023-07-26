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
                            <li class="nav-item dropdown p-auto">
                        
                              <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                              </a>
                      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1" style="margin-right: 85px;">
                                <li class="dropdown-item rounded">' . $_SESSION["nombre"] . '</li>
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
                              <li><a class="dropdown-item" href="adminView/clientes/index1.php">Clientes</a></li>
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
                      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1" style="margin-right: 85px;">
                                <li class="dropdown-item rounded">' . $_SESSION["nombre"] . '</li>
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
                
                        <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1" style="margin-right: 85px;">
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
  if (!isset($_SESSION['nombre'])) {
  ?>

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
  } else {

    //$IDusuario = $_SESSION['id'];
    //$sentencia = $bd->query("SELECT id_carrito FROM carrito WHERE id_usuario = $IDusuario;");
    //$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
//
    //if(empty($persona)){

    $total = 0;
  ?>

    <br>
    <div class="container-pag-carrito">

      <div class="carrito-detalles p-1">

        <div class="text-center">
          <span class="cart-le my-auto w-auto bg-dark background-categorias text-light mx-auto p-2">
            <b>DETALLES</b>
          </span>
        </div> <br>


        <div class="container-carrito shadow-lg border border-2 border-black p-3 rounded-4 p-1">

          <div class="informacion-detalles-carrito">
          <?php
        // Verificar si tiene folio
        if (isset($_SESSION['folio']) && !empty($_SESSION['folio'])) {
         $folio = $_SESSION['folio'];
         echo '<p style="font-size: 17px;"><b>Folio:</b>'.$_SESSION['folio'].'</p>';
          // Aquí también puedes deshabilitar el botón de compra si lo deseas
          echo '<script>document.getElementById("btnPedido").disabled = true;</script>';
} else {
         echo '<p style="font-size: 17px;"><b>Folio: </b> No generado</p>';         
         // Aquí también puedes habilitar el botón de compra si lo deseas
         echo '<script>document.getElementById("btnPedido").disabled = false;</script>';
}
?>
            <p style="font-size: 17px;"><b>Fecha realizacion de pedido:</b> No generada</p>
            <p style="font-size: 17px;"><b>Fecha limite de recogida:</b> No generada</p>
            <p style="font-size: 17px;"><b>Elementos:</b> <?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?> </p>
            <p style="font-size: 17px;"><b>Total:</b> $<?php if (isset($_SESSION['CARRITO'])) {foreach ($_SESSION['CARRITO'] as $indice => $producto) {$total += $producto['PRECIO'];}} echo $total; ?> </p>

            <div class="container-btn">
              <!--En la action va "product.php" para descativar este boton, pero tambien hay mas codigos comentados aparte de este para que esto funcione-->

              <form action="src/insertdatcarrito.php" method="post" target="_blank">  
                <input type="hidden" name="txtTotal" value="<?php echo $total; ?>">
                <button class="btn btn-carrito btn-warning border border-3 border-dark rounded-pill shadow" type="submit" name="btnPedido" id="btnPedido"  value="pedido" <?php //echo $boton_desactivado ? 'disabled' : '';             //if (isset($_SESSION['btnPedido']) && $_SESSION['btnPedido']) echo 'disabled'; ?>>
                  <b>REALIZAR PEDIDO</b>
                </button>
              </form>
            </div>

            <p style="font-size: 14px;" class="mt-3">Apartir de realizar el pedido se tienen 3 dias para recogerlo, despues de ese lapso de tiempo se cancelara automaticamente. Se debe presentar el folio para recoger el paquete.</p>
          </div>

        </div>
      </div>
    </div>

    <?php if (!empty($_SESSION['CARRITO'])) { ?>

      <div class="container-carrito-div p-1">

        <div class="text-center">
          <span class="cart-le my-auto w-auto bg-dark background-categorias text-light mx-auto p-2">
            <b>CARRITO</b>
          </span>
        </div><br>

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
                  <p class="mb-0" style="font-size: 12px;"><?php echo $producto['NOMBRE'] ?></p>
                  <b style="font-size: 12px;">$<?php echo $producto['PRECIO'] ?></b>
                </div>

                <div class="col-3 container-folio-products w-25 text-center me-auto border"> <?php //OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO ?>

                  <p class="mb-0" style="font-size: 12px;">
                    Cantidad
                    <br/>

                    <input type="text" class="bg-body-secondary rounded border border-2 border-black w-25 text-center" id="INDICE<?php echo $indice; ?>" value="<?php echo $producto['CANTIDAD']; ?>" oninput="actualizarCantidad(<?php echo $indice; ?>)"> </input> 
                  </p>

                  <a class="ver-pro mt-3" style="font-size: 10px;" href="#">
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

      <!--</div>-->
    <?php } else 
    { ?>
      <div class="container-carrito-div p-1">
        <div class="text-center">
          <span class="cart-le my-auto w-auto bg-dark background-categorias text-light mx-auto p-2">
            <b>CARRITO</b>
          </span>
        </div><br>

        <div class="container-carrito barra-deslizable shadow-lg border border-2 border-black p-3 rounded-4 p-1 w-100">
          <div class="text-center p-1 w-auto mt-0">
            Aún no hay productos en el carrito...
          </div>
        </div>
        
      </div>
      
    <?php 
    }
  //} else{
//
  ////echo 'YA HICISTE UNA COMPRA, PENE';

//}
}
  ?>

</body>

</html>