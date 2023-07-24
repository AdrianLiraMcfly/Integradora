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

<div class="row justify-content-start">
    <div class="col-auto">
        <a href="#" class="btn btn-dark rounded-pill mt-3 shadow" data-bs-toggle="modal" data-bs-target="#nuevoModal"><b class="text-warning">AGREGAR PRODUCTOS</b></a>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre de la categoria</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($row = $peliculas->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id_categoria']; ?></td>
                <td><?= $row['nombre']; ?></td>
                <td>
                    <a href="#" class="btn transparent-button" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row['id_categoria']; ?>"><img src="../../iconos/edit-3-svgrepo-com.svg" alt="edit" width="25px"></a>

                    <a href="#" class="btn transparent-button" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row['id_categoria']; ?>"><img src="../../iconos/trash-svgrepo-com.svg" alt="delate" width="25px"></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>


<?php 
$sqlGenero = "SELECT id_categoria, nombre FROM categorias";
$generos = $conn->query($sqlGenero);
?>

<?php include '../category/nuevoModal.php'; ?>

<?php $generos->data_seek(0); ?>

<?php include '../category/editaModal.php'; ?>
<?php include '../category/eliminaModal.php'; ?>

</div>
</div> 
</body>
</html>