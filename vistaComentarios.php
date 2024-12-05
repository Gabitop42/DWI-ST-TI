<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Comentarios - Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Personalización de los colores */
    body {
        background-color: #fff8e1;
        /* Fondo blanco con tono cálido */
    }

    .navbar {
        background-color: #ff9800;
        /* Naranja para la barra de navegación */
    }

    .navbar-brand {
        color: white !important;
    }

    .card {
        background-color: white;
        /* Fondo blanco para las tarjetas */
        border: 1px solid #ff9800;
        /* Borde naranja para las tarjetas */
    }

    .btn-primary {
        background-color: #ff9800;
        /* Naranja para el botón */
        border-color: #ff9800;
        /* Naranja para el borde */
    }

    .btn-primary:hover {
        background-color: #fb8c00;
        /* Naranja más oscuro al pasar el cursor */
        border-color: #fb8c00;
    }

    .comment-box {
        border: 1px solid #ff9800;
        /* Borde naranja para los comentarios */
        padding: 15px;
        margin-bottom: 10px;
        background-color: #f9f9f9;
        /* Fondo gris claro */
    }

    .comment-box .d-flex {
        border-bottom: 1px solid #ff9800;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .comment-box .d-flex strong {
        color: #333;
        /* Gris oscuro para los nombres */
    }

    .comment-box .d-flex .rounded-circle {
        background-color: #ff9800;
        /* Naranja para los avatares */
    }

    .card-body h5 {
        color: #ff9800;
        /* Naranja para los títulos de las secciones */
    }
    </style>
</head>

<body>

    <?php
    // Incluimos el header
    include("componentes/header.php");
    ?>

    <div class="container mt-5">

        <!-- Datos del ticket -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h4>Detalles del Ticket</h4>
                <p><strong>ID Ticket:</strong> N° 12345</p>
                <p><strong>Estado:</strong> En preparación</p>
                <p><strong>Asunto:</strong> Revisión del ticket y avance en el proceso</p> <!-- Asunto del ticket -->
            </div>
            <div class="col-md-6">
                <p><strong>Fecha Creación:</strong> 2024-11-28</p>
                <p><strong>Fecha Actualización:</strong> 2024-11-29</p>
                <p><strong>Comentario Inicial:</strong> Este es el comentario inicial del ticket.</p>
            </div>
        </div>

        <!-- Incluir el componente Back -->
        <?php include("componentes/backButton.php"); ?>

        <!-- Formulario para agregar comentario -->
        <div class="card mb-4">
            <div class="card-body">
                <h5>Agregar Comentario</h5>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="en-preparacion">En preparación</option>
                                <option value="terminado">Terminado</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="asignado" class="form-label">Asignado a:</label>
                            <select class="form-select" id="asignado" name="asignado" required>
                                <option value="trabajador1">Trabajador 1</option>
                                <option value="trabajador2">Trabajador 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="comentario" class="form-label">Comentario:</label>
                        <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Sección de comentarios -->
        <div class="card">
            <div class="card-body">
                <h5>Comentarios</h5>
                <div class="overflow-auto" style="max-height: 300px;">
                    <!-- Comentario 1 -->
                    <div class="comment-box">
                        <div class="d-flex align-items-center mb-2">
                            <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
                                style="width: 40px; height: 40px;">J</div>
                            <strong class="ms-2">Juan Pérez</strong>
                        </div>
                        <p><strong>Título:</strong> Comentario sobre el estado del ticket</p>
                        <p><strong>Fecha Creación:</strong> 2024-11-28 13:00:00</p>
                        <p><strong>Comentario:</strong> Este es un comentario de ejemplo sobre el ticket. El ticket está
                            en proceso de revisión.</p>
                    </div>

                    <!-- Comentario 2 -->
                    <div class="comment-box">
                        <div class="d-flex align-items-center mb-2">
                            <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
                                style="width: 40px; height: 40px;">A</div>
                            <strong class="ms-2">Ana Gómez</strong>
                        </div>
                        <p><strong>Título:</strong> Actualización de estado</p>
                        <p><strong>Fecha Creación:</strong> 2024-11-28 13:30:00</p>
                        <p><strong>Comentario:</strong> El ticket ha sido revisado y está en progreso. Necesitamos más
                            información sobre el requerimiento.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    // Incluimos el footer
    include("componentes/footer.php");
    ?>

</body>

</html>