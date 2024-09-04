document.addEventListener('DOMContentLoaded', function() {
    // Scroll to contact section
    document.getElementById('contactButton').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('kontakt').scrollIntoView({ behavior: 'smooth' });
    });

    // Handle form submission
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Wyświetlanie modalu
        $('#successModal').modal('show');
        // Reset formularza po wysłaniu
        this.reset();
    });
});
