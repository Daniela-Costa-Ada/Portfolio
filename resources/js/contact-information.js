// resources/js/contact-information.js

document.addEventListener('DOMContentLoaded', function() {    
    const contactInfo = document.querySelector('.contact-information');    
    contactInfo.addEventListener('click', function() {
        const contactDetails = this.querySelector('.contact-details');
        contactDetails.classList.toggle('show-details');
    });
});
