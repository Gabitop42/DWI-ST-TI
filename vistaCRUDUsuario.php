<?php
// Incluimos el header
include("componentes/header.php");
?>
<!-- Incluir el componente Back -->
<?php include("componentes/backButton.php"); ?>

<div class="container mt-5">
    <h1 class="text-center mb-4" style="color: #ff9800;">Gestión de Usuarios</h1>

    <div class="row g-4" style="min-height: 681px;">
        <!-- Formulario -->
        <div class="col-md-6">
            <form action="guardar_usuario.php" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="id" class="form-label">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" readonly />
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required />
                    </div>
                    <div class="col-md-6">
                        <label for="gmail" class="form-label">Gmail:</label>
                        <input type="email" class="form-control" id="gmail" name="gmail" required />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required />
                    </div>
                    <div class="col-md-6">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="dni" class="form-label">DNI:</label>
                        <input type="text" class="form-control" id="dni" name="dni" required />
                    </div>
                    <div class="col-md-6">
                        <label for="ciudad" class="form-label">Ciudad:</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn"
                            style="background-color: #4caf50; color: white;">Guardar</button>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="reset" class="btn" style="background-color: #2196f3; color: white;">Nuevo</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla -->
        <div class="col-md-6">
            <h4 class="text-center mb-4" style="color: #ff9800;">Lista de Usuarios</h4>
            <table class="table table-bordered table-hover" style="border: 2px solid #ddd;">
                <thead class="table-dark text-center" style="background-color: #ff9800; color: white;">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Gmail</th>
                        <th>Teléfono</th>
                        <th>Fecha Nacimiento</th>
                        <th>DNI</th>
                        <th>Ciudad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center" style="background-color: #fff;"
                        onclick="mostrarAccionUsuario(1, 'Juan', 'Pérez', 'juan.perez@gmail.com', '123456789', '1990-01-01', '12345678', 'Buenos Aires')">
                        <td>1</td>
                        <td>Juan</td>
                        <td>Pérez</td>
                        <td>juan.perez@gmail.com</td>
                        <td>123456789</td>
                        <td>1990-01-01</td>
                        <td>12345678</td>
                        <td>Buenos Aires</td>
                    </tr>
                    <tr class="text-center" style="background-color: #fff;"
                        onclick="mostrarAccionUsuario(2, 'Maria', 'López', 'maria.lopez@gmail.com', '987654321', '1995-05-20', '87654321', 'Córdoba')">
                        <td>2</td>
                        <td>Maria</td>
                        <td>López</td>
                        <td>maria.lopez@gmail.com</td>
                        <td>987654321</td>
                        <td>1995-05-20</td>
                        <td>87654321</td>
                        <td>Córdoba</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
// Incluimos el footer
include("componentes/footer.php");
?>

<!-- Modal de Acciones (se muestra al hacer clic en una fila) -->
<?php include("componentes/pantallazos/modalAccionesUsuario.php"); ?>

<!-- Modal de Confirmación de Eliminación -->
<?php include("componentes/pantallazos/modalConfirmacionUsuario.php"); ?>

<!-- Modal de Edición -->
<?php include("componentes/pantallazos/modalEditarUsuario.php"); ?>

<!-- Overlay -->
<?php include("componentes/pantallazos/overlay.php"); ?>

<script src="componentes/pantallazos/gestionPantallas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
/* Ajustes de estilo */
.btn-sm {
    padding: 10px 15px;
    border-radius: 5px;
}

.overlay {
    background: rgba(0, 0, 0, 0.3);
}

/* Estilo para botones dentro de formularios o tablas */
.btn {
    margin-bottom: 10px;
    /* Espacio entre botones */
}

.btn-sm {
    margin-right: 5px;
    /* Espacio entre botones pequeños */
}
</style>