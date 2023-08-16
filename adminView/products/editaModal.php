<!-- Modal edita registro -->
<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header head-mod">
                <h1 class="modal-title fs-5" id="editaModalLabel">Editar registro</h1>
                <!--<button type="button" class="btn-close bg-light rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            
            <div class="modal-body">
                <form action="actualiza.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" id="id" name="id">

                    <div class="mb-2">
                        <label for="nombre" class="form-label fw-medium">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" required>
                    </div>

                    <div class="mb-2">
                        <label for="descripcion" class="form-label fw-medium">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" class="form-control form-control-sm" rows="5" required></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="precio" class="form-label fw-medium">Precio:</label>
                                <input type="number" name="precio" id="precio" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cantidad" class="form-label fw-medium">Inventario:</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="categoria" class="form-label fw-medium">Categoria:</label>
                        <select name="categoria" id="categoria" class="form-select  form-select-sm" required>
                            <option value="">Seleccionar...</option>
                            <?php while ($row_genero = $generos->fetch_assoc()) { ?>
                                <option value="<?php echo $row_genero["id_categoria"]; ?>"><?= $row_genero["nombre"] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-2">
                        <img id="img_poster" width="100" class="img-thumbnail">
                    </div>

                    <div class="mb-3">
                        <label for="poster" class="form-label fw-medium">Poster:</label>
                        <input type="file" name="poster" id="poster" class="form-control form-control-sm" accept="image/jpeg">
                    </div>

                    <div class="d-flex justify-content-end pt2">
                        <button type="button" class="btn btn-danger border border-3 border-dark shadow rounded-pill me-1" data-bs-dismiss="modal"><b>CERRAR</b></button>
                        <button type="submit" class="btn btn-warning border border-dark border-3 shadow rounded-pill ms-1"><i class="fa-solid fa-floppy-disk"></i> <b>GUARDAR</b></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>