<?php
IF(!isset($_GET['id'])){
    header('Location: index.php');
}
include 'src/conexionbd.php';

$id = $_GET['id'];

$sentencia = $bd->prepare("SELECT * FROM productos P INNER JOIN imagenes_productos IP ON P.id_producto = IP.id_producto where P.id_producto = ?;"); //INNER JOIN categorias C ON P.id_categoria = C.id_categoria 
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

$rutaCarpetaImagenes = 'adminView/products/posters/';

?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Plantilla producto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="estilo.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/diseno.css">

        <body class="bg-white"> 
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
  
                      <li class="nav-item p-auto me-1 it border border-2 border-black shadow-lg">
                          <a class="nav-link text-center" aria-current="page" href="index.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                            </svg>
                          </a>
                      </li>
  
                      <li class="nav-item p-auto me-1">
                          <a class="nav-link text-center" aria-current="page" href="carrito.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                          </a>
                      </li>
  
                      <li class="nav-item p-auto">
                        <a class="nav-link text-center" aria-current="page" href="contactanos.php">
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Videojuegos</a></li>
                        <li><a class="dropdown-item" href="#">Accesorios</a></li>
                        <li><a class="dropdown-item" href="#">Ropa</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item text-center">
                          <a class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                          </a>
                      </li>
                      
                    <li class="nav-item text-center">
                          <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                          </a>
                      </li>
  
                      
                  </ul>
  
                </div>
              </div>
      </nav>
  
     
        <div class="container-fluid w-75 mt-5">

            <div class="row">

                <div class="col-md-4 shadow w-auto h-auto rounded border border-black container_product_present">
                <?php
                      $nombreimagen = $persona->imagen_path;
                      $rutaimagen = $rutaCarpetaImagenes . $nombreimagen;

                      $base64 = base64_encode(file_get_contents($rutaimagen));
                      $base64 = 'data:image/jpeg;base64,'.$base64;

                      echo  "<img src='$base64' class='img_present' alt='' style='width: 488px;'>";

                    ?>
                </div>

                <div class="col-md-4">

                    <div class="card bg-body-secondary bg-gradient shadow border border-black mt-auto w-75">

                        <div class="card-body">

                                    <h2 class="card-title fw-bold titulo_pro"> <?php echo $persona->nombre ?> </h2>

                                    <h4 class="card-title fw-bold text-secondary">Categoria:</h4>
                                    <ul class="list-unstyled">
                                        <li>Tallas</li>
                                    </ul>

                                    <h4 class="card-title fw-bold text-secondary">Descripcion:</h4>
                                    <ul class="list-unstyled">
                                        <li> <?php //echo $persona->descripcion ?> </li>
                                    </ul>

                                    <h4 class="card-title fw-bold text-secondary">Info +</h4>
                                    <ul>
                                        <li>Si</li>
                                        <li>No</li>
                                        <li>Si</li>
                                        <li>si</li>
                                    </ul>
                    
                                    <ul class="list-unstyled">
                                        <li><b> <?php echo $persona->precio ?> </b></li>
                                    </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6 w-auto me-0 ms-0">
                    <div class="btns_container">
                        <button class="btn btn-warning text-dark fw-bold rounded-pill pos_btns">AGREGAR AL CARRITO</button><br/><br/>
                        <button class="btn btn-dark fw-bold rounded-pill pos_btns">VOLVER A RESULTADOS</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid bg-dark mt-5 p-4">
            <div class="row">
                <div class="col">
                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">

                        <div class="card border border-3 border-secondary" style="width: 15rem; border: 2px solid;">

                            <img src="img/..." class="card-img-top" alt="producto 1">
                            
                            <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                                <h5>Juguete</h5>
                                <p class="card-text">
                                    <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark">$400.00</b>
                                </p>
                            </div>
                        </div>

                    </a>
                </div>
                <div class="col-fluid">
                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
                        <div class="card border border-3 border-secondary" style="width: 15rem;">

                            <img src="img/k..." class="card-img-top" alt="producto 2">

                            <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                                <h5>Ropa</h5>
                                <p class="card-text">
                                    <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark">$430.00</b>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
                        <div class="card border border-3 border-secondary" style="width: 15rem;">

                            <img src="img/..." class="card-img-top" alt="producto 3">

                            <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                                <h5>Accesorio</h5>
                                <p class="card-text">
                                    <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark">$100.00</b>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <div class="card border border-3 border-secondary" style="width: 15rem;">

                        <img src="img/..." class="card-img-top" alt="producto 4">

                        <div class="card-body bg-dark bg-gradient text-white rounded-bottom">
                            <h5>Videojuego</h5>
                            
                            <p class="card-text">
                                <b class="bg-warning bg-gradient border border-2 border-black p-1 rounded-pill text-dark">$700.00</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Xykaow5M6xosbl+eovUDxu6Zb+VBzqE3F1fTCepyrViZfmiwD9+vgHMgW8FDoZ2Y" crossorigin="anonymous"></script>

</body>
</html>