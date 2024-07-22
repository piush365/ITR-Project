<?php
// Start session to access session variables
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header('Location: ../enter/Signup.html');
    exit();
}

// If logged in, continue to display the protected content
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diploma Dost</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- slider -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <!-- title -->
  <div class="site-name-logo">
    <img src="../images/dd-logo.svg" alt="Site Logo" class="site-logo" id="logo">
    <span class="site-name">Diploma Dost</span>
  </div>
  <!-- navbar -->
  <nav class="navbar">
    <div class="gps-logo"></div>
    <ul class="menu">
      <li class="menu-item" id="home">Home</li>
      <li class="menu-item">
        Branch
        <ul class="dropdown">
          <li class="dropdown-item" id="cm">CM</li>
          <li class="dropdown-item" id="it">IT</li>
          <li class="dropdown-item" id="entc">ENTC</li>
          <li class="dropdown-item" id="ee">EE</li>
          <li class="dropdown-item" id="me">ME</li>
          <li class="dropdown-item" id="ce">CE</li>
        </ul>
      </li>
      <li class="menu-item">
        More
        <ul class="dropdown">
          <li class="dropdown-item" id="abt">About Us</li>
          <li class="dropdown-item" id="contact">Contact</li>
          <li class="dropdown-item" id="clg">Our College</li>
        </ul>
      </li>
      <li class="menu-item dnl">
        <!-- <i class="fa-solid fa-circle-half-stroke"></i> -->
        <input class="dnl-input" type="checkbox" id="dnl-mode" />
        <label class="dnl-label" for="dnl-mode">
          <?xml version="1.0" encoding="utf-8"?>

          <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
          <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
          <svg class="sun" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
            <g>
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M32,14.002c-9.941,0-18,8.059-18,18s8.059,18,18,18
		s18-8.059,18-18S41.941,14.002,32,14.002z M32,48.002c-8.837,0-16-7.164-16-16s7.163-16,16-16s16,7.164,16,16
		S40.837,48.002,32,48.002z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M32,20.002c-0.553,0-1,0.447-1,1s0.447,1,1,1
		c5.522,0,10,4.477,10,10c0,0.553,0.447,1,1,1s1-0.447,1-1C44,25.375,38.627,20.002,32,20.002z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M63,31H53c-0.553,0-1,0.447-1,1s0.447,1,1,1h10
		c0.553,0,1-0.447,1-1S63.553,31,63,31z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M11.457,36.47l-3.863,1.035c-0.534,0.144-0.851,0.692-0.707,1.226
		c0.143,0.533,0.69,0.85,1.225,0.706l3.863-1.035c0.533-0.143,0.85-0.69,0.707-1.225C12.539,36.644,11.99,36.327,11.457,36.47z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M49.32,22c0.277,0.479,0.888,0.643,1.367,0.366l8.66-5
		c0.479-0.276,0.643-0.888,0.365-1.366c-0.275-0.479-0.887-0.642-1.365-0.365l-8.66,5C49.208,20.912,49.045,21.521,49.32,22z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M17.858,46.143c-0.39-0.391-1.023-0.389-1.414,0l-2.828,2.828
		c-0.391,0.391-0.39,1.025,0.001,1.415c0.39,0.391,1.022,0.39,1.413-0.001l2.828-2.828C18.249,47.168,18.249,46.534,17.858,46.143z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M42,14.68c0.479,0.276,1.09,0.113,1.367-0.366l5-8.66
		C48.644,5.175,48.48,4.563,48,4.287c-0.478-0.276-1.088-0.112-1.365,0.366l-4.999,8.661C41.358,13.793,41.522,14.403,42,14.68z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M26.824,51.318c-0.532-0.143-1.08,0.176-1.225,0.707l-1.035,3.863
		c-0.143,0.535,0.176,1.083,0.709,1.226c0.533,0.144,1.08-0.173,1.223-0.708l1.035-3.863C27.676,52.012,27.359,51.463,26.824,51.318
		z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M32,12c0.554,0,1.001-0.446,1.002-1V1c0-0.553-0.447-1-1.002-1
		c-0.551,0-0.998,0.447-0.999,1l0.001,10C31.002,11.553,31.449,12,32,12z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M38.402,52.025c-0.141-0.532-0.689-0.85-1.225-0.707
		c-0.533,0.143-0.848,0.692-0.707,1.225l1.035,3.863c0.144,0.535,0.693,0.85,1.227,0.707s0.849-0.689,0.705-1.225L38.402,52.025z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M20.637,14.312c0.275,0.479,0.887,0.643,1.363,0.367
		c0.48-0.277,0.645-0.887,0.368-1.367l-5-8.66C17.092,4.174,16.48,4.01,16,4.287c-0.477,0.275-0.641,0.887-0.365,1.365
		L20.637,14.312z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M47.558,46.142c-0.388-0.39-1.022-0.39-1.414,0
		c-0.391,0.39-0.388,1.024,0,1.414l2.828,2.828c0.392,0.392,1.025,0.389,1.415-0.001c0.391-0.39,0.391-1.021-0.001-1.413
		L47.558,46.142z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M4.654,17.365l8.662,4.999c0.477,0.276,1.088,0.113,1.363-0.364
		c0.277-0.479,0.115-1.09-0.364-1.367l-8.661-5C5.176,15.356,4.564,15.52,4.287,16C4.013,16.477,4.176,17.089,4.654,17.365z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M52.027,38.4l3.863,1.035c0.535,0.145,1.082-0.176,1.225-0.709
		c0.144-0.532-0.172-1.079-0.707-1.223l-3.863-1.035c-0.531-0.145-1.081,0.173-1.225,0.707C51.176,37.709,51.496,38.256,52.027,38.4
		z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M12,32c0.001-0.554-0.445-1-0.998-1.002L1,31
		c-0.552,0-1,0.445-1,1c0.001,0.551,0.448,1,1.001,1l10.001-0.002C11.553,32.998,12.001,32.552,12,32z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M52.545,27.529l3.863-1.035c0.535-0.143,0.85-0.693,0.706-1.227
		c-0.142-0.531-0.688-0.848-1.224-0.705l-3.863,1.035c-0.533,0.141-0.85,0.691-0.707,1.225
		C51.461,27.356,52.012,27.67,52.545,27.529z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M14.68,42c-0.275-0.48-0.886-0.644-1.365-0.368l-8.661,5.002
		C4.176,46.91,4.01,47.52,4.287,48c0.277,0.477,0.889,0.641,1.367,0.365l8.66-5.002C14.791,43.088,14.957,42.479,14.68,42z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M46.144,17.856c0.389,0.392,1.022,0.388,1.414,0l2.828-2.828
		c0.392-0.392,0.39-1.024-0.002-1.415c-0.388-0.39-1.021-0.391-1.412,0.001l-2.828,2.828C45.752,16.83,45.754,17.466,46.144,17.856z
		" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20"
                d="M22,49.32c-0.479-0.277-1.088-0.113-1.365,0.364l-5,8.663
		c-0.275,0.478-0.115,1.088,0.365,1.365c0.479,0.274,1.09,0.11,1.367-0.367l4.998-8.662C22.641,50.207,22.48,49.597,22,49.32z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M37.178,12.68c0.531,0.145,1.078-0.176,1.225-0.707l1.035-3.863
		c0.143-0.535-0.176-1.083-0.709-1.225c-0.531-0.144-1.08,0.172-1.223,0.707l-1.035,3.863C36.324,11.986,36.645,12.536,37.178,12.68
		z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M32,52c-0.553-0.002-0.998,0.446-1,0.998l0.002,10.004
		C31.002,63.552,31.445,64,32,64c0.553,0,1-0.449,1.001-1l-0.003-10.002C32.998,52.447,32.555,52,32,52z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M25.6,11.973c0.139,0.533,0.691,0.85,1.225,0.707
		c0.532-0.141,0.846-0.691,0.707-1.225l-1.035-3.863c-0.145-0.535-0.693-0.851-1.227-0.706c-0.531,0.142-0.85,0.688-0.705,1.224
		L25.6,11.973z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M43.363,49.687c-0.275-0.478-0.883-0.644-1.363-0.365
		c-0.479,0.274-0.641,0.885-0.367,1.364l5.004,8.661c0.275,0.478,0.883,0.644,1.363,0.366c0.479-0.277,0.642-0.889,0.367-1.367
		L43.363,49.687z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M16.443,17.856c0.387,0.394,1.023,0.39,1.414,0
		c0.391-0.388,0.387-1.021,0-1.414l-2.828-2.828c-0.393-0.392-1.025-0.39-1.415,0.002c-0.39,0.388-0.392,1.021,0.001,1.412
		L16.443,17.856z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M59.348,46.633l-8.663-4.997
		c-0.478-0.276-1.087-0.116-1.363,0.366c-0.278,0.477-0.112,1.086,0.364,1.364l8.664,4.999c0.477,0.275,1.086,0.115,1.363-0.365
		C59.988,47.521,59.824,46.91,59.348,46.633z" />
              <path fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M11.974,25.599L8.11,24.563c-0.536-0.144-1.083,0.175-1.225,0.708
		c-0.144,0.531,0.171,1.08,0.707,1.225l3.863,1.034c0.531,0.146,1.081-0.175,1.225-0.707C12.825,26.293,12.505,25.746,11.974,25.599
		z" />
            </g>
          </svg>
          <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
          <svg class="moon" width="800px" height="800px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path fill="#000000"
              d="M240.448 240.448a384 384 0 1 0 559.424 525.696 448 448 0 0 1-542.016-542.08 390.592 390.592 0 0 0-17.408 16.384zm181.056 362.048a384 384 0 0 0 525.632 16.384A448 448 0 1 1 405.056 76.8a384 384 0 0 0 16.448 525.696z" />
          </svg>
        </label>
      </li>
    </ul>
    <div class="msbte-logo"></div>
  </nav>
  <!-- horizontal division 7:3 -->
  <div class="sec-body">
    <!-- 70% width section -->
    <div class="ver-box">
      <!-- page-title -->
      <header>
        <span class="header-content">I - Scheme</span>
        <div class="resource-title">
          <span>&vert; Syllabus &vert; Question Papers &vert; Manuals &vert;Model Answer Papers &vert; Notes
            &vert; E&hyphen;Books &vert; Video Lectures &vert;</span>
        </div>
        <span style="text-decoration: double; font-size: 1.2em; border-bottom: 1px solid #0f0f0f;">Path To
          Success with Diploma Dost</span>
        <button id="kclick" class="kbtn">Click For K-Scheme</button>
      </header>
      <!-- latest-news-section -->
      <div class="latest-news">
        <div class="news-title">
          <span>Latest News</span>
        </div>
        <div class="news-ticker">
          <div class="news-item"><a id="links"
              href="https://msbte.org.in/file/A.Y.%202024-25_AcademicCalendar_16052024_1104.pdf" target="_blank">Acadmic
              Calender For A.Y. 2024&hyphen;2025</a></div>
          <div class="news-item"><a id="links"
              href="https://msbte.org.in/file/Print-Social&LifeSkillsGuidelines_04012023.pdf"
              target="_blank">Implementation Of Life & Skill Course</a></div>
          <div class="news-item"><a id="links"
              href="https://dte.maharashtra.gov.in/wp-content/uploads/2024/06/Direct-Second-Year-Diploma-Admission-Notice-2024-25-Marathi.pdf"
              target="_blank">Direct Second Year Admission Notice</a></div>

        </div>
      </div>
      <!-- Department section -->
      <main>
        <div class="select-title">
          <span>Select Department</span>
        </div>
        <div class="department-box">
          <div class="cm branch" id="cm">
            <i class="fa-solid fa-computer"></i>
            <span>Computer Technolgy</span>
            <p>Download Computer Technolgy Study Material</p>
          </div>
          <div class="it branch" id="it">
            <i class="fa-solid fa-microchip"></i>
            <span>Information Technolgy</span>
            <p>Download Information Technolgy Study Material</p>
          </div>
          <div class="entc branch" id="entc">
            <i class="fa-solid fa-tower-cell"></i>
            <span>Electronic and Telecommunication</span>
            <p>Download Electronic and Telecommunication Study Material</p>
          </div>
          <div class="ee branch" id="ee">
            <i class="fa-solid fa-bolt"></i>
            <span>Electrical Engineering</span>
            <p>Download Electrical Engineering Study Material</p>
          </div>
          <div class="ce branch" id="ce">
            <i class="fa-solid fa-helmet-safety"></i>
            <span>Civil Engineering</span>
            <p>Download Civil Engineering Study Material</p>
          </div>
          <div class="me branch" id="me">
            <i class="fa-solid fa-wrench"></i>
            <span>Mechanical Engineering</span>
            <p>Download Mechanical Engineering Study Material</p>
          </div>
        </div>
        <div class="cm-k">
          <span>K-Scheme Study Material</span>
          <p>Computer Technolgy</p>
          <div class="ks">
            <div class="cm-k-s1">
              <span id="k">Semester I</span>
              <a id="links2" href="https://drive.google.com/drive/folders/1Ed8Q3Hk6145S7a885CMSTwbH2RNYx-6Z?usp=drive_link"
                target="_blank">Fundamentals of ICT - 311001</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1YU40S0wwHJnueJOzmSEZdMDz5mekOOi5?usp=drive_link"
                target="_blank">English - 311303</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1Zuv6rbY8FV3vkeT5qZJOC406PZOk8PoN?usp=drive_link"
                target="_blank">Engineering Graphics - 311008</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1lxFvidUrpdm_ToNZ_kTvWa2YzlKDc4zW?usp=drive_link"
                target="_blank">Basic Science - 311305</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1iWeTlr54n_I-T84VQdtT0KDhKXRNU_M1?usp=drive_link"
                target="_blank">Basic Mathematics - 311302</a>
            </div>
            <div class="cm-k-s2">
              <span id="k">Semester II</span>
              <a id="links2" href="https://drive.google.com/drive/folders/1Aha48On92I0Dkn_2lR58aQ58risTLSDO?usp=drive_link"
                target="_blank">Web Page Desinging - 312004</a>
              <a id="links2" href="https://drive.google.com/drive/folders/18LBcsN4sJdMX0m-42WkRbabAndOIdepx?usp=drive_link"
                target="_blank">Social and Life Skills - 312003</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1maIPnVVHlfQAFbq-zQBVSFsoh3QCUtV-?usp=drive_link"
                target="_blank">Programming in 'C' - 312303</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1wu8ZIFlbDeN_RjODCl0OySTfcvpzK7eY?usp=drive_link"
                target="_blank">Professional Communication - 312002</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1qvds4tBNpgPXukDTSe8YYyj6keG_YX9U?usp=drive_link"
                target="_blank">Linux Basic - 312001</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1ofQL2xkK9SoPPSjmly8HuFywL8U3uCdA?usp=drive_link"
                target="_blank">Basic Electrical and Electronics - 312302</a>
              <a id="links2" href="https://drive.google.com/drive/folders/1PPgR42DKqD6Qs9j5XxcZhwDrOpExt9Zg?usp=drive_link"
                target="_blank">Applied Mathematics - 312301</a>
            </div>
          </div>
        </div>








        <!-- material-info section -->
        <div class="material-info">
          <div class="pyq material">
            <span>Msbte Question paper</span>
            <p>We gather previous years' question papers from various reliable sources and provide them to
              you, ensuring you have access to a comprehensive repository for effective exam preparation.
              These papers are essential tools for understanding exam patterns, marking schemes, and
              frequently asked questions, helping you practice and perform better in your exams.
            </p>
          </div>
          <div class="model material">
            <span>Msbte Model Answer Paper</span>
            <p>Our collection of model answer papers is curated from trusted websites to help you understand
              the ideal responses to exam questions, aiding in your study and revision process. These
              papers offer detailed, step-by-step solutions and explanations, allowing you to learn the
              best approaches to answering different types of questions and improving your writing skills.
            </p>
          </div>
          <div class="syllabus material">
            <span>Msbte Syllabus</span>
            <p>We provide comprehensive and up-to-date syllabi from various educational boards and
              universities. These syllabi outline the topics and objectives for each course, helping you
              stay organized and focused on what needs to be studied. With detailed breakdowns of each
              subject, you can plan your studies more effectively and ensure you cover all necessary
              material.
            </p>
          </div>
          <div class="manual material">
            <span>Msbte Lab Manuals</span>
            <p>Find detailed and well-structured lab manuals sourced from multiple educational platforms.
              These manuals will guide you through experiments and practicals with step-by-step
              instructions. Each manual includes clear illustrations, safety guidelines, and detailed
              procedures to ensure you can conduct experiments accurately and confidently.
            </p>
          </div>
          <div class="notes material">
            <span>Notes &amp; E&hyphen;Book</span>
            <p>We offer a wide range of eBooks and meticulously compiled notes, sourced from various
              academic and professional websites, covering different subjects and topics to enhance your
              learning experience. These resources are designed to simplify complex concepts and provide
              you with clear, concise information for efficient studying.
            </p>
          </div>
          <div class="video material">
            <span>Video Lectures</span>
            <p>Our platform provides a vast selection of video lectures collected from renowned educational
              websites. These lectures cover a variety of topics and are designed to offer visual and
              auditory learning experiences. Featuring expert instructors and high-quality production,
              these videos make complex topics more accessible and engaging, helping you to better
              understand and retain information.
            </p>
          </div>
        </div>
      </main>
      <!-- social media links -->
      <div class="media-links">
        <div class="links-title"><span>Links</span></div>
        <div class="link-items">
          <a id="links" href="https://www.instagram.com" target="_blank">Instagram</a>
          <a id="links" href="https://www.facebook.com" target="_blank">Facebook</a>
          <a id="links" href="https://github.com" target="_blank">Github</a>
          <a id="links" href="tel:+91 95617 27951" target="_blank">Contact No 95617 27951</a>
        </div>
      </div>

      <!-- commentbox -->
      <!-- <div id="comment-box">
        <h2>Leave a Comment</h2>
        <form method="POST" action="comment.php">
            <textarea name="comment" required></textarea>
            <button type="submit">Submit</button>
        </form>
        <form method="POST" action="index.php">
            <button name="show_comments">Show Comments</button>
        </form>
    </div>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['show_comments'])) {
        include 'comment.php';
    }
    ?> -->

      <!-- 30% part -->
    </div>
    <!-- msbte news secction -->
    <div class="ter-body">
      <div class="news-box">
        <span>Msbte News</span>
        <a id="links" href="https://msbte.org.in" target="_blank">Msbte Main Website</a>
        <a id="links" href="https://msbte.org.in/file/A.Y.%202024-25_AcademicCalendar_16052024_1104.pdf"
          target="_blank">Acadmic Calender For A.Y. 2024-2025</a>
        <a id="links" href="https://msbte.org.in/Online_activity.html" target="_blank">MSBTE Online Activity
          Portal</a>
        <a id="links"
          href="https://msbte.org.in/file/State%20Level%20Free%20Webinar%20for%20Awareness%20of%20Exit%20Examination%20of%20Diploma%20in%20Pharmacy_200620240602.jpeg"
          target="_blank">Online Webinar on Awareness of Diploma in Pharmacy</a>
        <a id="links" href="https://msbte.org.in/file/Print-Social&LifeSkillsGuidelines_04012023.pdf"
          target="_blank">Implementation Of Life & Skill Course</a>
        <a id="links" href="https://msbte.org.in/file/NOTEforRegionalOffices-Final_310520230930.pdf"
          target="_blank">K-Scheme New Content</a>
        <a id="links"
          href="https://dte.maharashtra.gov.in/wp-content/uploads/2024/06/Direct-Second-Year-Diploma-Admission-Notice-2024-25-Marathi.pdf"
          target="_blank">Direct Second Year Admission Notice</a>
        <a id="links"
          href="https://dte.maharashtra.gov.in/wp-content/uploads/2024/04/प्रवेशासाठी-आवश्यक-प्रमाणपत्रे-२०२४-२५.pdf"
          target="_blank">Notice regarding Documentation Required for A.Y. 2024-2025 Admission</a>
        <a id="links"
          href="https://dte.maharashtra.gov.in/wp-content/uploads/2023/10/Website-Notification-Top-Class-scholarship-Scheme-A.Y.-2023-24.pdf"
          target="_blank">Scholarship Notice for A.Y. 2024-2025</a>
        <a id="links" href=https://msbte.org.in/results target="_blank">MSBTE Result Portal</a>
      </div>

      <!-- youtube links -->
      <div class="yt-container">
        <span>Top Diploma YouTube Channels</span>
        <div class="channel-list">
          <div class="channel" id="c1">
            <img src="../channel-logo/cha1.jpg" alt="" class="c-logo">
            <p>Toushib's Tutorials</p>
          </div>
          <div class="channel" id="c2">
            <img src="../channel-logo/cha2.jpg" alt="" class="c-logo">
            <p>MSBTE Helper</p>
          </div>
          <div class="channel" id="c3">
            <img src="../channel-logo/cha3.jpg" alt="" class="c-logo">
            <p>Kharat Academy</p>
          </div>
          <div class="channel" id="c4">
            <img src="../channel-logo/cha4.jpg" alt="" class="c-logo">
            <p>MSBTE All Clear</p>
          </div>
          <div class="channel" id="c5">
            <img src="../channel-logo/cha5.jpg" alt="" class="c-logo">
            <p>Apna College</p>
          </div>
          <div class="channel" id="c6">
            <img src="../channel-logo/cha6.jpg" alt="" class="c-logo">
            <p>Code wiht Harry</p>
          </div>
          <div class="channel" id="c7">
            <img src="../channel-logo/cha7.jpg" alt="" class="c-logo">
            <p>Pradeep Giri Academy</p>
          </div>
          <div class="channel" id="c8">
            <img src="../channel-logo/cha8.jpg" alt="" class="c-logo">
            <p>Gate Smashers</p>
          </div>
          <div class="channel" id="c9">
            <img src="../channel-logo/cha9.jpg" alt="" class="c-logo">
            <p>Easy Civil</p>
          </div>
          <div class="channel" id="c10">
            <img src="../channel-logo/cha10.jpg" alt="" class="c-logo">
            <p>Darshan Academy</p>
          </div>
          <div class="channel" id="c11">
            <img src="../channel-logo/cha11.jpg" alt="" class="c-logo">
            <p>Maharashtra Engineering Academy</p>
          </div>
          <div class="channel" id="c12">
            <img src="../channel-logo/cha12.jpg" alt="" class="c-logo">
            <p>Ur Engineering Friend</p>
          </div>
          <div class="channel" id="c13">
            <img src="../channel-logo/cha13.jpg" alt="" class="c-logo">
            <p>Mechanical Batch</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 100% width used end of vertical and secondary body -->
  <!-- footer section -->
  <footer>
    <div class="credit-logo">
      <span>Created by Government Polytechnic, Solapur Students</span>
      <div class="f-logo">
        <div class="f-logo1 l" id="home"></div>
        <div class="f-logo2 l" id="msbte"></div>
        <div class="f-logo3 l" id="gps"></div>
      </div>
    </div>
    <div class="f-content">
      <a href="../other/about.html">About Us</a>
      <a href="../other/contct.html">Contact Us</a>
      <button onclick="scrollToTop()" id="btn-back-to-top" title="Go to top">Page Up</button>
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>