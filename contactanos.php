<!DOCTYPE html>
<html>
    <head>
        
        <title>Contactanos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="estilo.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="32x32" href="icon.png">
        <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script>
          function alertaenv(){
            alert("Mensaje enviado");
          }
        </script>
        
        <script>
          document.addEventListener
          ("DOMContentLoaded", function() 
          {
              const cerrarBoton = document.querySelector(".cerrar");
              const alerta = document.querySelector(".alert");

              if (cerrarBoton && alerta) 
              {
                cerrarBoton.addEventListener
                ("click", function() 
                  {
                    alerta.style.display = "none"; // Oculta la alerta
                  }
                );
              }
            }
          );
        </script>

    </head>

    <body class="bg-white" style="background-image: url(img/wallpaper.jpg)">
    
      <nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm navigation-bar-final p-2 mx-auto">
          <div class="container-fluid">

            <img src="vd_logo.png" alt="Video Game Store" width="110px" class="p-2 me-auto">

            <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse icons" id="navbarSupportedContent">

                <!-- ... Otros elementos del menú desplegable ... -->
                <ul class="navbar-nav">

                  <li class="nav-item p-auto ms-1 me-1">
                      <a class="nav-link text-center" aria-current="page" href="index.php">
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
                      include 'src/conexionbd.php';
                        $sentencia = $bd->query("SELECT * FROM categorias;");
                        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                        foreach($productos as $dato){
                          echo "<li><a class='dropdown-item rounded mb-1' href='busqueda.php?id=$dato->id_categoria'>$dato->nombre</a></li>";
                        }
                      
                      ?>
                    </ul>

                  </li>

                  <?php
                    if(isset($_SESSION['nombre']))
                    {
                      if (isset($_SESSION['rol'])) 
                      {
                        switch ($_SESSION['rol']) 
                        {
                          case 1:
                            echo 
                            '<li class="nav-item dropdown p-auto me-1">
                        
                              <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                              </a>
                      
                              <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                                <li class="dropdown-item rounded">'.$_SESSION["nombre"].'</li>
                                <li><a class="dropdown-item rounded mb-1" href="historial.php">Historial de compras</a></li>
                                <li><a class="dropdown-item rounded mb-1" href="configuracion.php">Configuracion</a></li>
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
                              echo 
                              '<li class="nav-item dropdown p-auto me-1">  
                                                    
                                <a class="nav-link text-center dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                  </svg>
                                </a>
                      
                                <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                                  <li class="dropdown-item rounded">'.$_SESSION["nombre"].'</li>
                                  <li><a class="dropdown-item rounded mb-1" href="historial.php">Historial de compras</a></li>
                                  <li><a class="dropdown-item rounded mb-1" href="configuracion.php">Configuracion</a></li>
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
                        echo 
                        '<li class="nav-item dropdown p-auto me-1">
                        
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
          </div>
      </nav>

      <?php
           if (isset($_GET['mensaje'])) 
           {
            $mensajeAlerta = $_GET['mensaje'];?>

              <div class="alert alert-danger mx-auto mt-2 border border-3 border-light rounded-4 text-center" style="background-color: red; width: fit-content;">
                <b class="text-light text-uppercase fst-italic"><?php print $mensajeAlerta; ?></b>
                <br>

                <button class="btn btn-danger rounded-pill border border-light border-2 text-light mt-1 p-2 shadow cerrar">
                  <span class="fw-semibold">CERRAR</span>
                </button>
              </div>

            <?php 
          } ?>

      <!--este es el formulario-->
      <form class="bg-warning bg-gradient border border-light-subtle border-4 p-5 rounded-4 mx-auto mt-5" style="width: 400px;" action="phpmailer.php" method="post">

          <h2 class="text-center titulo_pro text-light"><b>¡ESCRIBENOS!</b></h2>
          <h4 class="text-center titulo_pro text-dark mb-4"><b>Tu opinión nos importa</b></h4>

          <div class="input-group flex-nowrap mb-4 w-100 shadow-sm" style="height: 32px;">

              <span class="input-group-text border border-black bg-dark text-light" id="addon-wrapping"><b style="font-size: 15px">@</b></span>
              <input type="text" name="destinatario" class="form-control border border-black shadow-sm" placeholder="email@example.com" aria-label="email@example.com" aria-describedby="addon-wrapping">

          </div>

          <div class="input-group flex-nowrap mb-4 w-100 shadow-sm" style="height: 32px;">

              <span class="input-group-text border border-black bg-dark text-light" id="inputGroup-sizing-default"><b style="font-size: 10px">ASUNTO</b></span>
              <input type="text" name="asunto" class="form-control border border-black shadow-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

          </div>

          <div class="input-group flex-nowrap mb-4 w-100 shadow-sm">
              <span class="input-group-text border border-black bg-dark text-light"><b style="font-size: 10px">COMENTARIO</b></span>
              <textarea class="form-control border border-black" name="mensaje" aria-label="With textarea"></textarea>
          </div>

          <button type="submit" class="btn btn-dark fw-bold rounded-pill border-3 border-white" name="send" onclick="alertenv()">ENVIAR</button>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xykaow5M6xosbl+eovUDxu6Zb+VBzqE3F1fTCepyrViZfmiwD9+vgHMgW8FDoZ2Y" crossorigin="anonymous"></script>
      <?php // ?>
    </body>

</html>