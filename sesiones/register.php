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

<body class="bg-white" style="background-image: url(css/img/wallpaper.jpg)">

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
                        <a class="nav-link text-center" aria-current="page" href="../../carrito.php">
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
                        <li><a class="dropdown-item rounded mb-1" href="#">Videojuegos</a></li>
                        <li><a class="dropdown-item rounded mb-1" href="#">Accesorios</a></li>
                        <li><a class="dropdown-item rounded mb-1" href="#">Ropa</a></li>
                        <li><a class="dropdown-item rounded mb-1" href="#">Juguetes</a></li>
                        <li><a class="dropdown-item rounded mb-1" href="#">Consolas</a></li>
                        <li><a class="dropdown-item rounded" href="#">Electronica</a></li>
                      </ul>

                    </li>

                    <li class="nav-item dropdown p-auto">
                        
                      <a class="nav-link text-center dropdown-toggle it border border-2 border-black shadow-lg" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                      </a>
                      
                      <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1" style="margin-right: 85px;">
                        <li><a class="dropdown-item rounded bg-primary text-light mb-1" href="#"><strong>Sign In</strong></a></li>
                        <li><a class="dropdown-item rounded" href="login.html">Log In</a></li>
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

        <div class="mb-5 p-5 bg-warning bg-gradient border border-3 border-light-subtle" id="formu">
          <h2 class="text-center titulo_pro text-light"><b>REGISTRATE!</b></h2>
          <h4 class="text-center titulo_pro text-dark mb-4"><b>Unete a VideoGame Store!</b></h4>

          <form action="#" onsubmit="equalspass(event)">

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

                <input class="form-check-input" type="checkbox" value="" id="contravisi" onchange="verpass()">
                <label class="form-check-label" for="defaultCheck1">
                  Contraseña visible
                </label>

                <br>
                <button type="submit" class="btn btn-dark fw-bold rounded-pill border-3 border-white" onclick="valform(event)">ACEPTAR</button>

          </form>
          
        </div>
  
      </div>
  
</body>
</html>