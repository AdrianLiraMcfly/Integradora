<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="../estilo.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script>
    function verpass()
    {
      var password = document.getElementById("pass");
      var passwordre= document.getElementById("passre");
      var vercon= document.getElementById("contravisi");

      if (vercon.checked)
      {
        password.type="text";
        passwordre.type="text";
      }
      else
      {
        password.type="password";
        passwordre.type="password";
      }
    }

    function valform(event) {
            event.preventDefault();

            var password = document.getElementById("pass").value;
            var passwordre = document.getElementById("passre").value;

            if (password !== passwordre) {
                alert("Las contraseñas no coinciden. Por favor, inténtalo nuevamente.");
                return;
            }

            if (/\d/.test(password)) {
                document.getElementById("form-re").submit();
            } else {
                alert("La contraseña debe contener al menos un número");
                return;
            }
        }
  </script>

  <title>SignIn</title>

</head>

<body>
  <div>
  <nav class="navbar navbar-expand-lg bg-warning bg-gradient row shadow-sm" id="ini" style="width: 100.9%;">
      <div class="container-fluid">

            <img src="vd_logo.png" alt="" width="110px" class="p-2 me-auto">

            <button class="navbar-toggler d-md-none d-sm-none d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <div class="container-fluid">
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse icons" id="navbarSupportedContent">
                
                <ul class="navbar-nav me-auto">

                    <li class="nav-item p-auto me-1 ">
                        <a class="nav-link text-center" aria-current="page" href="../../index.php">
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

                      <ul class="dropdown-menu bg-body-secondary border border-black border-2">
                        <li><a class="dropdown-item" href="#">Videojuegos</a></li>
                        <li><a class="dropdown-item" href="#">Accesorios</a></li>
                        <li><a class="dropdown-item" href="#">Ropa</a></li>
                        <li><a class="dropdown-item" href="#">Juguetes</a></li>
                        <li><a class="dropdown-item" href="#">Consolas</a></li>
                        <li><a class="dropdown-item" href="#">Electronica</a></li>
                      </ul>

                    </li>

                  <li class="nav-item dropdown p-auto">
                        
                    <a class="nav-link text-center dropdown-toggle it border border-2 border-black shadow-lg" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    </a>
                      
                    <ul class="dropdown-menu bg-body-secondary border border-black border-2" style="margin-right: 85px;">
                      <li><a class="dropdown-item" href="#">Sign In</a></li>
                      <li><a class="dropdown-item" href="login.html">Log In</a></li>
                    </ul>
                        
                  </li>

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

  <div class="container-fluid" id="contenedor">

    <div id="inbc" class="d-none d-lg-block d-xl-block"></div>

    <div id="formu">
      <h2 class="text-center titulo_pro text-light"><b>REGISTRATE!</b></h2>
      <h4 class="text-center titulo_pro text-dark mb-4"><b>Unete a VideoGame Store!</b></h4>

      <form action="#" onsubmit="equalspass(event)" id="form-re">
        <div class="mb-3">
          <label for=""><b>Nombre completo</b></label>
          <input type="text" name="nombre" class="form-control border border-black shadow-sm" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <div class="mb-3">
          <label for=""><b>Email</b></label>
          <input type="text" class="form-control border border-black shadow-sm" name="email" placeholder="" aria-label="ejemplo@gmail.com" aria-describedby="basic-addon1" required>
        </div>

        <div class="mb-3">
          <label for=""><b>Contraseña</b></label>
          <input type="password" class="form-control border border-black shadow-sm" id="pass" name="pass" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <div class="mb-3">
          <label for=""><b>Repite contraseña</b></label>
          <input type="password" class="form-control border border-black shadow-sm" id="passre" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

        <div class="form-check">

          <input class="form-check-input border border-black shadow-sm" type="checkbox" value="" id="contravisi" onchange="verpass()">

          <input class="form-check-input border border-black" type="checkbox" value="" id="contravisi" onchange="verpass()">
          <input class="form-check-input" type="checkbox" value="" id="contravisi" onchange="verpass()">
          <label class="form-check-label" for="defaultCheck1">
            Contraseña visible
          </label>
        </div>

        <button type="submit" class="btn btn-dark fw-bold rounded-pill border-3 border-white" onclick="valform(event)">ACEPTAR</button>

      </form>
    </div>
  
  </div>
</div>

  <footer>
    <div class="container-fluid" id="foot">

      <div class="row">
        <div class="col">
          <h5>Contactos</h5>

          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
          </svg>

          <a href="contactanos.php">Contactanos por correo</a>
          <br>

          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg>

          <a href="https://www.facebook.com/VideoGameStorePT">Facebook</a>
    
        </div>

        <div class="col">
          <h5>Encuentranos en</h5>

          <a href="https://www.google.com.mx/maps/place/Plaza+de+la+Tecnolog%C3%ADa+Torre%C3%B3n/@25.5372733,-103.4654479,17z/data=!3m1!4b1!4m6!3m5!1s0x868fd9689c38aa7b:0x93f069a0cb99a84!8m2!3d25.5372685!4d-103.462873!16s%2Fg%2F1td4vq7s?entry=ttu">Plaza de la tecnologia Torreon - Local 314/322/316</a>
          <br>

          <a href="https://www.google.com.mx/maps/place/Plaza+de+la+Tecnolog%C3%ADa+Torre%C3%B3n/@25.5372733,-103.4654479,17z/data=!3m1!4b1!4m6!3m5!1s0x868fd9689c38aa7b:0x93f069a0cb99a84!8m2!3d25.5372685!4d-103.462873!16s%2Fg%2F1td4vq7s?entry=ttu">Dirección: Av Hidalgo 1334, Primitivo Centro, 27000 Torreón, Coah.</a>
        </div>

      </div>

      <p>Copyright © 2023 El presente canal es operado por Potato Development de Torreon Coahuila Mexico.</p>

    </div>

  </footer>
  
</body>
</html>