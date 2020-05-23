const movieImg = document.querySelector(".movie-img");
const img = document.querySelector(".img");

img.addEventListener('click', function () {
    movieImg.style.display = "flex";
});

movieImg.addEventListener('click', function () {
    movieImg.style.display = "none";
});