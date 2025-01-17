const modal = document.getElementById("Modal");
const openModalBtn = document.getElementById("openModalBtn");
const closeModalBtn = document.getElementsByClassName("close")[0];

const newsletter = document.getElementById("newsletter");
const emailInput = document.getElementById("email");


openModalBtn.onclick = function() {
  modal.style.display = "block";
}


closeModalBtn.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
}


