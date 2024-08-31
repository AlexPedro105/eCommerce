const searchIcon = document.querySelector('.fa-search');
const searchBar = document.querySelector('.search-bar');

searchIcon.addEventListener('click', () => {
    searchBar.classList.toggle('show');
});