<div class="modal fade" id="changeNameModal" tabindex="-1" role="dialog" aria-labelledby="changeNameLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeNameLabel">Cambiar Nombre de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="nameChangeForm" method="post" action="src/cambiarNom.php">
          <div class="form-group">
            <label for="newName">Nuevo Nombre de Usuario</label>
            <input type="text" class="form-control" id="newName" name="newName" required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>