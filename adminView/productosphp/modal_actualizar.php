<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
        include('conectarbd.php');
        $sql="select * from productos";
        $result=mysqli_query($con,$sql);
        while($row=$result->fetch_assoc()){
          $field0name=$row['id_producto'];
          $field1name=$row['nombre'];
          $field2name=$row['precio'];
          $field3name=$row['id_categoria'];

            echo '
            <div class="modal fade" id="staticBackdrop'.$field0name.'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Datos</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="actualizar.php?id='.$field0name.'" method="post">
                      <div class="mb-3" style="text-align: left;">
                          <label>Nombre:</label>
                          <input value="'.$field1name.'" name="nombre" class="form-control" id="nombre">
                      </div>
                      <div class="mb-3" style="text-align: left;">
                          <label>Precio:</label>
                          <input value="'.$field2name.'" name="precio" class="form-control" id="precio">
                      </div>
                      <div class="mb-3" style="text-align: left;">
                          <label>Categoria:</label>
                          <input value="'.$field3name.'" name="categoria" class="form-control" id="categoria">
                      </div>

          
                </div>
                <div class="modal-footer">
                  <input type="submit" name="submit" class="btn btn-primary" value="Guardar Cambios">    
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </form>
              </div>
            </div>
              </div>
                  </div>
              </div>
            ';
        }
    ?>
</body>
</html>