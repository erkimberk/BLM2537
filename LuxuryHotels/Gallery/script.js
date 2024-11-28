const newsletter = document.getElementById("newsletter");
const emailInput = document.getElementById("email");

newsletter.addEventListener("submit", function(event) {
  event.preventDefault(); 
  const email = emailInput.value; 
  alert(`${email} maili bültenimize kaydedildi!`); 
  form.reset(); 
});