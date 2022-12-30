
<!-- Modal -->
<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Orador</h5>
      </div>
      <div class="modal-body">
        <p id="mensaje">¿Desea eliminar el registro de este orador?</p>
      </div>
      <div class="modal-footer">
        <form action="oradores.php" method="POST">
             <input type="hidden" name="id" id="id">

            <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cerrar">
            <input type="submit" class="btn btn-primary" name="btn-form-elim" value="Eliminar">
        </form>
      </div>
    </div>
  </div>
</div>