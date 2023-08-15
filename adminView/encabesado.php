<!DOCTYPE html>
<html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      
      <link rel="stylesheet" href="productos/estilo.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <title>Document</title>
  </head>

  <body>

      <nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm" id="ini">
            <div class="container-fluid">

              <img src="../productos/vd_logo.png" alt="" width="110px" class="p-2">

              <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

              <div class="container-fluid">
                  
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse icons" id="navbarSupportedContent">
                      
                      <ul class="navbar-nav">

                          <li class="nav-item p-auto me-1">
                              <a class="nav-link text-center" aria-current="page" href="../../index.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                                </svg>
                              </a>
                          </li>

                          <li class="nav-item text-center dropdown p-auto">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                            </a>
                            <?php
                            echo '
                            <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                              <li><a class="dropdown-item rounded mb-1" href="../../configuracion.php">Configuracion</a></li> 
                              <li><a class="dropdown-item rounded" href="../../src/cerrar_sesion.php">Cerrar Sesion</a></li> 
                            </ul>
                          </li>';
                          ?>
                          
                          <li class="nav-item text-center dropdown p-auto it border border-2 border-danger shadow-lg">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
                                <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                              </svg>
                            </a>

                            <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                              <li><a class="dropdown-item rounded mb-1" href="../products/index2.php">Productos</a></li>
                              <li><a class="dropdown-item rounded mb-1" href="../pedidos/pedidos.php">Pedidos</a></li>
                              <li><a class="dropdown-item rounded" href="../clientes/clientes/clientes.php">Clientes</a></li>
                            </ul>
                          </li>

                      </ul>

                  </div>
            </div>
      </nav>

  </body>
</html>