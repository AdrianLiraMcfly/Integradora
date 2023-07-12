<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../productos/estilo.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Listado</title>
    <style>
    .container {
        margin-top: 50px;
    }

    .table {
        background-color: #fff;
    }
    .transparent-button {
    background-color: transparent;
    border: none;
}


    </style>
</head>
<body>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nº</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Opciones</th>
        </tr>
        </thead>
        
        <?php
        include('conectarbd.php');
        $sql="select * from vista_usuarios_roles";
        $result=mysqli_query($con,$sql);
        while($row=$result->fetch_assoc()){
            $field0name=$row['id_usuario'];
            $field1name=$row['usuario'];
            $field2name=$row['telefono'];
            $field3name=$row['email'];
            $field4name=$row['contraseña'];
            $field5name=$row['rol'];
            echo '<tr>
                <td>'.$field0name.'</td>
                <td>'.$field1name.'</td>
                <td>'.$field2name.'</td>
                <td>'.$field3name.'</td>
                <td>'.$field4name.'</td>
                <td>'.$field5name.'</td>
                <td>
                    <a href="eliminar.php?id='.$field0name.'" class="btn btn-danger transparent-button">
                    <img src="../iconos/trash-svgrepo-com.svg" alt="delate" width="28px"></a>

                    <button class="btn btn-primary transparent-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop'.$row['id_usuario'].'">
                    <img src="../iconos/edit-3-svgrepo-com.svg" alt="delate" width="28px"></button>
                </td>
            </tr>';
        }
        ?>

    </table>
    
</body>
</html>