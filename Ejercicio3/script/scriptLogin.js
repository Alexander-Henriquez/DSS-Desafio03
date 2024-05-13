let loginForm = document.querySelector(".my-form");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  let email = document.getElementById("dni");
  let password = document.getElementById("date");

  console.log("DNI:", email.value);
  console.log("Date:", password.value);
});
