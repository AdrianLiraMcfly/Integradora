<?php
  include 'src/conexionbd.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="ruta/a/bootstrap.css">
    <link rel="stylesheet" href="css/diseno.css">

    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <style>
      #consolas
      {
        fill: white;
      }
    </style>

    <title>Inicio</title>
</head>

<body class="bg-white w-100">

      <!--BARRA-->
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

                    <li class="nav-item p-auto me-1 it border border-2 border-black shadow-lg">
                        <a class="nav-link text-center" aria-current="page" href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                          </svg>
                        </a>
                    </li>

                    <li class="nav-item p-auto me-1">
                        <a class="nav-link text-center" aria-current="page" href="carrito.php">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                          </svg>
                        </a>
                    </li>


                    <li class="nav-item dropdown p-auto me-1">

                      <a class="nav-link text-center dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                          <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                        </svg>
                      </a>

                      <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                        <?php
                          $sentencia = $bd->query("SELECT * FROM categorias;");
                          $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                          foreach($productos as $dato){
                            echo "<li><a class='dropdown-item rounded mb-1' href='busqueda.php?id=$dato->id_categoria'>$dato->nombre</a></li>";
                          }
                        
                        ?>
                      </ul>

                    </li>

                  
                    <?php
                    if(isset($_SESSION['nombre'])){
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
                                <li class="dropdown-item rounded">'.$_SESSION["nombre"].'</li>
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
                                <li class="dropdown-item rounded">'.$_SESSION["nombre"].'</li>
                                <li><a class="dropdown-item rounded mb-1" href="#">Configuracion</a></li>
                                <li><a class="dropdown-item rounded" href="src/cerrar_sesion.php">Cerrar sesion</a></li>
                              </ul>
                        
                            </li>';
                              break;
                          default:
                            
                            break;
                        }
                      }
                    }
                      else
                      {
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
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </button>

              </form>

        </div>
      </nav>
      
      <!--CARRUSEL-->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="img/zelda-tears.jpg" class="d-block w-100 mx-auto" alt="jojo" height="575px">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="dark-sh"><b>¡LA SECUELA DEL JUEGO MAS ACLAMADO DE NINTENDO SWITCH!</b></h3>
              <h4 class="text-body-secondary"><b>LUCHA JUNTO A LINK PARA DERROTAR A GANON</b></h4>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/gow-rag.jpg" class="d-block w-100 mx-auto" alt="..." height="575px">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="dark-sh"><b>AÚN QUEDAN DIOSES</b></h3>
              <h4 class="text-body-secondary"><b>KRATOS REGRESA JUNTO ATREUS PARA PRESENCIAR EL RAGNAROK</b></h4>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/ff16.jpg" class="d-block w-100 mx-auto" alt="..." height="575px">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="dark-sh"><b>UNA ÚLTIMA FANTASÍA SE APROXIMA</b></h3>
              <h4 class="text-body-secondary"><b>LA DÉCIMA SEXTA ENTREGA DE FINAL FANTASY VIENE CON TODO</b></h4>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br/>
      
      <!--CONSOLAS-->
      <div class="container container-consolas w-100">
        <div class="row">
         
          <!--PLAY-->
          <div class="col mb-3">
            <a href="#" class="link-light link-offset-2 link-underline link-underline-opacity-0" style="box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">

                <div class="card bg-primary rounded-5" style="width: 23rem;">

                    <center>
                      <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-playstation mt-4" viewBox="0 0 16 16" id="consolas">
                        <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z"/>
                      </svg>
                    </center>

                    <div class="card-body text-center text-light rounded-bottom">

                      <p class="card-text" style="text-align: justify;">
                        <b style="text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.5);">
                          Los mejores exclusivos los encuentras en playstation, historias atrapantes.
                        </b>
                      </p>
                      <form action="busqueda.php" method="get">
                      <button type="submit" class="btn btn-primary border-2 border-light bg-gradient rounded-pill">
                      <input type="hidden" name="opt" value="Playstation">
                        <b>Ver productos...</b>
                      </button>
                    </form>

                    </div>
                </div>
            </a>
          </div>
          
          <!--
          <div class="col-3"></div>-->

          <!--XBOX-->
          <div class="col mb-3">
            <a href="#" class="link-light link-offset-2 link-underline link-underline-opacity-0">

                <div class="card bg-black rounded-5" style="width: 23rem;">

                    <center>
                      <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-xbox mt-4" viewBox="0 0 16 16" id="consolas">
                        <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z"/>
                      </svg>
                    </center>

                    <div class="card-body text-center text-light rounded-bottom">

                      <p class="card-text" style="text-align: justify;">
                        <b style="text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.5);">
                          Con la consola mas poderosa de la generacion, Xbox te invita a ver sus ofertas.
                        </b>
                      </p>
                      <form action="busqueda.php" method="get">
                      <button type="submit" class="btn btn-dark border-2 border-light bg-gradient rounded-pill">
                        <input type="hidden" name="opt" value="Xbox">
                        <b>Ver productos...</b>
                      </button>
                      </form>
                    </div>
                </div>
            </a>
          </div>

          <!--
          <div class="col-3"></div>-->

          <!--NINTENDO-->
          <div class="col mb-3">
            <a href="#" class="link-light link-offset-2 link-underline link-underline-opacity-0">

                <div class="card bg-danger rounded-5" style="width: 23rem;">

                    <center>
                      <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-nintendo-switch  mt-4" viewBox="0 0 16 16" id="consolas">
                        <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.136 4.136 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979Zm4.675.269a1.621 1.621 0 0 0-1.113-1.034 1.609 1.609 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.632 1.632 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053ZM3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256Z"/>
                        <path d="M3.425.053a4.136 4.136 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.845 2.845 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                      </svg>
                    </center>

                    <div class="card-body text-center text-light rounded-bottom">

                      <p class="card-text" style="text-align: justify;">
                        <b style="text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.5);">
                          Los pioneros de la industria siguen demostrando porque son el primer lugar.
                        </b>
                      </p>
                      <form action="busqueda.php" method="get">
                      
                      <button type="submit" class="btn btn-danger border-2 border-light bg-gradient rounded-pill">
                        <input type="hidden" name="opt" value="Nintendo">
                        <b>Ver productos...</b>
                      </button>
                      </form>
                    </div>
                </div>
            </a>
          </div>

        </div>
      </div>
      <br/>
      
      <!--TITULO-->
      <div class="text-center w-100">
        <div class="col pt-3 pb-2 bg-warning text-dark rounded-pill">
          <h2><b>¡NUEVOS LANZAMIENTOS!</b></h2>
        </div>
      </div>
      <br/>

      <!--PRODUCTOS-->
      <div class="container container-products">
        <?php 
          $sentencia = $bd->query("SELECT * FROM vista_productos_categoria WHERE categoria like ('VideoJuegos') LIMIT 8;");
          $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
          $rutaCarpetaImagenes = 'adminView/products/posters/';
        foreach($productos as $dato){ ?>

          <div class="cards-presentacion">
            <a href=" product.php?id=<?php echo $dato->id_producto ?> " class="link-light link-offset-2 link-underline link-underline-opacity-0">
                <div class="card border border-3 border-secondary" style="width: 18rem;">

                <?php
                      $nombreimagen = $dato->imagen;
                      $rutaimagen = $rutaCarpetaImagenes . $nombreimagen;

                      $base64 = base64_encode(file_get_contents($rutaimagen));
                      $base64 = 'data:image/jpeg;base64,'.$base64;

                      echo  "<img src='$base64' class='img_init' alt=''>";

                    ?>

                    <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                        <h5> <?php echo $dato->nombre ?></h5>
                        <p class="card-text">
                          <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark"> $<?php echo $dato->precio ?></b>
                        </p>
                    </div>
                </div>
            </a>
          </div>


        <?php } ?>
      </div>
      <br/>

      <div class="text-center w-100 mb-4">

        <div class="col pt-3 pb-2 bg-dark text-dark rounded-pill mb-4">
          <h3><b>VIDEOGAME STORE ES TU MEJOR OPCION</b></h3>
        </div>

        
        <div class="col pt-3 pb-2 bg-danger background-categorias text-dark mx-auto">
          <h3><b>CONSOLAS</b></h3>
        </div>

      </div>
      <br/>
      
      <div class="container w-100 container-products">

        <?php 


          $sentencia = $bd->query("SELECT * FROM vista_productos_categoria WHERE categoria like ('Consolas') LIMIT 8;");
          $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
          $rutaCarpetaImagenes = 'adminView/products/posters/';
  
          foreach($productos as $dato)
        { ?>

          <div class="cards-presentacion">

            <a href=" product.php?id=<?php echo $dato->id_producto ?> " class="link-light link-offset-2 link-underline link-underline-opacity-0">
              <div class="card border border-3 border-secondary" style="width: 18rem;">

                <?php
                  $nombreimagen = $dato->imagen;
                  $rutaimagen = $rutaCarpetaImagenes . $nombreimagen;
                  $base64 = base64_encode(file_get_contents($rutaimagen));
                  $base64 = 'data:image/jpeg;base64,'.$base64;

                  echo  "<img src='$base64' class='img_init' alt=''>";
                ?>

                <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                  <h5><?php echo $dato->nombre ?></h5>

                  <p class="card-text">
                    <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark"> $<?php echo $dato->precio ?></b>
                  </p>
                </div>

              </div>
            </a>
          </div>

        <?php }
        ?>

      </div>
      <br>

      <div class="col text-center pt-3 pb-2 bg-primary background-categorias text-dark mx-auto">
        <h3><b>ROPA</b></h3>
      </div> 

      </div>

      <br/>       
      <br/>
      
      <div class="container w-100 container-products">

        <?php 
          $sentencia = $bd->query("SELECT * FROM vista_productos_categoria WHERE categoria like ('Ropa') LIMIT 3;");
          $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
          $rutaCarpetaImagenes = 'adminView/products/posters/';
  
      
    
      
      
        foreach($productos as $dato)
        { ?>

          <div class="cards-presentacion">
            <a href=" product.php?id=<?php echo $dato->id_producto ?> " class="link-light link-offset-2 link-underline link-underline-opacity-0">

              <div class="card border border-3 border-secondary" style="width: 18rem;">

                <?php

                  $nombreimagen = $dato->imagen;
                  $rutaimagen = $rutaCarpetaImagenes . $nombreimagen;
                  $base64 = base64_encode(file_get_contents($rutaimagen));
                  $base64 = 'data:image/jpeg;base64,'.$base64;

                  echo  "<img src='$base64' class='img_init' alt=''>";

                ?>

                <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                  <h5> <?php echo $dato->nombre ?></h5>
                  <p class="card-text">
                    <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark"> $<?php echo $dato->precio ?></b>
                  </p>
                </div>
              </div>
            </a>
          </div>


          <?php }
            $bd = NULL;
          ?>



      </div>
      <br/>

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
</body>
</html>