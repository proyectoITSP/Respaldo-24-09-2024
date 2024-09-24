// Listas de sugerencias
const nombres = ["Pulga", "Bicho", "Cohelo", "Lautaro"];
const direcciones = ["Calle Falsa 123", "Avenida Siempre Viva 742", "Boulevard de los Sueños 567", "Ruta 101 km 32"];

function autocompleteGradually(input, text, delay = 100) {
    let index = 0;

    function typeCharacter() {
        if (index < text.length) {
            input.value += text.charAt(index);
            index++;
            setTimeout(typeCharacter, delay);
        }
    }

    typeCharacter();
}

// Función para generar el email basado en el nombre
function generateEmail(name) {
    const domain = "@ejemplo.com";
    const email = name.toLowerCase().replace(" ", "") + domain;
    return email;
}

// Obtener los inputs por su ID
const nombreInput = document.getElementById("nombre_autocompletar");
const emailInput = document.getElementById("email_autocompletar");
const direccionInput = document.getElementById("direccion_autocompletar");

// Seleccionar valores aleatorios de las listas de sugerencias
const randomNombre = nombres[Math.floor(Math.random() * nombres.length)];
const randomDireccion = direcciones[Math.floor(Math.random() * direcciones.length)];

// Llamar a las funciones para autocompletar gradualmente al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    // Autocompletar el nombre y luego el email basado en el nombre
    autocompleteGradually(nombreInput, randomNombre, 150);
    
    // Esperar hasta que el nombre esté completo para autocompletar el email y la dirección
    setTimeout(function() {
        const generatedEmail = generateEmail(randomNombre);
        autocompleteGradually(emailInput, generatedEmail, 150);
        autocompleteGradually(direccionInput, randomDireccion, 150);
    }, randomNombre.length * 150); // Tiempo que tarda en completarse el nombre
});

// Seleccionar el formulario que tiene los datos a enviar
const formulario = document.querySelector('.form');

// Usando selectores para los inputs
const input_nombre = document.querySelector("input[name='nombre']");
const input_email = document.querySelector("input[name='email']");
const input_pass = document.querySelector("input[name='password']");
const input_telefono = document.querySelector("input[name='telefono']");
const input_ubicacion = document.querySelector("input[name='ubicacion']");

const datos = { input_email, input_pass, input_nombre, input_telefono, input_ubicacion };

formulario.addEventListener("submit", function(evento) {
    let es_valido = true;

    // Recorro el objeto datos que tiene todos los inputs
    for (let campo in datos) {
        // Compruebo si los campos están vacíos, además recorto los espacios con trim
        if (datos[campo].value.trim() === '') {
            alert("Todos los campos son obligatorios");
            es_valido = false;
            break;
        }
    }

    // Si no es válido, prevenir el envío del formulario con preventDefault()
    if (!es_valido) {
        evento.preventDefault();
    }
});
document.getElementById("finalForm").addEventListener("submit", function(event) {
    const nombre = document.querySelector("input[name='nombre']").value.trim();
    const ubicacion = document.querySelector("input[name='ubicacion']").value.trim();
    const telefono = document.querySelector("input[name='telefono']").value.trim();

    if (!nombre || !ubicacion || !telefono) {
        alert("Todos los campos son obligatorios.");
        event.preventDefault(); // Evitar que el formulario se envíe
    }
});