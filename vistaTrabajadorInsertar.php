<?php
// Incluimos el header
include("componentes/header.php");
?>

<div class="container mt-5">
    <h1 class="text-center mb-4" style="color: #ff9800;">Formulario de Ticket</h1>

    <div class="row g-4" style="min-height: 681px;">
        <!-- g-4 añade un espacio entre las columnas -->
        <!-- Formulario -->
        <div class="col-md-6">
            <form action="guardar_ticket.php" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="id" class="form-label">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" readonly />
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="form-label">Estado:</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="en-preparacion">En preparación</option>
                            <option value="terminado">Terminado</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="fechaCreacion" class="form-label">Fecha Creación:</label>
                        <input type="text" class="form-control" id="fechaCreacion" name="fechaCreacion" readonly />
                    </div>
                    <div class="col-md-6">
                        <label for="fechaActualizacion" class="form-label">Fecha Actualización:</label>
                        <input type="text" class="form-control" id="fechaActualizacion" name="fechaActualizacion"
                            readonly />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario:</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="solicitante" class="form-label">Solicitante:</label>
                        <input type="text" class="form-control" id="solicitante" name="solicitante" required />
                    </div>
                    <div class="col-md-6">
                        <label for="asignado" class="form-label">Asignado:</label>
                        <input type="text" class="form-control" id="asignado" name="asignado" required />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="idRequerimiento" class="form-label">ID Requerimiento:</label>
                    <input type="text" class="form-control" id="idRequerimiento" name="idRequerimiento" required />
                </div>

                <button type="submit" class="btn"
                    style="background-color: #ff9800; color: white; width: 100%;">Guardar</button>
            </form>
        </div>

        <!-- Tabla -->
        <div class="col-md-6">
            <h4 class="text-center mb-4" style="color: #ff9800;">Datos Guardados</h4>
            <table class="table table-bordered table-hover" style="border: 2px solid #ddd;">
                <thead class="table-dark" style="background-color: #ff9800; color: white;">
                    <tr>
                        <th>ID</th>
                        <th>Estado</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Actualización</th>
                        <th>Comentario</th>
                        <th>Solicitante</th>
                        <th>Asignado</th>
                        <th>ID Requerimiento</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se deben mostrar los datos guardados, por ejemplo, de la base de datos -->
                    <tr style="background-color: #fff;">
                        <td>12345</td>
                        <td>En preparación</td>
                        <td>2024-11-28 12:00:00</td>
                        <td>2024-11-28 12:00:00</td>
                        <td>Comentario de prueba</td>
                        <td>Juan Pérez</td>
                        <td>Pedro Gómez</td>
                        <td>67890</td>
                    </tr>
                    <!-- Más filas se agregarían aquí dinámicamente con PHP si se usan datos guardados -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
// Incluimos el footer
include("componentes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>