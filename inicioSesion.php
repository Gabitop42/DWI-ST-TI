<?php
// Incluimos el header
include("componentes/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* Estilos personalizados */
body {
    background-color: #f5f5f5;
    /* Fondo gris claro */
}

.login-form {
    background-color: white;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.login-form h1 {
    color: #ff9800;
    /* Naranja */
}

.login-form .form-label {
    color: #333;
    /* Gris oscuro para las etiquetas */
}

.login-form .form-control {
    border-color: #ff9800;
    /* Naranja para el borde */
}

.login-form .btn-primary {
    background-color: #ff9800;
    /* Naranja */
    border-color: #ff9800;
    /* Naranja */
}

.login-form .btn-primary:hover {
    background-color: #fb8c00;
    /* Naranja más oscuro */
    border-color: #fb8c00;
}
</style>

<div class="d-flex flex-column" style="min-height: 777px;">
    <!-- Contenido principal -->
    <div class="container mt-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h1 class="text-center">Iniciar Sesión</h1>
                    <form action="login.php" method="post" class="mt-4">
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Incluimos el footer adicional (si aplica)
include("componentes/footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>