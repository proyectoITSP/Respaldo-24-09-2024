// Función para el carrusel de la página principal
// Función para el carrusel de la página principal
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');

function showNextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    document.querySelector('.slides').style.transform = `translateX(-${currentIndex * 100}%)`;
}
setInterval(showNextSlide, 6000); 

// Función para cuando el usuario se ha registrado o iniciado sesión
// Función para cuando el usuario se ha registrado o iniciado sesión
function ocultarDivsSiSesionIniciada() {
  if (loged) {
      document.getElementById('login').style.display = 'none';
      document.getElementById('signup').style.display = 'none';
      document.getElementById('login2').style.display = 'none';
      document.getElementById('signup2').style.display = 'none';
      document.getElementById('nombre_usuario').style.display = 'block';
      document.getElementById('perfil_escondido').style.display = 'block';
      document.getElementById('perfil_escondido2').style.display = 'block';
  }
}

document.addEventListener('DOMContentLoaded', ocultarDivsSiSesionIniciada);


// Función para el estado de la empresa
// Función para el estado de la empresa
let estadoEmpresa = 'Abierto';

// Función para actualizar el estado visual de los botones
function actualizarEstadoEmpresa(estado) {
    // Cambiar el estado global
    estadoEmpresa = estado;

    // Guardar el estado en Local Storage
    localStorage.setItem('estado_empresa', estado);

    // Obtener los botones
    const botonPrincipal = document.getElementById('estado_empresa');
    const botonModal = document.getElementById('estado_empresa_2');

    // Actualizar el botón principal
    botonPrincipal.textContent = estado;
    if (estado === 'Cerrado') {
        botonPrincipal.style.backgroundColor = '#FF9E9D';
        botonPrincipal.style.borderRightColor = '#FFCAC9';
        botonPrincipal.style.borderBottomColor = '#FFCAC9';
    } else {
        botonPrincipal.style.backgroundColor = '#9FC7AA';
        botonPrincipal.style.borderRightColor = '#CAE0D0';
        botonPrincipal.style.borderBottomColor = '#CAE0D0';
    }

    // Actualizar el botón en el modal
    botonModal.textContent = estado;
    if (estado === 'Cerrado') {
        botonModal.style.backgroundColor = '#FF9E9D';
        botonModal.style.borderRightColor = '#FFCAC9';
        botonModal.style.borderBottomColor = '#FFCAC9';
    } else {
        botonModal.style.backgroundColor = '#9FC7AA';
        botonModal.style.borderRightColor = '#CAE0D0';
        botonModal.style.borderBottomColor = '#CAE0D0';
    }
}

// Al cargar la página, verificar el estado guardado en Local Storage
document.addEventListener('DOMContentLoaded', function() {
    const estadoGuardado = localStorage.getItem('estado_empresa');
    if (estadoGuardado) {
        // Si hay un estado guardado, actualizar los botones con ese estado
        actualizarEstadoEmpresa(estadoGuardado);
    } else {
        // Si no hay un estado guardado, usar el estado inicial ('Abierto')
        actualizarEstadoEmpresa(estadoEmpresa);
    }
});

// Escuchar clic en el botón principal
document.getElementById('estado_empresa').addEventListener('click', function(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del enlace

    if (estadoEmpresa === 'Abierto') {
        actualizarEstadoEmpresa('Cerrado');
    } else {
        actualizarEstadoEmpresa('Abierto');
    }
});

// Escuchar clic en el botón dentro del modal
document.getElementById('estado_empresa_2').addEventListener('click', function(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del enlace

    if (estadoEmpresa === 'Abierto') {
        actualizarEstadoEmpresa('Cerrado');
    } else {
        actualizarEstadoEmpresa('Abierto');
    }
});


// Ventana modal eliminar o cancelar pedido
// Ventana modal eliminar o cancelar pedido
var modal = document.getElementById("modal_borrar");
var deleteBtn = document.getElementById("eliminar_pedido");
var cancelBtn = document.getElementById("cancelar_borrado");

// Mostrar el modal al hacer clic en "Eliminar Pedido"
deleteBtn.onclick = function() {
    modal.style.display = "block";

    // Asegúrate de que el botón en el modal refleje el estado actual
    actualizarEstadoEmpresa(estadoEmpresa);
}

// Cerrar el modal al hacer clic en "No quiero borrar este pedido"
cancelBtn.onclick = function() {
    modal.style.display = "none";
}
