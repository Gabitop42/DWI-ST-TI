<!-- back_button.php -->
<div class="container mt-5">
    <!-- Botón de regreso -->
    <button class="btn btn-back" data-bs-toggle="modal" data-bs-target="#backModal">
        < </button>
</div>

<!-- Modal para el botón de "Back" -->
<div class="modal fade" id="backModal" tabindex="-1" aria-labelledby="backModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="backModalLabel">¿Estás seguro?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Quieres regresar a " "? No se guardarán los cambios si no los has enviado.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Regresar</button>
            </div>
        </div>
    </div>
</div>

<!-- Estilos personalizados para el botón -->
<style>
.btn-back {
    background-color: #ff9800;
    border: 2px solid #ff9800;
    color: white;
    font-size: 25px;
    /* Tamaño de fuente aumentado para el texto "<" */
    padding: 5px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    transition: all 0.3s ease;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    position: absolute;
    left: 10px;
    top: 70px;
    /* Ajusta la posición según la altura del header */
    z-index: 10;
    display: flex;
    justify-content: center;
    text-align: center;
}

.btn-back:hover {
    background-color: #fb8c00;
    border-color: #fb8c00;
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
}

.btn-back:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(255, 152, 0, 0.5);
}
</style>