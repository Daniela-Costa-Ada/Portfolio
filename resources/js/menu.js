// resources/js/menu.js

document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu a');
    menuItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            const url = this.href;
            window.location.href = url;
        });
    });
});
