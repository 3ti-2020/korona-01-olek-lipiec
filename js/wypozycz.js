const registeredBtn = document.querySelector("#registered");
const unregisteredBtn = document.querySelector("#unregistered");
const formRegistered = document.querySelector(".registered");
const formNewUser = document.querySelector(".new-user");
const allCost = document.querySelector(".all-cost");

const movies = document.querySelectorAll(".movie-checkbox");

let registered = registeredBtn.checked;
update();

[registeredBtn, unregisteredBtn].forEach(function (item) {

    item.addEventListener("click", function () {
        registered = registeredBtn.checked;
        update();
    });

});

function update() {
    formRegistered.style.display = registered ? "flex" : "none";
    formNewUser.style.display = registered ? "none" : "flex";
}

movies.forEach(function (movie) {
    movie.addEventListener("click", function () {
        cost = 0;
        movies.forEach(function (c) {
            if (c.checked) {
                cost = parseInt(cost) + parseInt(c.dataset.cost);
            }
        });
        console.log(cost);
        allCost.innerText = cost + "PLN";
    });
});