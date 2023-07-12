<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $alert='';
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $contraseña=$_POST['contraseña'];
        include('conectarbd.php');
        $sql="insert into usuarios(nombre,email,telefono,contraseña) values('$nombre','$email',$telefono,'$contraseña')";
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
</head>
<body>

    <?php echo isset($alert) ? $alert: ''; ?>
    <form action="" method="post"> 
        <div class="mb-3" style="text-align: left;">
            <label>Nombre:</label>
            <input name="nombre" class="form-control" id="nombre">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label>Email:</label>
            <input name="email" class="form-control" id="email">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label>Telefono:</label>
            <input name="telefono" class="form-control" id="telefono">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label>Contraseña:</label>
            <input name="contraseña" class="form-control" id="contraseña">
        </div>
        <div class="mb-3" style="text-align: left;">
            <input type="submit" name="submit" class="btn btn-success form-control" value="Registrar">    
        </div>
    </form>

</body>
</html>