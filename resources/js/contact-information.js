// resources/js/contact-information.js

document.addEventListener('DOMContentLoaded', function() {
    // Selecione o elemento que contém as informações de contato
    const contactInfo = document.querySelector('.contact-information');

    // Adicione um evento de clique para mostrar/ocultar as informações detalhadas
    contactInfo.addEventListener('click', function() {
        const contactDetails = this.querySelector('.contact-details');
        contactDetails.classList.toggle('show-details');
    });
});
