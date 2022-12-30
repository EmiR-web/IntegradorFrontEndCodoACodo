<!-- Modal -->
<div class="modal fade" id="modificarModal" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Modificar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="oradores.php" method="POST">
                    <input type="hidden" name="id" id="id">
                    <!-- Nombre input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="nombre" name="nombre" class="form-control" />
                        <label class="form-label" for="name4">Nombre</label>
                    </div>

                    <!-- Apellido input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="apellido" name="apellido" class="form-control" />
                        <label class="form-label" for="email4">Apellido</label>
                    </div>

                    <!-- textarea input -->
                    <div class="form-outline mb-4">
                        <textarea id="tematica" rows="4" name="tematica" class="form-control"></textarea>
                        <label class="form-label" for="textarea4">Your message</label>
                    </div>

                    <!-- Checkbox -->
                    <!-- <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="checkbox4" checked />
                        <label class="form-check-label" for="checkbox4">
                            Send me a copy of this message
                        </label>
                    </div> -->

                    <!-- Submit button -->
                    <input type="submit" class="btn btn-primary btn-block" name="btn-form-mod" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->