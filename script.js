const home = document.querySelectorAll("#home");

home.forEach(h => {
  h.addEventListener("click", () => {
    window.location.href = "index.php";
  });
  
});

const cmElements = document.querySelectorAll("#cm");

cmElements.forEach(cmElement => {
  cmElement.addEventListener("click", () => {
    window.location.href = "cm/cm-dept.html";
  });
});

const ceElements = document.querySelectorAll("#ce");

ceElements.forEach(ceElement => {
  ceElement.addEventListener("click", () => {
    window.location.href = "ce/ce-dept.html";
  });
});

const itElements = document.querySelectorAll("#it");

itElements.forEach(itElement => {
  itElement.addEventListener("click", () => {
    window.location.href = "it/it-dept.html";
  });
});

const eeElements = document.querySelectorAll("#ee");

eeElements.forEach(eeElement => {
  eeElement.addEventListener("click", () => {
    window.location.href = "ee/ee-dept.html";
  });
});

const entcElements = document.querySelectorAll("#entc");

entcElements.forEach(entcElement => {
  entcElement.addEventListener("click", () => {
    window.location.href = "entc/entc-dept.html";
  });
});

const meElements = document.querySelectorAll("#me");

meElements.forEach(meElement => {
  meElement.addEventListener("click", () => {
    window.location.href = "mech/mech-dept.html";
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
    window.location.href = "other/about.html";
  });
});


const clg = document.getElementById("clg").addEventListener("click", () => {
  window.location.href = "other/ourcollage.html";
});

const contact = document.querySelector("#contact");

contact.addEventListener("click", () => {
  window.location.href = "other/contact.html";
})

const dnl = document.querySelector("#dnl-mode");
const secBody = document.querySelector(".sec-body");
const terBody = document.querySelector(".ter-body");
const topHead = document.querySelector(".site-name-logo");
const topHeadLogo = document.querySelectorAll("#logo");
const links = document.querySelectorAll("#links");
const links2 = document.querySelectorAll("#links2");
const k = document.querySelectorAll("#k");
const kbtn = document.getElementById("kclick");

// Function to set dark mode
const setDarkMode = () => {
  console.log("d");
  secBody.style.backgroundColor = "#121212";
  secBody.style.color = "#f0f0f0";
  terBody.style.backgroundColor = "#121212";
  terBody.style.color = "#f0f0f0";
  kbtn.style.color = "#f0f0f0";
  topHead.style.backgroundColor = "#121212";
  topHead.style.color = "#f0f0f0";
  topHeadLogo.forEach(logo => {
    logo.src = "images/D (3).png";
  });
  links.forEach(link => {
    link.style.color = "#F5BD02";
  });
  links2.forEach(link2 => {
    link2.style.color = "#F5BD02";
  });
};

// Function to set light mode
const setLightMode = () => {
  console.log("l");
  secBody.style.backgroundColor = "#f0f0f0";
  secBody.style.color = "#0f0f0f";
  terBody.style.backgroundColor = "#f0f0f0";
  terBody.style.color = "#0f0f0f";
  kbtn.style.color = "#0f0f0f";
  topHead.style.backgroundColor = "#f0f0f0";
  topHead.style.color = "#0f0f0f";
  topHeadLogo.forEach(logo => {
    logo.src = "images/dd-logo.svg";
  });
  links.forEach(link => {
    link.style.color = "#000080";
  });
  links2.forEach(link2 => {
    link2.style.color = "#f0f0f0";
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

document.getElementById("kclick").addEventListener("click", () => {
  window.scroll({
    top : 950,
    behavior : "smooth"
  });
});



document.getElementById("c1").addEventListener("click", () => {
  window.open("https://www.youtube.com/@ToshibShaikh");
})

document.getElementById("c2").addEventListener("click", () => {
  window.open("https://www.youtube.com/@MSBTEHelper");
})

document.getElementById("c3").addEventListener("click", () => {
  window.open("https://www.youtube.com/@KharatAcademy");
})

document.getElementById("c4").addEventListener("click", () => {
  window.open("https://www.youtube.com/@Msbteallclear");
})

document.getElementById("c5").addEventListener("click", () => {
  window.open("https://www.youtube.com/@ApnaCollegeOfficial");
})

document.getElementById("c6").addEventListener("click", () => {
  window.open("https://www.youtube.com/@CodeWithHarry");
})

document.getElementById("c7").addEventListener("click", () => {
  window.open("https://www.youtube.com/@pradeepgiriacademy");
})

document.getElementById("c8").addEventListener("click", () => {
  window.open("https://www.youtube.com/@GateSmashers");
})

document.getElementById("c9").addEventListener("click", () => {
  window.open("https://www.youtube.com/@easycivil");
})

document.getElementById("c10").addEventListener("click", () => {
  window.open("https://www.youtube.com/@DarshanAcademyformsbte");
})

document.getElementById("c11").addEventListener("click", () => {
  window.open("https://www.youtube.com/@MAHARASHTRAENGINEERINGACADEMY");
})

document.getElementById("c12").addEventListener("click", () => {
  window.open("https://www.youtube.com/@UrEngineeringFriend");
})

document.getElementById("c13").addEventListener("click", () => {
  window.open("https://www.youtube.com/@mechanicalbatch6052");
})




