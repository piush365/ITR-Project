const sy = document.querySelector("#sy");

sy.addEventListener("click", () => {
  console.log("l")
  window.location.href = "cm-syllabus.html";
});

const home = document.querySelector("#home");

home.addEventListener("click", () => {
  window.location.href = "index.html";
});

const dnl = document.querySelector("#dnl-mode");
const secBody = document.querySelector(".sec-body");
const topHead = document.querySelector(".site-name-logo");
const topHeadLogo = document.querySelector("#logo");


// Function to set dark mode
const setDarkMode = () => {
  secBody.style.backgroundColor = "#121212";
  secBody.style.color = "#f0f0f0";
  topHead.style.backgroundColor = "#121212";
  topHead.style.color = "#f0f0f0";
  topHeadLogo.src = "images/D (3).png";
};

// Function to set light mode
const setLightMode = () => {
  secBody.style.backgroundColor = "#f0f0f0";
  secBody.style.color = "#0f0f0f";
  topHead.style.backgroundColor = "#f0f0f0";
  topHead.style.color = "#0f0f0f";
  topHeadLogo.src = "images/dd-logo.svg";
};

// Check if dark mode is enabled from local storage
const isDarkModeEnabled = localStorage.getItem('darkModeEnabled') === 'true';

// Initialize count based on saved state
let count = isDarkModeEnabled ? 1 : 0;

// Apply initial styles based on count
if (count % 2 === 0) {
  setLightMode();
} else {
  setDarkMode();
}

// Event listener for button click
dnl.addEventListener("click", () => {
  if (count % 2 === 0) {
    setDarkMode();
    localStorage.setItem('darkModeEnabled', 'true');
  } else {
    setLightMode();
    localStorage.setItem('darkModeEnabled', 'false');
  }
  count++;
});