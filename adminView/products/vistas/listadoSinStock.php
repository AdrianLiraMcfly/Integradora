<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-9 mx-auto">


<?php if (isset($_SESSION['msg']) && isset($_SESSION['color'])) { ?>
    <div class="alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['color']);
    unset($_SESSION['msg']); 
} ?>


<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre del Producto</th>
            <th>Categoria</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($row = $peliculas->fetch_assoc()) { ?>
            <tr class="table-danger"> 
                <td><?= $row['id_producto']; ?></td>
                <td><?= $row['nombre_producto']; ?></td>
                <td><?= $row['nombre_categoria']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>


</div>
</div> 
</body>
</html>