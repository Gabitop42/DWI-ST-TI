let usuarioSeleccionado = {};
let ticketSeleccionado = {};

// Muestra el modal con las opciones de Editar o Eliminar
function mostrarAccionUsuario(
  id,
  nombre,
  apellido,
  gmail,
  telefono,
  fechaNacimiento,
  dni,
  ciudad
) {
  usuarioSeleccionado = {
    id,
    nombre,
    apellido,
    gmail,
    telefono,
    fechaNacimiento,
    dni,
    ciudad,
  };
  document.getElementById("accionModalUsuario").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

// Muestra el modal con las opciones de Editar o Eliminar
function mostrarAccionTicket(
  id,
  estado,
  fechaCreacion,
  fechaActualizacion,
  comentario,
  solicitante,
  asignado,
  idrequerimiento
) {
  ticketSeleccionado = {
    id,
    estado,
    fechaCreacion,
    fechaActualizacion,
    comentario,
    solicitante,
    asignado,
    idrequerimiento,
  };
  document.getElementById("accionModalTicket").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

// Muestra el formulario de edición
function editarUsuario() {
  document.getElementById("id").value = usuarioSeleccionado.id;
  document.getElementById("nombre").value = usuarioSeleccionado.nombre;
  document.getElementById("apellido").value = usuarioSeleccionado.apellido;
  document.getElementById("gmail").value = usuarioSeleccionado.gmail;
  document.getElementById("telefono").value = usuarioSeleccionado.telefono;
  document.getElementById("fechaNacimiento").value =
    usuarioSeleccionado.fechaNacimiento;
  document.getElementById("dni").value = usuarioSeleccionado.dni;
  document.getElementById("ciudad").value = usuarioSeleccionado.ciudad;

  document.getElementById("accionModalUsuario").style.display = "none";
  document.getElementById("overlay").style.display = "block";
  document.getElementById("editarModalUsuario").style.display = "block";
}

// Muestra el formulario de edición
function editarTicket() {
  document.getElementById("id").value = ticketSeleccionado.id;
  document.getElementById("estado").value = ticketSeleccionado.estado;
  document.getElementById("fechaCreacion").value =
    ticketSeleccionado.fechaCreacion;
  document.getElementById("fechaActualizacion").value =
    ticketSeleccionado.fechaActualizacion;
  document.getElementById("comentario").value = ticketSeleccionado.comentario;
  document.getElementById("solicitante").value = ticketSeleccionado.solicitante;
  document.getElementById("asignado").value = ticketSeleccionado.asignado;
  document.getElementById("idrequerimiento").value =
    ticketSeleccionado.idrequerimiento;

  document.getElementById("accionModalTicket").style.display = "none";
  document.getElementById("overlay").style.display = "block";
  document.getElementById("editarModalTicket").style.display = "block";
}

// Muestra la pantalla de eliminación de confirmación
function eliminarUsuario() {
  document.getElementById("accionModalUsuario").style.display = "none";
  document.getElementById("confirmarModalUsuario").style.display = "block";
}
// Muestra la pantalla de eliminación de confirmación
function eliminarTicket() {
  document.getElementById("accionModalTicket").style.display = "none";
  document.getElementById("confirmarModalTicket").style.display = "block";
}

// Confirma la eliminación del usuario
function confirmarEliminarUsuario() {
  alert(
    "Usuario: " +
      usuarioSeleccionado.nombre +
      " " +
      usuarioSeleccionado.apellido +
      " eliminado."
  );
  document.getElementById("confirmarModalUsuario").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}
// Confirma la eliminación del usuario
function confirmarEliminarTicket() {
  alert("Ticket: " + ticketSeleccionado.id + " eliminado.");
  document.getElementById("confirmarModalTicket").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

// Cancela la eliminación
function cancelarEliminarUsuario() {
  document.getElementById("confirmarModalUsuario").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}
// Cancela la eliminación
function cancelarEliminarTicket() {
  document.getElementById("confirmarModalTicket").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

// Función para cerrar el modal de opciones
function cerrarModalUsuario() {
  document.getElementById("accionModalUsuario").style.display = "none";
  document.getElementById("overlay").style.display = "none";
  document.getElementById("editarModalUsuario").style.display = "none";
}
// Función para cerrar el modal de opciones
function cerrarModalTicket() {
  document.getElementById("accionModalTicket").style.display = "none";
  document.getElementById("overlay").style.display = "none";
  document.getElementById("editarModalTicket").style.display = "none";
}
