<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ Bostock | Junior Web Developer</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- ======================
       NAVBAR
       ====================== -->
    <nav>
        <div class="container nav-container">
            <h1 class="logo">DJ Bostock</h1>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- ======================
       HERO SECTION
       ====================== -->
    <section id="hero" class="container hero">
        <div class="hero-text">
            <h2>Hi, I’m DJ Bostock</h2>
            <p>Junior Web Developer passionate about building clean, responsive websites.</p>
            <button onclick="document.getElementById('projects').scrollIntoView({behavior: 'smooth'})">
                View My Work
            </button>
        </div>

        <div class="hero-image">
            <img src="./images/happy-stick.jpg" alt="Developer Icon">
        </div>
    </section>

    <!-- ======================
       ABOUT SECTION
       ====================== -->
    <section id="about" class="container">
        <h2>About Me</h2>
        <p>
            I am a web developer with a background in IT support and web design.
            I love turning ideas into functional websites and I am eager to join a team
            where I can contribute and grow my skills.
        </p>
    </section>

    <!-- ======================
       PROJECTS SECTION
       ====================== -->
    <section id="projects" class="container">
        <h2>Projects</h2>
        <div class="project-grid">

            <!-- Project Card Example -->
            <div class="card">
                <img src="./images/card1.jpg" alt="Project 1 Screenshot">
                <h3>Project One</h3>
                <p>A responsive landing page built with HTML, CSS, and JavaScript.</p>
                <p class="project-links">
                    <a href="#" target="_blank">Live Demo</a> |
                    <a href="https://github.com/DJBostock/djbostock_com2" target="_blank">GitHub Repo</a>
                </p>
            </div>

            <!-- Duplicate for more projects -->

        </div>
    </section>

    <!-- ======================
       CONTACT SECTION
       ====================== -->
    <section id="contact" class="container">
        <h2>Contact</h2>
        <p>If you would like to work together or have any questions, reach out:</p>
        <p>
            📧 <a href="mailto:douglasjbostock@gmail.com">douglasjbostock@gmail.com</a><br>
            🔗 <a href="https://linkedin.com/in/djbostock" target="_blank">LinkedIn</a> |
            <a href="https://github.com/DJBostock" target="_blank">GitHub</a>
        </p>
    </section>

    <!-- ======================
       FOOTER
       ====================== -->
    <footer>
        © 2025 DJ Bostock - Built with HTML, CSS, & JavaScript
    </footer>

</body>

</html>