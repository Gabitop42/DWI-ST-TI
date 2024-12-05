<div id="confirmarModalUsuario"
    style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); z-index: 1000; width: 300px;">
    <h5 style="margin-bottom: 20px;">¿Está seguro que desea eliminar esta fila?</h5>
    <div style="text-align: right;">
        <button onclick="confirmarEliminarUsuario()" class="btn btn-sm"
            style="background-color: #4CAF50; color: white; margin-right: 10px;">Sí</button>
        <button onclick="cancelarEliminarUsuario()" class="btn btn-sm"
            style="background-color: #f44336; color: white;">No</button>
    </div>
</div>