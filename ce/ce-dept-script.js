const sy = document.querySelector("#sy");

sy.addEventListener("click", () => {
  window.location.href = "ce-syllabus.html";
});

const pyq = document.querySelector("#pyq");

pyq.addEventListener("click", () => {
  window.location.href = "ce-pyq.html";
});

const video = document.querySelector("#video");

video.addEventListener("click", () => {
  window.location.href = "ce-video.html";
});

const md = document.querySelector("#md");

md.addEventListener("click", () => {
  window.location.href = "ce-model.html";
});

const notes = document.querySelector("#notes");

notes.addEventListener("click", () => {
  window.location.href = "ce-notes.html";
});

const manual = document.querySelector("#manual");

manual.addEventListener("click", () => {
  window.location.href = "ce-manual.html";
});

const home = document.querySelector("#home");

home.addEventListener("click", () => {
  window.location.href = "../home/index.html";
});

const ceElements = document.querySelectorAll("#ce");

ceElements.forEach(ceElement => {
  ceElement.addEventListener("click", () => {
    window.location.href = "ce-dept.html";
  });
});

const cmElements = document.querySelectorAll("#cm");

cmElements.forEach(cmElement => {
  cmElement.addEventListener("click", () => {
    window.location.href = "../cm/cm-dept.html";
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

const dnl = document.querySelector("#dnl-mode");
const secBody = document.querySelector(".sec-body");
const topHead = document.querySelector(".site-name-logo");
const topHeadLogo = document.querySelector("#logo");
const links = document.querySelectorAll("#links");

// Function to set dark mode
const setDarkMode = () => {
  console.log("d");
  secBody.style.backgroundColor = "#121212";
  secBody.style.color = "#f0f0f0";
  topHead.style.backgroundColor = "#121212";
  topHead.style.color = "#f0f0f0";
  topHeadLogo.src = "../images/D (3).png";
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
  topHeadLogo.src = "../images/dd-logo.svg";
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

// Add event listener for the dark mode toggle button
dnl.addEventListener('click', () => {
  count++;
  if (count % 2 === 0) {
    setLightMode();
    localStorage.setItem('darkModeEnabled', 'false');
  } else {
    setDarkMode();
    localStorage.setItem('darkModeEnabled', 'true');
  }
});


// function togglePlaylist(id) {
//   var playlist = document.getElementById(id);
//   if (playlist.style.display === "none") {
//     playlist.style.display = "block";
//     var iframe = playlist.querySelector('iframe');
//     if (iframe && !iframe.src) {
//       iframe.src = iframe.getAttribute('data-src');
//     }
//   } else {
//     playlist.style.display = "none";
//     // Optional: Stop the video when hiding the playlist
//     var iframe = playlist.querySelector('iframe');
//     if (iframe) {
//       iframe.src = '';
//     }
//   }
// }



// function togglePlaylist(id) {
//   var thumbnail = document.getElementById(id + 'Thumbnail');
//   if (thumbnail.style.display === 'none' || thumbnail.style.display === '') {
//       thumbnail.style.display = 'block';
//   } else {
//       thumbnail.style.display = 'none';
//   }
// }

function togglePlaylist(id) {
  var thumbnail = document.getElementById(id + 'Thumbnail');
  var iframe = thumbnail.querySelector('iframe');

  // Toggle visibility
  if (thumbnail.style.display === 'none' || thumbnail.style.display === '') {
      thumbnail.style.display = 'block';
  } else {
      thumbnail.style.display = 'none';
  }

  // Pause video if iframe exists
  if (iframe) {
      var iframeSrc = iframe.src;
      iframe.src = iframeSrc; // This reloads the iframe, effectively stopping the video
  }
}


const abt = document.querySelectorAll("#abt");

abt.forEach(a => {
  a.addEventListener("click", () => {
    window.location.href = "../home/about.html";
  });
});


document.getElementById("btn-back-to-top").addEventListener("click", () => {
  window.scroll({
    top : 0,
    behavior : "smooth"
  });
});