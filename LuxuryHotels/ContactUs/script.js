const form = document.getElementById("Form");
const newsletter = document.getElementById("newsletter");
const emailInput = newsletter.querySelector("#email");


form.addEventListener("submit", function(event) {
  event.preventDefault(); 
  alert(`Geri Bildiriminiz İçin Teşekkürler!`); 
  form.reset(); 
});


newsletter.addEventListener("submit", function(event) {
  event.preventDefault(); 
  const email = emailInput.value; 
  alert(`${email} maili bültenimize kaydedildi!`); 
  form.reset(); 
});