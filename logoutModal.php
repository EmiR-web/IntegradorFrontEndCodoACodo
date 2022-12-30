<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
      </div>
      <div class="modal-body">
        <p id="mensaje">¿Desea salir de la sesión?</p>
      </div>
      <div class="modal-footer">
        <form action="checklogin.php" method="POST">

            <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cerrar">
            <input type="submit" class="btn btn-primary" name="btn-logout" value="Confirmar">
        </form>
      </div>
    </div>
  </div>
</div>