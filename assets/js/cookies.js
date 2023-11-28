// Función para mostrar la ventana modal
function mostrarModal() {
    var modal = document.getElementById("modal");
    var overlay = document.getElementById("modal-overlay");

    modal.style.display = "block";
    overlay.style.display = "block";
}

// Función para aceptar cookies y cerrar la ventana modal
function aceptarCookies() {
    // Aquí puedes agregar la lógica para establecer la cookie
    alert("Cookies aceptadas");
    // Cierra la ventana modal
    cerrarModal();
}

// Función para rechazar cookies, redirigir a google.com y cerrar la ventana modal
function rechazarCookies() {
    // Aquí puedes agregar la lógica para redirigir a google.com
    alert("Cookies rechazadas. Redirigiendo a Google.com");
    window.location.href = "https://www.google.com";
    // Cierra la ventana modal
    cerrarModal();
}

// Función para cerrar la ventana modal
function cerrarModal() {
    var modal = document.getElementById("modal");
    var overlay = document.getElementById("modal-overlay");

    modal.style.display = "none";
    overlay.style.display = "none";
}

// Muestra la ventana modal al cargar la página
window.onload = function () {
    mostrarModal();
};