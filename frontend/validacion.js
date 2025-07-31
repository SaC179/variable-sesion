document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const nombre = document.getElementById('nombre').value.trim();
        const email = document.getElementById('email').value.trim();
        const edad = document.getElementById('edad').value.trim();

        let mensaje = '';
        if (nombre.length < 2) mensaje += 'El nombre debe tener al menos 2 caracteres.\n';
        if (!/^\S+@\S+\.\S+$/.test(email)) mensaje += 'El email no es válido.\n';
        if (!/^\d+$/.test(edad) || edad < 1) mensaje += 'La edad debe ser un número positivo.\n';

        if (mensaje) {
            alert(mensaje);
            e.preventDefault();
        }
    });
});