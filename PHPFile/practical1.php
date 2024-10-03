<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive PHP Webpage</title>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Navigation styling */
header {
    background-color: #333;
    padding: 10px 0;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

/* Main content styling */
main {
    flex: 1;
}

.welcome-section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    text-align: center;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
}

/* Footer styling */
footer {
    text-align: center;
    background-color: #333;
    color: white;
    padding: 10px 0;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    nav ul {
        flex-direction: column;
    }

    nav ul li {
        margin-bottom: 10px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 20px;
    }

    p {
        font-size: 16px;
    }
}

</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="welcome-section">
            <div class="container">
                <h1>Welcome to My Responsive Website</h1>
                <p>
                    <?php
                        // Get the current hour of the day
                        $hour = date('H');

                        // Display a greeting based on the time
                        if ($hour < 12) {
                            echo "Good morning!";
                        } elseif ($hour < 18) {
                            echo "Good afternoon!";
                        } else {
                            echo "Good evening!";
                        }
                    ?>
                </p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>
