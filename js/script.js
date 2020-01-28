const projectCards = document.querySelectorAll(".projectContainer div.card");

function removeActiveClasses() {
  projectCards.forEach((card) => {
    card.classList.remove("active");
  });
}

projectCards.forEach((card) => {
  card.addEventListener("click", () => {
    removeActiveClasses();
    card.classList.add("active");
  });
});
