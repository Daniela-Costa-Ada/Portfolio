<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/menu.css', 'resources/css/home.css', 'resources/css/project.css', 'resources/css/social-links.css'])
    @vite(['resources/css/contact-information.css'])
</head>

<body>
    <x-menu />
    <div class="container">
        <section class="intro">
            <h1>Welcome to My Portfolio</h1>
            <x-contact-information />
            <p>Hello! I'm Daniela Costa, a passionate software developer with experience in building web applications.
                Feel free to explore my projects and learn more about my skills.</p>
        </section>
        <x-project :project-id="1"></x-project>
        <x-project :project-id="2"></x-project>
        <x-project :project-id="3"></x-project>
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
    </div>
    <x-social-links />
    @vite(['resources/js/menu.js', 'resources/js/home.js', 'resources/js/contact-information.js'])
</body>

</html>
