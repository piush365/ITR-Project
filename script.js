const home = document.querySelector("#home");

home.addEventListener("click", () => {
  window.location.href = "index.html";
});

const cmElements = document.querySelectorAll("#cm");

cmElements.forEach(cmElement => {
  cmElement.addEventListener("click", () => {
    window.location.href = "cm-dept.html";
  });
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

function togglePlaylist(subject, tableIndex) {
  var table = document.querySelectorAll('.sem1 table')[tableIndex];
  var playlist = table.querySelector('#' + subject + 'Playlist');
  var iframe = playlist.querySelector('iframe');
  var videos = playlist.querySelectorAll('video');
  var audios = playlist.querySelectorAll('audio');

  // Pause all videos
  videos.forEach(video => {
      if (!video.paused) {
          video.pause();
      }
  });

  // Pause all audios
  audios.forEach(audio => {
      if (!audio.paused) {
          audio.pause();
      }
  });

  // Toggle playlist display
  if (playlist.style.display === 'none' || playlist.style.display === '') {
      playlist.style.display = 'block';
      // Optionally, you can load the iframe source when showing the playlist
      iframe.src = iframe.getAttribute('data-src');
  } else {
      playlist.style.display = 'none';
      // Optionally, you can unload the iframe source when hiding the playlist
      iframe.src = '';
  }
}

