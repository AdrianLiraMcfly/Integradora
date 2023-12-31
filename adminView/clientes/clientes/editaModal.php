<!-- Modal edita registro -->
<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header head-mod">
                <h1 class="modal-title fs-5" id="editaModalLabel">Editar registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualiza.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" id="id" name="id">

                    <div class="mb-2">
                        <label for="rol" class="form-label fw-medium">Roles:</label>
                        <select name="rol" id="rol" class="form-select  form-select-sm" required>
                            <option value="">Seleccionar...</option>
                            <?php while ($row_genero = $generos->fetch_assoc()) { ?>
                                <option value="<?php echo $row_genero["id_rol"]; ?>"><?= $row_genero["nombre"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="estado" class="form-label fw-medium">Estado:</label>
                        <select name="estado" id="estado" class="form-select  form-select-sm" required>
                            <option value="">Seleccionar...</option>
                            <?php while ($row_res = $resultado->fetch_assoc()) { ?>
                                <option value="<?php echo $row_res["id"]; ?>"><?= $row_res["estado_usuario"] ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="d-flex justify-content-end pt2">
                        <button type="button" class="btn btn-danger border border-3 border-dark shadow rounded-pill me-1 text-uppercase" data-bs-dismiss="modal"><b>Cerrar</b></button>
                        <button type="submit" class="btn btn-warning border border-dark border-3 shadow rounded-pill ms-1 text-uppercase"><i class="fa-solid fa-floppy-disk"></i> <b>Guardar</b></button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>