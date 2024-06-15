<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/menu.css', 'resources/css/contact.css', 'resources/css/contact-form.css'])
</head>
<body>
    @include('components/menu')
    <div class="contact-container">
        <h1>Contact Information</h1>
        <div class="contact-details">
            <h2>Daniela Costa</h2>
            <p>Software Developer</p>
            <p>Email: siedanipereira@gmail.com</p>
            <p>Phone: (31) 996973422</p>
        </div>
        <section class="contact-form">
            <h2>Contact Form</h2>
            <!-- Inclui o componente ContactForm -->
            <x-contact-form />
        </section>
        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Laravel</li>
                <li>React</li>
                <li>CSS</li>
            </ul>
        </div>
        <div class="social-links">
            <h2>Connect with me</h2>
            <ul>
                <li><a href="https://github.com/Daniela-Costa-Ada" target="_blank">GitHub</a></li>
                <li><a href="https://www.linkedin.com/in/echodanielacosta/" target="_blank">LinkedIn</a></li>                
                <li><a href="https://portfolio.local" target="_blank">Portfolio</a></li>
            </ul>
        </div>
    </div>

    @vite(['resources/js/menu.js', 'resources/js/contact.js'])
</body>
</html>
