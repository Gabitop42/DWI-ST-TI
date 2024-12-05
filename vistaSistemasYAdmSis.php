<?php
// Incluimos el header
include("componentes/header.php");
?>

<div class="container mt-5" style="min-height: 729px;">
    <h1 class="text-center mb-4" style="color: #ff9800;">Tickets Registrados</h1>
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
                <td style="background-color: #ffeb3b;">En preparación</td>
                <td>2024-11-28 12:00:00</td>
                <td>2024-11-28 12:00:00</td>
                <td>Comentario de prueba</td>
                <td>Juan Pérez</td>
                <td>Pedro Gómez</td>
                <td>67890</td>
            </tr>
            <tr style="background-color: #fff;">
                <td>12346</td>
                <td style="background-color: #4caf50; color: white;">Terminado</td>
                <td>2024-11-25 09:30:00</td>
                <td>2024-11-26 10:00:00</td>
                <td>Reparación completa</td>
                <td>Maria López</td>
                <td>Carlos Martínez</td>
                <td>67891</td>
            </tr>
            <!-- Más filas se agregarían aquí dinámicamente con PHP si se usan datos guardados -->
        </tbody>
    </table>
</div>

<?php
// Incluimos el footer
include("componentes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>