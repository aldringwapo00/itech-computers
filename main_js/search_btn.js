document.addEventListener('DOMContentLoaded', function () {
    const searchBtn = document.getElementById('search_btn');
    const searchBar = document.getElementById('search_bar');

    searchBtn.addEventListener('click', function () {
        searchBar.classList.toggle('active');
        if (searchBar.classList.contains('active')) {
            searchBar.querySelector('input').focus();
        }
    });
});
