<?php
// Start session to access session variables
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header('Location: ../enter/login.html');
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
            <li class="menu-item" id="dnl-mode">
                <i class="fa-solid fa-circle-half-stroke"></i>
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
                            href="https://msbte.org.in/file/A.Y.%202024-25_AcademicCalendar_16052024_1104.pdf"
                            target="_blank">Acadmic Calender For A.Y. 2024&hyphen;2025</a></div>
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

            <div class="cm-k">
                <span>K-Scheme Study Material</span>
                <p>Computer Technolgy</p>
                <div class="cm-k-s1" >
                    <span id="k">Semester I</span>
                    <a href="https://drive.google.com/drive/folders/1Ed8Q3Hk6145S7a885CMSTwbH2RNYx-6Z?usp=drive_link" target="_blank">Fundamentals of ICT - 311001</a>
                    <a href="https://drive.google.com/drive/folders/1YU40S0wwHJnueJOzmSEZdMDz5mekOOi5?usp=drive_link" target="_blank">English - 311303</a>
                    <a href="https://drive.google.com/drive/folders/1Zuv6rbY8FV3vkeT5qZJOC406PZOk8PoN?usp=drive_link" target="_blank">Engineering Graphics - 311008</a>
                    <a href="https://drive.google.com/drive/folders/1lxFvidUrpdm_ToNZ_kTvWa2YzlKDc4zW?usp=drive_link" target="_blank">Basic Science - 311305</a>
                    <a href="https://drive.google.com/drive/folders/1iWeTlr54n_I-T84VQdtT0KDhKXRNU_M1?usp=drive_link" target="_blank">Basic Mathematics - 311302</a>
                </div>
                <div class="cm-k-s2" >
                    <span id="k">Semester II</span>
                    <a href="https://drive.google.com/drive/folders/1Aha48On92I0Dkn_2lR58aQ58risTLSDO?usp=drive_link" target="_blank">Web Page Desinging - 312004</a>
                    <a href="https://drive.google.com/drive/folders/18LBcsN4sJdMX0m-42WkRbabAndOIdepx?usp=drive_link" target="_blank">Social and Life Skills - 312003</a>
                    <a href="https://drive.google.com/drive/folders/1maIPnVVHlfQAFbq-zQBVSFsoh3QCUtV-?usp=drive_link" target="_blank">Programming in 'C' - 312303</a>
                    <a href="https://drive.google.com/drive/folders/1wu8ZIFlbDeN_RjODCl0OySTfcvpzK7eY?usp=drive_link" target="_blank">Professional Communication - 312002</a>
                    <a href="https://drive.google.com/drive/folders/1qvds4tBNpgPXukDTSe8YYyj6keG_YX9U?usp=drive_link" target="_blank">Linux Basic - 312001</a>
                    <a href="https://drive.google.com/drive/folders/1ofQL2xkK9SoPPSjmly8HuFywL8U3uCdA?usp=drive_link" target="_blank">Basic Electrical and Electronics - 312302</a>
                    <a href="https://drive.google.com/drive/folders/1PPgR42DKqD6Qs9j5XxcZhwDrOpExt9Zg?usp=drive_link" target="_blank">Applied Mathematics - 312301</a>
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
                    <div class="f-logo1 l" id="logof"></div>
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
</body>

</html>