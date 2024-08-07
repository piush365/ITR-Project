const home = document.querySelector("#home");

home.addEventListener("click", () => {
  window.location.href = "../home.php";
});

const cmElements = document.querySelectorAll("#cm");

cmElements.forEach(cmElement => {
  cmElement.addEventListener("click", () => {
    window.location.href = "../cm/cm-dept.html";
  });
});

const ceElements = document.querySelectorAll("#ce");

ceElements.forEach(ceElement => {
  ceElement.addEventListener("click", () => {
    window.location.href = "../ce/ce-dept.html";
  });
});

const itElements = document.querySelectorAll("#it");

itElements.forEach(itElement => {
  itElement.addEventListener("click", () => {
    window.location.href = "../it/it-dept.html";
  });
});

const eeElements = document.querySelectorAll("#ee");

eeElements.forEach(eeElement => {
  eeElement.addEventListener("click", () => {
    window.location.href = "../ee/ee-dept.html";
  });
});

const entcElements = document.querySelectorAll("#entc");

entcElements.forEach(entcElement => {
  entcElement.addEventListener("click", () => {
    window.location.href = "../entc/entc-dept.html";
  });
});

const meElements = document.querySelectorAll("#me");

meElements.forEach(meElement => {
  meElement.addEventListener("click", () => {
    window.location.href = "../mech/mech-dept.html";
  });
});

const logo2 = document.getElementById("msbte");
logo2.addEventListener("click", () => {
  window.open("https://msbte.org.in", "blank_");
});

const logo3 = document.getElementById("gps");
logo3.addEventListener("click", () => {
  window.open("http://gpsolapur.ac.in", "blanl_");
});

const abt = document.querySelectorAll("#abt");

abt.forEach(a => {
  a.addEventListener("click", () => {
    window.location.href = "about.html";
  });
});


const clg = document.querySelector("#clg");

clg.addEventListener("click", () => {
  window.location.href = "ourcollage.html"
})

const contact = document.querySelector("#contact");

contact.addEventListener("click", () => {
  window.location.href = "contact.html";
})



const dnl = document.querySelector("#dnl-mode");
const secBody = document.querySelector(".sec-body");
const topHead = document.querySelector(".site-name-logo");
const topHeadLogo = document.querySelectorAll("#logo");
const logof = document.getElementById("logof");
const links = document.querySelectorAll("#links");
const k = document.querySelectorAll("#k");



logof.addEventListener("click", () => {
  window.location.href = "../home/index.html";
})

// Function to set dark mode
const setDarkMode = () => {
  console.log("d");
  secBody.style.backgroundColor = "#121212";
  secBody.style.color = "#f0f0f0";
  topHead.style.backgroundColor = "#121212";
  topHead.style.color = "#f0f0f0";
  topHeadLogo.forEach(logo => {
    logo.src = "../images/D (3).png";
  });
  links.forEach(link => {
    link.style.color = "#F5BD02";
  });
};

// Function to set light mode
const setLightMode = () => {
  console.log("l");
  secBody.style.backgroundColor = "#f0f0f0";
  secBody.style.color = "#0f0f0f";
  topHead.style.backgroundColor = "#f0f0f0";
  topHead.style.color = "#0f0f0f";
  topHeadLogo.forEach(logo => {
    logo.src = "../images/dd-logo.svg";
  });
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

// Set the checkbox state based on localStorage
dnl.checked = isDarkModeEnabled;

// Add event listener for the dark mode toggle button
dnl.addEventListener('change', () => {
  if (dnl.checked) {
    setDarkMode();
    localStorage.setItem('darkModeEnabled', 'true');
  } else {
    setLightMode();
    localStorage.setItem('darkModeEnabled', 'false');
  }
});



document.getElementById("btn-back-to-top").addEventListener("click", () => {
  window.scroll({
    top : 0,
    behavior : "smooth"
  });
});


let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("mySlides");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex - 1].style.display = "block";  
  setTimeout(showSlides, 3500); // Change image every 3 seconds
}
