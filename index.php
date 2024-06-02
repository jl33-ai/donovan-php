<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Donovan Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>The Donovan Project</h1>
        <p>Help your business grow, for free</p>
        <div class="logo-container">
        <img src="newlogo.png" alt="The logo">
        </div>
        <form action="send_email.php" method="post" class="contact-form">
            <div class="form-container">
                <div>
                    <label for="name">Business Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    
                    <button type="submit">Send Email</button>
                </div>
            </div>
        </form>
        <div class="gallery">
            <div class="image"><img src="rivercog.png" alt="Image 1"></div>
            <div class="image"><img src="xjaw.png" alt="Image 2"></div>
            <div class="image"><img src="bitmap.png" alt="Image 3"></div>
        </div>
    </div>
    <footer>
        <ul>
            <li><a href="#">About me</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Random stuff</a></li>
            <li><a href="#">YouTube</a></li>
            <li><a href="#">Testimonials</a></li>
        </ul>
    </footer>
</body>
</html>
