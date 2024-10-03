<?php
$department_name = "Department of Computer Applications";
$college_name = "SHREE Hanumat-IMT";

$announcements = [
    "Guest Lecture on AI by Director of SHIMT - October 5, 2024",
    "Culturaro Carnival 2k24 - October 18-19, 2024",
    "Fall Semester Exams Start - November 1, 2024"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $department_name . " | " . $college_name; ?></title>
    <head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background: #004080;
    color: white;
    padding: 20px 0;
    text-align: center;
}

nav ul {
    background: #003366;
    padding: 10px;
    list-style-type: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin: 0 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.banner h1 {
    font-size: 2.5em;
    margin: 0;
}

.banner h2 {
    font-size: 1.5em;
    margin-top: 10px;
    color: #cccccc;
}

section {
    padding: 20px;
}

#announcements {
    background: #f2f2f2;
    padding: 20px;
    margin-top: 10px;
}

footer {
    background: #003366;
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
}

.social-media {
    margin-top: 10px;
}

.social-media a {
    color: white;
    font-size: 24px;
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-media a:hover {
    color: #f2f2f2; /* Lighten on hover */
}
/* Marquee Styling */
.marquee {
    overflow: hidden;
    position: relative;
    background: #f2f2f2;
    padding: 10px;
    margin: 20px 0;
}

.marquee-content {
    display: flex;
    white-space: nowrap;
    animation: marquee 15s linear infinite;
}

.marquee-content span {
    display: inline-block;
    padding-right: 50px;
    font-size: 18px;
    color: #333;
}

/* Animation */
@keyframes marquee {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}
/* Contact Section Styling */
#contact {
    text-align: center;
    margin: 40px 0;
}

.map-container {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

/* iFrame CSS */
.map-container iframe {
    width: 100%;
    max-width: 1000px;
    height: 450px;
    border: none;
}

</style>
<body>

    <header>
        <div class="banner">
        <img src="images/SHIMT Logo.jpg" alt="College Logo" class="logo">
        <div class="title-text"></div>
            <h1><?php echo $department_name; ?></h1>
            <h2><?php echo $college_name; ?></h2>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#programs">Programs</a></li>
            <li><a href="#faculty">Faculty</a></li>
            <li><a href="#news">News & Events</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
    
    <section id="announcements">
    <h2>Latest Announcements</h2>
    <div class="marquee">
        <div class="marquee-content">
            <?php foreach ($announcements as $announcement) : ?>
                <span><?php echo $announcement; ?> &nbsp;&nbsp;&nbsp;&nbsp;</span>
            <?php endforeach; ?>
        </div>
    </div>
    </section>

    <section id="about">
        <h2>About the Department</h2>
        <p>Welcome to the Department of Computer Applications of Shree Hanumat - IMT. Bachelor of Computer Applications, is an undergraduate program for students looking for career in computer science. The course curriculum covers things like data management, operation systems, software and hardware engineering, web technologies, and programming languages.</p>
    </section>

    <section id="programs">
        <h2>Our Programs</h2>
        <p>Explore our <a href="#">Bachelor's</a> and <a href="#">Diploma Courses</a> programs in Computer Science.</p>

    </section>
    <section id="contact">
    <h2>Contact Us</h2>
    <p>Visit us at our campus for more information.</p>

    <!-- Google Maps iFrame -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3416.756263146322!2d75.77717307461593!3d31.088706168343553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a896bc514eec1%3A0x777078ba3278a9df!2sShree%20Hanumat%20IMT!5e0!3m2!1sen!2sin!4v1727942160973!5m2!1sen!2sin"></iframe>
    </div>
</section>

    <footer>
        <p>&copy; 2024 <?php echo $department_name . " | " . $college_name; ?></p>
        <div class="social-media">
        <a href="https://www.facebook.com/shreehanumat.33/" target="_blank">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://x.com/Shimt12" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/shree_hanumat_imt/" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.youtube.com/c/ShreeHanumatIMTGoraya" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
    </footer>
</body>
</html>

