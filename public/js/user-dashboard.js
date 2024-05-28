document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.container-info-perfil');
    const minScrollY = 0;
    const maxScrollY = 250;

    window.addEventListener('scroll', function() {
        let scrollTop = window.scrollY;

        if (scrollTop > minScrollY && scrollTop < maxScrollY) {
            container.style.position = 'fixed';
            container.style.top = '250px'; // Puedes ajustar este valor
        } else if (scrollTop <= minScrollY) {
            container.style.position = 'absolute';
            container.style.top = '250px';
        } else {
            container.style.position = 'absolute';
            container.style.top = (maxScrollY + 250) + 'px';
        }
    });
});