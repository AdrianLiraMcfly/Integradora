<div class="modal fade" id="changeNameModal" tabindex="-1" role="dialog" aria-labelledby="changeNameLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content bg-light p-2 border border-dark">

      <div class="modal-header p-2">

        <h5 class="modal-title text-center" id="changeNameLabel">Cambiar Nombre de Usuario</h5>

        <!--
        <button type="button" class="close bg-danger border shadow border-2 border-dark rounded-pill text-light text-center" style="width: 32; height: 32;" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="fw-bolder" style="font-size: large; width: auto; height: auto;">
              &times;
            </span>
        </button>
        -->

      </div>

      <div class="modal-body">

        <form id="nameChangeForm" method="post" action="src/cambiarNom.php">

          <div class="form-group">
            <label for="newName" class="fw-normal ms-2">Nuevo nombre</label>
            <input type="text" class="form-control rounded-pill border border-2 border-dark shadow" id="newName" name="newName" required>
          </div>

          <br>
          <button type="submit" class="btn btn-warning border border-3 border-dark shadow rounded-pill"><b>GUARDAR CAMBIOS</b></button>

        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger border border-dark border-3 shadow rounded-pill text-light" data-dismiss="modal"><b>CERRAR</b></button>
      </div>

    </div>

  </div>

</div>