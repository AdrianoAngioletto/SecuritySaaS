document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    const overlay = document.getElementById('overlay');

    // Toggle do menu e overlay
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        overlay.classList.toggle('active');
    });

    // Fechar menu ao clicar no overlay
    overlay.addEventListener('click', () => {
        navLinks.classList.remove('active');
        overlay.classList.remove('active');
    });
});