<?php
// Incluimos el header
include("componentes/header.php");
?>
<!-- Incluir el componente Back -->
<?php include("componentes/backButton.php"); ?>

<div class="container mt-5" style="min-height: 729px;">
    <!-- Título de la página -->
    <h1 class="text-center mb-4" style="color: #ff9800;">Tickets Registrados</h1>

    <!-- Filtros -->
    <div class="row mb-4 justify-content-center">
        <div class="col-md-3">
            <label for="estadoFilter" class="form-label text-center">Filtrar por Estado</label>
            <select class="form-select" id="estadoFilter">
                <option value="">Todos</option>
                <option value="en-preparacion">En preparación</option>
                <option value="terminado">Terminado</option>
                <option value="rechazado">Rechazado</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="solicitanteFilter" class="form-label text-center">Filtrar por Solicitante</label>
            <select class="form-select" id="solicitanteFilter">
                <option value="">Todos</option>
                <option value="juan">Juan Pérez</option>
                <option value="maria">Maria López</option>
                <option value="pedro">Pedro Gómez</option>
                <option value="ana">Ana Gómez</option>
            </select>
        </div>
    </div>

    <!-- Indicadores de estado -->
    <div class="row mb-4 justify-content-center">
        <div class="col-md-2">
            <div class="card text-center" style="background-color: #ff9800;">
                <div class="card-body text-white">
                    <h5>Total</h5>
                    <p>10</p> <!-- Aquí se deben mostrar dinámicamente los tickets totales -->
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center" style="background-color: #ffeb3b;">
                <div class="card-body">
                    <h5>En preparación</h5>
                    <p>3</p> <!-- Aquí se deben mostrar dinámicamente los tickets en preparación -->
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center" style="background-color: #4caf50; color: white;">
                <div class="card-body">
                    <h5>Terminado</h5>
                    <p>2</p> <!-- Aquí se deben mostrar dinámicamente los tickets terminados -->
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center" style="background-color: #f44336;">
                <div class="card-body text-white">
                    <h5>Rechazado</h5>
                    <p>1</p> <!-- Aquí se deben mostrar dinámicamente los tickets rechazados -->
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de tickets -->
    <table class="table table-bordered table-hover" style="border: 2px solid #ddd;">
        <thead class="table-dark text-center" style="background-color: #ff9800; color: white;">
            <tr>
                <th>ID</th>
                <th>Estado</th>
                <th>Fecha Creación</th>
                <th>Fecha Actualización</th>
                <th>Asunto</th> <!-- Cambié 'Comentario' por 'Asunto' -->
                <th>Solicitante</th>
                <th>Asignado</th>
                <th>Acción</th> <!-- Nueva columna para ingresar al ticket -->
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se deben mostrar los datos guardados, por ejemplo, de la base de datos -->
            <tr class="text-center" style="background-color: #fff;">
                <td>12345</td>
                <td style="background-color: #ffeb3b;">En preparación</td> <!-- Color amarillo -->
                <td>2024-11-28 12:00:00</td>
                <td>2024-11-28 12:00:00</td>
                <td>Revisión de solicitud</td> <!-- Ejemplo de asunto -->
                <td>Juan Pérez</td>
                <td>Pedro Gómez</td>
                <td>
                    <a href="vistaComentarios.php" class="btn w-100"
                        style="background-color: #ff9800; color: white;">Ver Ticket</a>
                    <!-- Botón con color naranja -->
                </td>
            </tr>
            <tr class="text-center" style="background-color: #fff;">
                <td>12346</td>
                <td style="background-color: #4caf50; color: white;">Terminado</td> <!-- Color verde -->
                <td>2024-11-25 09:30:00</td>
                <td>2024-11-26 10:00:00</td>
                <td>Reparación completa</td> <!-- Ejemplo de asunto -->
                <td>Maria López</td>
                <td>Carlos Martínez</td>
                <td>
                    <a href="vistaComentarios.php" class="btn w-100"
                        style="background-color: #ff9800; color: white;">Ver Ticket</a>
                    <!-- Botón con color naranja -->
                </td>
            </tr>
            <tr class="text-center" style="background-color: #fff;">
                <td>12347</td>
                <td style="background-color: #f44336; color: white;">Rechazado</td> <!-- Color rojo -->
                <td>2024-11-24 11:00:00</td>
                <td>2024-11-25 13:30:00</td>
                <td>Problema de hardware</td> <!-- Ejemplo de asunto -->
                <td>Pedro Gómez</td>
                <td>Ana Gómez</td>
                <td>
                    <a href="vistaComentarios.php" class="btn w-100"
                        style="background-color: #ff9800; color: white;">Ver Ticket</a>
                    <!-- Botón con color naranja -->
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
// Incluimos el footer
include("componentes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>