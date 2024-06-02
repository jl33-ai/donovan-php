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
        <div class="top-section">
        <h1>The Donovan Project</h1>
        <p>Help your business grow, for free</p>
        <?php 
            $num_businesses = 9;
            $text = "So far I have helped " . $num_businesses . " businesses :)";
            
            function renderRainbowText($text) {
                $colors = ['#FF0000', '#FF7F00', '#FFFF00', '#00FF00', '#0000FF', '#4B0082', '#9400D3'];
                $text_length = strlen($text);
                $rainbow_text = '';
                
                for ($i = 0; $i < $text_length; $i++) {
                    $color = $colors[$i % count($colors)];
                    $rainbow_text .= '<span style="color:' . $color . ';">' . htmlspecialchars($text[$i]) . '</span>';
                }
                
                return $rainbow_text;
            }
            
            echo renderRainbowText($text);
        ?>
        </div>
        <!-- <div class="logo-container">
        <img src="newlogo.png" alt="The logo">
        </div> -->
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
            <div class="column">
                <div class="image"><img src="portfolio/anita-1.JPG" alt="Image 1"></div>
                <div class="image"><img src="portfolio/bitmap.png" alt="Image 2"></div>
                <div class="image"><img src="portfolio/Cover Image.png" alt="Image 3"></div>
                <div class="image"><img src="portfolio/Facebook cover photo.png" alt="Image 4"></div>
            </div>
            <div class="column">
                <div class="image"><img src="portfolio/g6175.pngAFASDFASDF.png" alt="Image 6"></div>
                <div class="image"><img src="portfolio/lil bit epic.png" alt="Image 7"></div>
                <div class="image"><img src="portfolio/profile picture draft.png" alt="Image 9"></div>
                <div class="image"><img src="portfolio/rivercog.png" alt="Image 10"></div>
            </div>
            <div class="column">
                <div class="image"><img src="portfolio/Rubber Stamp MockUp.png" alt="Image 11"></div>
                <div class="image"><img src="portfolio/invisbile.png" alt="Image 12"></div>
                <div class="image"><img src="portfolio/wide thingo.png" alt="Image 13"></div>
                <div class="image"><img src="portfolio/xjaw.png" alt="Image 14"></div>
                <div class="image"><img src="portfolio/first draft.png" alt="Image 5"></div>
            </div>
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
