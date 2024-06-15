// resources/js/home.js

document.addEventListener('DOMContentLoaded', function() {
    const projectElements = document.querySelectorAll('.project');
    const messageContainer = document.getElementById('message-container');

    projectElements.forEach(project => {
        project.addEventListener('click', function() {
            const url = this.getAttribute('data-url');
            if (url) {
                window.open(url, '_blank', 'noopener,noreferrer');
            } else {
                const projectTitle = this.querySelector('h3').textContent;
                messageContainer.textContent = `You clicked on ${projectTitle}`;
            }
        });
    });
});
