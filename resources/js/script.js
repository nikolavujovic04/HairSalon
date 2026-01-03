document.addEventListener("DOMContentLoaded", function() {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".middle-section");

  burger.addEventListener("click", function() {
    nav.classList.toggle("active"); // dodaje ili uklanja klasu 'active'
    burger.classList.toggle("open"); // za animaciju hamburgera, ako želiš
  });
});