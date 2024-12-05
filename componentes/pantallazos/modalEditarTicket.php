<!-- Modal de Edición (Se mostrará al hacer clic en "Editar") -->
<div id="editarModalTicket"
    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); z-index: 1000; width: 400px;">
    <h5 style="margin-bottom: 20px;">Editar Ticket</h5>
    <form action="guardar_ticket.php" method="POST">
        <input type="hidden" id="id" name="id" />

        <!-- Usamos un contenedor de fila para dividir el formulario en dos columnas -->
        <div class="row">
            <!-- Primera columna -->
            <div class="col-md-6 mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="fechacreacion" class="form-label">Fecha Creación:</label>
                <input type="text" class="form-control" id="fechaCreacion" name="fechaCreacion" required />
            </div>
        </div>

        <div class="row">
            <!-- Segunda columna -->
            <div class="col-md-6 mb-3">
                <label for="fechaactualizacion" class="form-label">Fecha Actualización:</label>
                <input type="email" class="form-control" id="fechaActualizacion" name="fechaActualizacion" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="comentario" class="form-label">Comentario:</label>
                <input type="text" class="form-control" id="comentario" name="comentario" required />
            </div>
        </div>

        <div class="row">
            <!-- Tercera columna -->
            <div class="col-md-6 mb-3">
                <label for="solicitante" class="form-label">Solicitante:</label>
                <input type="date" class="form-control" id="solicitante" name="solicitante" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="asignado" class="form-label">Asignado:</label>
                <input type="text" class="form-control" id="asignado" name="asignado" required />
            </div>
        </div>

        <!-- Fila para el campo único "ID Requerimiento" centrado -->
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <label for="idrequerimiento" class="form-label">ID Requerimiento:</label>
                <input type="text" class="form-control" id="idrequerimiento" name="idrequerimiento" required />
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            <button type="button" class="btn btn-secondary ms-2" onclick="cerrarModalTicket()">Cancelar</button>
        </div>
    </form>
</div>