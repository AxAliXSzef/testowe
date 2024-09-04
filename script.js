document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // Wyświetlanie modalu
    $('#successModal').modal('show');
    // Reset formularza po wysłaniu
    this.reset();
});
