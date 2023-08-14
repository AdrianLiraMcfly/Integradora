<!-- Modal edita registro -->
<div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header head-mod">
                <h1 class="modal-title fs-5" id="editaModalLabel">Editar registro</h1>
            </div>
            <div class="modal-body">
                <form action="actualiza.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" id="id" name="id">

                    <div class="mb-2">
                        <label for="estado" class="form-label">Estado:</label>
                        <select name="estado" id="estado" class="form-select  form-select-sm" required>
                            <option value="">Seleccionar...</option>
                            <?php while ($row_genero = $generos->fetch_assoc()) { ?>
                                <option value="<?php echo $row_genero["id_estado"]; ?>"><?= $row_genero["nombre_estado"] ?></option>
                            <?php } ?>
                        </select>
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