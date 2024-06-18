document.addEventListener('DOMContentLoaded', function () {
    const menu = document.querySelector('.menu');
    const menuOffset = menu.offsetTop;
    const bodyPaddingTop = parseInt(window.getComputedStyle(document.body).getPropertyValue('padding-top'));


    function handleScroll() {
        if (window.pageYOffset > menuOffset) {
            document.body.style.paddingTop = `${menu.offsetHeight}px`;
            menu.classList.add('sticky');
        } else {
            document.body.style.paddingTop = `${bodyPaddingTop}px`;
            menu.classList.remove('sticky');
        }
    }

    window.addEventListener('scroll', handleScroll);
});