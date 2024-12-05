<!-- Modal de Edición (Se mostrará al hacer clic en "Editar") -->
<div id="editarModalUsuario"
    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); z-index: 1000; width: 400px;">
    <h5 style="margin-bottom: 20px;">Editar Usuario</h5>
    <form action="guardar_usuario.php" method="POST">
        <input type="hidden" id="id" name="id" />

        <!-- Fila para campos Nombre y Apellido -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required />
            </div>
        </div>

        <!-- Fila para campos Gmail y Teléfono -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="gmail" class="form-label">Gmail:</label>
                <input type="email" class="form-control" id="gmail" name="gmail" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required />
            </div>
        </div>

        <!-- Fila para campos Fecha de Nacimiento y DNI -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="dni" class="form-label">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" required />
            </div>
        </div>

        <!-- Fila para campo Ciudad centrado -->
        <div class="row">
            <div class="col-md-12 mb-3 text-center">
                <label for="ciudad" class="form-label">Ciudad:</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required />
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            <button type="button" class="btn btn-secondary ms-2" onclick="cerrarModalUsuario()">Cancelar</button>
        </div>
    </form>
</div>