$('#btn-back').on('click', function() {
    if (window.history && window.history.back) {
        window.history.back();
    } else {
        console.error('No se puede retroceder en el historial de navegación.');
    }
});