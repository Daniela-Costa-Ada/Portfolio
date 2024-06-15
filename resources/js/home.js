// resources/js/home.js

document.addEventListener('DOMContentLoaded', function() {
    const socialLinks = document.querySelectorAll('.social-links a');

    socialLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Evita que o link abra diretamente
            window.open(this.href, '_blank'); // Abre o link em uma nova aba
        });
    });
});
