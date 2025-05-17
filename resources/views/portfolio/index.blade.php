<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Muhammad Syarif Januriansyah</h1>
        <p>Web Developer | UI/UX Designer | IoT Developer | AI Engineer</p>
        <a href="{{ asset('cv/your_cv.pdf') }}" class="btn">Download CV</a>
    </header>

    <section id="about">
        <h2>About Me</h2>
        <p>Brief introduction about yourself.</p>
    </section>

    <section id="experience">
        <h2>Work Experience</h2>
        <ul>
            <li>Job Title at Company (Year - Year)</li>
            <li>Job Title at Company (Year - Year)</li>
        </ul>
    </section>

    <section id="skills">
        <h2>Technical Skills</h2>
        <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>Laravel, Vue.js</li>
            <li>Python, Machine Learning</li>
            <li>IoT Technologies</li>
        </ul>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <img src="{{ asset('images/project1.jpg') }}" alt="Project 1">
            <h3>Project Title 1</h3>
            <p>Description of project 1.</p>
        </div>
        <div class="project">
            <img src="{{ asset('images/project2.jpg') }}" alt="Project 2">
            <h3>Project Title 2</h3>
            <p>Description of project 2.</p>
        </div>
        <!-- Add more projects as needed -->
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="#" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} MSJ. All rights reserved.</p>
    </footer>
</body>
</html>