document.addEventListener('DOMContentLoaded', function () {
    const tracking_btn = document.getElementById('tracking_btn');
    const tracking_content = document.querySelector('.tracking-content')

    tracking_btn.addEventListener('click', function () {
        tracking_content.style.display = "block";
        
    });
});
