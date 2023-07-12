<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $alert='';
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $categoria=$_POST['categoria'];
        $precio=$_POST['precio'];
        include('conectarbd.php');
        $sql="insert into productos(nombre,descripcion,id_categoria,precio) values('$nombre','$descripcion',$categoria,$precio)";
        $resultado=mysqli_query($con,$sql);
        if($resultado){
            $alert="<div class='alert alert-success content' role='alert'>
            Registro agregado exitosamente
            </div>";
        }else{
            $alert="<div class='alert alert-danger content' role='alert'>
            Registro no ingresado
            </div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group select {
            height: 34px;
        }

        .form-group .btn {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group .btn:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
        </style>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".content").fadeOut(1500);
        },3000);
    });
    </script>
</head>
<body>

    <?php echo isset($alert) ? $alert: ''; ?>
    <form action="" method="post"> 
        <div class="mb-3" style="text-align: left;">
            <label>Nombre:</label>
            <input name="nombre" class="form-control" id="nombre">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label>Descripcion:</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3" style="text-align: left;">
            <label>Categoria:</label>
            <input name="categoria" class="form-control" id="categoria">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label>Precio:</label>
            <input name="precio" class="form-control" id="precio">
        </div>
        <div class="mb-3" style="text-align: left;">
            <input type="submit" name="submit" class="btn btn-success form-control" value="Registrar">    
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/evitar_reenvio.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>