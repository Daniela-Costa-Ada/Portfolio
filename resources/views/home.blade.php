<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/menu.css', 'resources/css/home.css'])
</head>
<body>
    @include('components/menu')

    <div class="container">
        <section class="intro">
            <h1>Welcome to My Portfolio</h1>
            <p>Hello! I'm Daniela Costa, a passionate software developer with experience in building web applications. Feel free to explore my projects and learn more about my skills.</p>
        </section>

        <section class="projects">
            <h2>Recent Projects</h2>
            <div class="project-list">
                <div class="project">
                    <h3>Project 1</h3>
                    <p>A brief description of Project 1.</p>
                </div>
                <div class="project">
                    <h3>Project 2</h3>
                    <p>A brief description of Project 2.</p>
                </div>
                <div class="project">
                    <h3>Project 3</h3>
                    <p>A brief description of Project 3.</p>
                </div>
            </div>
        </section>

        <section class="skills">
            <h2>Skills</h2>
            <ul>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>React</li>
                <li>CSS</li>
            </ul>
        </section>

        <section class="social-links">
            <h2>Connect with me</h2>
            <ul>
                <li><a href="https://github.com/Daniela-Costa-Ada" target="_blank">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/echodanielacosta/" target="_blank">LinkedIn</a></li>                
                <li><a href="https://portfolio.local" target="_blank">Portfolio</a></li>
            </ul>
        </section>
    </div>

    @vite(['resources/js/menu.js', 'resources/js/home.js'])
</body>
</html>

