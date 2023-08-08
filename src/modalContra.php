<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content bg-light p-2 border border-dark">

      <div class="modal-header p-2">
        <h5 class="modal-title" id="changePasswordLabel">Cambiar Contraseña</h5>

        <!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        -->
      </div>

      <div class="modal-body">
        <form id="passwordChangeForm" method="post" action="src/cambiarContra.php">

          <div class="form-group">
            <label for="currentPassword" class="ms-2">Contraseña Actual</label>
            <input type="password" class="form-control rounded-pill border border-2 border-dark shadow" id="currentPassword" name="currentPassword" required>
          </div>
          <br>

          <div class="form-group">
            <label for="newPassword" class="ms-2">Nueva Contraseña</label>
            <input type="password" class="form-control rounded-pill border border-2 border-dark shadow" id="newPassword" name="newPassword" required>
          </div>
          <br>

          <div class="form-group">
            <label for="confirmNewPassword" class="ms-2">Confirmar Nueva Contraseña</label>
            <input type="password" class="form-control rounded-pill border border-2 border-dark shadow" id="confirmNewPassword" name="confirmNewPassword" required>
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
