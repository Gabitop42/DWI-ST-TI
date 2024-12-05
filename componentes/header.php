<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Personalización de los colores */
    .navbar {
        background-color: #ff9800;
        /* Naranja para la barra de navegación */
    }

    .navbar-brand {
        color: white !important;
        /* Blanco para el texto */
    }

    .navbar-nav .nav-link {
        color: white !important;
        /* Blanco para los enlaces */
    }

    .navbar-nav .nav-link:hover {
        color: black !important;
        color: #fb8c00 !important;
        /* Naranja para los enlaces al pasar el cursor */
    }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="d-flex justify-content-between w-100">
                <!-- Columna a la izquierda: Nombre del proyecto -->
                <a class="navbar-brand" href="vistaListadoTickets.php">Mi Proyecto</a>

                <!-- Columna al centro: Enlaces Tickets y Usuarios -->
                <div class="d-flex justify-content-center w-50" style="padding-left: 580px;">
                    <ul class="navbar-nav">
                        <!-- Desplegable de Tickets -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Tickets
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="vistaListadoTickets.php">Listar Tickets</a></li>
                                <li><a class="dropdown-item" href="vistaTrabajadorInsertar.php">Registrar Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Enlace a Usuarios -->
                        <li class="nav-item">
                            <a class="nav-link" href="vistaCRUDUsuario.php">Usuarios</a>
                        </li>
                    </ul>
                </div>

                <!-- Columna a la derecha: Desplegable de Perfil -->
            <a class="navbar-brand" href="#">Mi Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                            <li>
                                <!-- Botón para redirigir al inicio de sesión -->
                                <a class="dropdown-item" href="/ProyectoDesarrolloWeb/inicioSesion.php">Cerrar
                                    sesión</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS y Popper.js desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>