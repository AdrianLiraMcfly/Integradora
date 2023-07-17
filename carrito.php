<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Carrito</title>
</head>

<body class="bg-white w-100">

    <nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm" id="ini" style="width: 100.9%;">
      <div class="container-fluid">

        <img src="vd_logo.png" alt="" width="110px" class="p-2">

        <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <form class="d-flex me-3" role="search">

              <input class="form-control me-2 border border-black rounded-start-pill shadow" id="look" type="search" placeholder="Buscar..." aria-label="Search">

                <button class="btn bg-secondary-subtle border border-black rounded-end-circle rounded-start-0 shadow" type="button" id="button-addon2">
                  <img src="img/lupa.png" alt="" style="width: 25px">
                </button>

            </form>

            <div class="collapse navbar-collapse icons" id="navbarSupportedContent">
                
                <ul class="navbar-nav">

                    <li class="nav-item p-auto me-1">
                        <a class="nav-link text-center" aria-current="page" href="index.php">
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

                    <li class="nav-item p-auto me-1">
                      <a class="nav-link text-center" aria-current="page" href="contactanos.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                          <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                      </a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link text-center dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
                        <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                      </svg>
                    </a>

                    <ul class="dropdown-menu border-black">
                      <li><a class="dropdown-item" href="#">Videojuegos</a></li>
                      <li><a class="dropdown-item" href="#">Accesorios</a></li>
                      <li><a class="dropdown-item" href="#">Ropa</a></li>
                      <li><a class="dropdown-item" href="#">Juguetes</a></li>
                      <li><a class="dropdown-item" href="#">Consolas</a></li>
                      <li><a class="dropdown-item" href="#">Electronica</a></li>
                    </ul>
                  </li>

                </ul>
                
                <ul class="navbar-nav ms-auto me-auto">

                  <li class="nav-item text-center dropdown p-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>

                    <ul class="dropdown-menu border-black">
                      <li><a class="dropdown-item" href="#">Sign In</a></li>
                      <li><a class="dropdown-item" href="#">Log In</a></li>
                    </ul>
                  </li>

                  <li class="nav-item text-center p-auto">
                        <a class="nav-link">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                        </a>
                  </li>
                    
                </ul>

            </div>
      </div>
    </nav>

    <div class="text-center mt-4 w-100">
        <div class="col pt-3 pb-2 bg-dark text-light rounded-pill">
          <h3><b>CARRITO</b></h3>
        </div>
    </div>
    

      <div class="container mt-3 bg-secondary-subtle w-auto rounded border border-1 border-black shadow-lg">
        <div  class="row pt-3 ps-3 pe-3 pb-0">

            <div class="text-center col order-last p-2 border border-1">
              
            </div>
  
            <!--
            <div class="text-center col bg-dark p-2 border border-black border-1 border-end-0 border-bottom-0 border-end-0">
              <p class="mb-0 text-white" style="font-size: 18px;"><b>FOLIO</b></p>
            </div>-->

            <div class="text-center col bg-dark p-2 border border-black border-1 border-bottom-0">
              <p class="mb-0 text-white" style="font-size: 18px;"><b>IMAGEN</b></p>
            </div>
  
            <div class="text-center col order-first bg-dark p-2 border border-1 border-black border-end-0 border-bottom-0">
              <p class="mb-0 text-white" style="font-size: 18px;"><b>PRODUCTO</b></p>
            </div>
  
          </div>

        <div class="row pt-0 ps-3 pe-3 pb-3">

          <div class="text-center col order-last p-2 border">
            <button class="mt-22 border border-1 border-black bg-danger p-2 rounded-pill shadow-lg">
              <img src="img/delete.png" alt="delete" width="32px">
            </button>
          </div>

          <!--
          <div class="text-center col bg-light p-2 border border-black border-1 border-end-0">
            <p class="mb-0" style="font-size: 18px;">XXXXXXX</p>
          </div>-->

          <div class="text-center col bg-light p-2 border border-black border-1">
            <div>
              <img src="img/galvatron.png" class="rounded border border-2 shadow-sm" style="width: 28%;">
            </div>
          </div>

          <div class="text-center col order-first bg-light p-2 border border-1 border-black border-end-0">
            <p class="mb-0" style="font-size: 18px;">Galvatron Figura AoE</p>
            <h2><b>$500.00</b></h2>
          </div>

        </div>
      </div>
</body>
</html>