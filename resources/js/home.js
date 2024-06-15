// resources/js/home.js

document.addEventListener('DOMContentLoaded', function() {
    const projectElements = document.querySelectorAll('.project');
    projectElements.forEach(project => {
        project.addEventListener('click', function() {
            alert(`You clicked on ${this.querySelector('h3').textContent}`);
        });
    });
});
