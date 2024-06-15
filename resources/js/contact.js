// resources/js/contact.js

document.addEventListener('DOMContentLoaded', function() {
    const contactDetails = document.querySelectorAll('.contact-details p');
    contactDetails.forEach(detail => {
        detail.addEventListener('click', function() {
            alert(`Detail: ${this.textContent}`);
        });
    });
});
