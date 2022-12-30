<!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75 ">
            <div class="modal-header d-flex justify-content-center align-items-center">
            <h2 class="text-center mb-4 text-primary">Login</h2>
            </div>
            <div class="modal-body p-4">
            <form action="checklogin.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control bg-info bg-opacity-10 border border-primary" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control bg-info bg-opacity-10 border border-primary" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid">

                        <input class="btn btn-primary" name="btn-ingresar" type="submit" value="Ingresar">
                        <br>
                        <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cerrar">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>