<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Cssfolder/Register.css">
</head>

<body>
    <img src="Image folder\Registered_background_image.png" class="backgroundimage">
    <div class="pagecontent">
        <div class="menubar">
            <nav>
                <ul>
                    <li><a href="#">CONTACT US</a></li>
                    <li><a href="Register.php" target="blank">REGISTER</a></li>
                    <li><a href="#">LOGIN</a></li>
                </ul>
            </nav>
        </div>
        <div class="regform">
            <form action="Aboutus.php" method="post">
                <h1>Enter Your Details</h1>
                <label>Name:</label><br>
                <input type="text" class="labels" placeholder="Enter your name" required minlength="2" pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces"><br>
                <label>Phone Number:</label><br>
                <input type="number" class="labels"
                    placeholder="Enter your Phone Number" required><br>
                <label>Adress:</label><br>
                <input type="text" placeholder="Enter your place" class="labels" required  minlength="5" pattern="[A-Za-z0-9\s,.-]+"><br>
                <label>Email:</label><br>
                <input type="email" placeholder="Enter your valid email" class="labels"><br>
                <input type="submit" value="Register" class="submit">
            </form>
     </div>
     <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank" id="facebook-link">
            <i class="fab fa-facebook"></i>
        </a>
    </div>

    <script src="script.js"></script>

    </div>
</body>

</html>