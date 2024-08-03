document.addEventListener("DOMContentLoaded", function () {
  const customAlert = document.getElementById("custom-alert");
  const customAlertMessage = document.getElementById("custom-alert-message");
  const customAlertButton = document.getElementById("custom-alert-button");

  function showAlert(message) {
    customAlertMessage.textContent = message;
    customAlert.style.display = "flex";

  }
  
  customAlertButton.addEventListener("click", function () {
    customAlert.style.display = "none";
    window.location.href = "Signup.html";
  });

  const gs = document.querySelectorAll("#gs");

  gs.forEach((g) => {
    g.addEventListener("click", () => {
      showAlert("Sign in or Register to Access all Study Resources for FREE!!");
    });
  });
});

const gs_btn = document.querySelectorAll("#gs-btn").forEach(gs => {
  gs.addEventListener("click", () => {
    window.location.href = "Signup.html";
  })
})