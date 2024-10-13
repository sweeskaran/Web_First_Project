<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Cssfolder/Aboutus.css">
</head>
<body>
    <div class="pagecontent">
        <div class="menubar">
            <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Aboutus.php"target="blank">Aboutus</a></li>
                <li><a href="#">Contactus</a></li>
                <li><a href="Register.php"target="blank">Register</a></li>
                <li><a href="#" target="blank">Login</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Register Place</a></li>
            </nav>
           </div>
           <div class="about">
            <p>
                <H3>Taste Buds Bistro Restaurant Jaffna,Sri Lanka</H3>
                <h1>AYUBOWAN |VANAKKAM |WELCOME</h1>
                A very warm welcome to Taste Buds Bistro Restaurant Jaffna. Celeberating our 10th year Anniversary we take great pride in Our Contemporary Uniqueness, attention to small details and being different from our competition. We are an extremely busy Restaurant Complex and famous worldwide through Trip Advisor and other Travel Guides, because we do care about our quality policy and customers.

            <h2>Our Growth</h2>
            <p>
                we celebrate our opening ceremoney on <i><strong>24th March 2014</strong></i>
            <div class="gallery">
            <?php
        $directory = ';
        $images = glob($directory . "*.{jpg,png,gif,jpeg}", GLOB_BRACE);

        foreach($images as $image) {
            echo '<div class="gallery-item">';
            echo '<img src="' . $image . '" alt="Restaurant Image">';
            echo '</div>';
        }
        ?>
            </div>
            </p>
                  <!-- <a href="https://www.facebook.com/share/3P6cHKB9XTCaGNX9/?mibextid=qi2Omg"><img src="Image folder/facebook_image.avif" class="facebooklogo"></a> 
                <a href="0768700530"><img src="Image folder/Phone_image.jpeg"></a>--><br>
                <div class="socialmedia">
                <a href="https://www.facebook.com" class="facebook-icon" target="blank">
        <i class="fab fa-facebook-f"></i>
        </a>
        <br>
        <a href="tel:0768700530" class="phone-icon" target="blank">
            <i class="fas fa-phone-alt"></i>
        </a>
        <br>
        <a href="" class="instagram-icon" target="blank">
        <i class="fab fa-instagram"></i>
        </a>

                </div>
                
            </p>
           </div>
    </div>
    <script src="Js folder/Aboutus.js"></script>
</body>
</html>