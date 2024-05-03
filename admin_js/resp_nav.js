document.addEventListener('DOMContentLoaded', function() {
    const nav_btn = document.querySelector('.nav-btn');
    const side_nav = document.querySelector('.side-navigation');

        nav_btn.addEventListener('click', function() {

            if (side_nav.style.left === "-300px") {
                side_nav.style.left = "10px";
            } else {
                side_nav.style.left = "-300px";
            }

            // Prevent default link behavior
        });
    });
