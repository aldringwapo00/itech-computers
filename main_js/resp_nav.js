document.addEventListener('DOMContentLoaded', function () {
    const nav_btn = document.getElementById('nav_btn');
    const nav_container = document.getElementById('nav_container');

    nav_btn.addEventListener('click', function () {
        nav_container.classList.toggle('active');
        
    });
});
