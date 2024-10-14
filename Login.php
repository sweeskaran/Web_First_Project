<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" link="Cssfolder/Login.css">
</head>
<body>
   <div class="background_image">
    <img src="Image folder/login_page_image.avif" class="image">
   </div>
   <div class="pagecontent">
    <form action="Register.php" method="post" target="blank">
        <label for="username">UserName</label>
        <input type="text" id="username" name="" name="username" id="username"  required minlength="5" maxlength="15" pattern="^[a-zA-Z0-9]+$" placeholder="Enter the username"><br>
        <label>Password</label>
        <input type="text" id="password"required 
 placeholder="enter the password"><br>
<button type="submit">Submit</button>
</form>
   </div>
</body>
</html>