const sy = document.querySelector("#sy");

sy.addEventListener("click", () => {
  window.location.href = "cm-syllabus.html";
});

pyq.addEventListener("click", () => {
  window.location.href = "cm-pyq.html";
});

video.addEventListener("click", () => {
  window.location.href = "cm-video.html";
});

md.addEventListener("click", () => {
  window.location.href = "cm-model.html";
});

notes.addEventListener("click", () => {
  window.location.href = "cm-notes.html";
});

manual.addEventListener("click", () => {
  window.location.href = "cm-manual.html";
});

const home = document.querySelector("#home");

home.addEventListener("click", () => {
  window.location.href = "index.html";
});

const dnl = document.querySelector("#dnl-mode");
const secBody = document.querySelector(".sec-body");
const topHead = document.querySelector(".site-name-logo");
const topHeadLogo = document.querySelector("#logo");
const links = document.querySelectorAll("#links");


// Function to set dark mode
const setDarkMode = () => {
  secBody.style.backgroundColor = "#121212";
  secBody.style.color = "#f0f0f0";
  topHead.style.backgroundColor = "#121212";
  topHead.style.color = "#f0f0f0";
  topHeadLogo.src = "images/D (3).png";
  links.forEach(link => {
    link.style.color = "#F5BD02";
  });
};

// Function to set light mode
const setLightMode = () => {
  secBody.style.backgroundColor = "#f0f0f0";
  secBody.style.color = "#0f0f0f";
  topHead.style.backgroundColor = "#f0f0f0";
  topHead.style.color = "#0f0f0f";
  topHeadLogo.src = "images/dd-logo.svg";
  links.forEach(link => {
    link.style.color = "#000080";
  });
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