<?php
session_start();
include '../src/conexionbd.php';
if (isset($_SESSION['id'])) {
    header('Location: ../index.php'); // Redirigir a la página principal si ya tiene una sesión activa
    exit();
}
/*
if (isset($_SESSION['email'])) { 
    // Si el usuario ya ha iniciado sesión, redireccionar a la página de inicio
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Realizar consulta preparada para buscar el usuario por email
    $query = "SELECT id, nombre, contraseña FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña usando password_verify()
        if (password_verify($password, $row['contraseña'])) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["nombre"] = $row['nombre'];
            $_SESSION["email"] = $email;
            // Redireccionar a la página de inicio después del inicio de sesión exitoso
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Contraseña incorrecta";
        }
    } else {
        $error_message = "Usuario no encontrado";
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    <link rel="stylesheet" href="estilo2.css">-->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="../icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="css/diseño.css">

    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>LogIn</title>
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
                    <a class="nav-link text-center" aria-current="page" href="../index.php">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                      </svg>
                    </a>
                </li>

                <li class="nav-item p-auto me-1">
                    <a class="nav-link text-center" aria-current="page" href="../carrito.php">
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
                            echo "<li><a class='dropdown-item rounded mb-1' href='../busqueda.php?id=$dato->id_categoria'>$dato->nombre</a></li>";
                          }
                        
                        ?>
                        </ul>
                </li>

                <li class="nav-item dropdown p-auto">
                    
                  <a class="nav-link text-center dropdown-toggle it border border-2 border-black shadow-lg" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                  </a>
                  
                  <ul class="dropdown-menu bg-dark-subtle border border-black border-2 p-1">
                    <li><a class="dropdown-item rounded mb-1" href="register.php">Sign In</a></li>
                    <li><a class="dropdown-item rounded bg-primary text-light" href="#"><strong>Log In</strong></a></li>
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

  <?php
           if (isset($_GET['mensaje'])) {
           $mensajeAlerta = $_GET['mensaje'];?>
           <div class="alert alert-danger"><b><?php print $mensajeAlerta; ?></b></div>
           <?php } 
           else if (isset($_SESSION["mensaje_error"])) 
           {?>
            <div class="alert alert-danger"><b><?php print $_SESSION["mensaje_error"]; ?></b></div>
            <?php } ?>
      <div class="formulario bg-warning bg-gradient border border-4 border-light-subtle p-5 rounded-4 mx-auto mt-5">
        <h2 class="text-center titulo_pro text-light mt-2" ><b>INICIA SESION!</b></h2>
        <h4 class="text-center titulo_pro text-dark mb-5"><b>Bienvenido!</b></h4>

        <form action="../src/login.php" method="post">

            <div class="username mb-5">
                <input class="border border border-black text-start p-3 shadow-sm rounded w-100" name="email" type="email" required>
                <label for=""><b>Email de usuario</b></label>
            </div>

            <div class="username mb-4">
                <input class="border border border-black text-start p-3 shadow-sm rounded w-100" type="password" name="password" required name="" id="" required>
                <label for=""><b>Contraseña</b></label>
            </div>

            <div class="recordar">

              <input name="btningresar" class="btn btn-dark fw-bold rounded-pill border border-3 border-white" type="submit" value="INICIAR SESION">
              <br/><br/>

              <label for=""><a href="" class="link-offset-2 link-underline link-underline-opacity-0 fw-medium">¿Olvido su contraseña?</a></label><br>
              <label for=""><b>¿No tiene una cuenta?</b> <a href="register.php" class="link-offset-2 link-underline link-underline-opacity-0 fw-medium">Cree una</a></label>

            </div>

        </form>
      </div>
      
</body>
</html>